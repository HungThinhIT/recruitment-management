<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\User;
use App\PasswordReset;
use Hash;

/**
 * @group Reset password management
 *
 *
 */
class PasswordResetController extends Controller
{
    /**
     * Forgot the password.
     *
     * @bodyParam email email required The email of user. Example: enclave-recruitment@enclave.vn
     */
    public function forgotPasswordRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user)
            return response()->json(['message' => 'We can not find a user with that e-mail address.'
            ], 404);
        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => str_random(80)
             ]
        );
        if ($user && $passwordReset)
            $user->notify(
                new PasswordResetRequest($passwordReset->token)
            );
        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
        ]);
    }

    /**
     * Verify the token.
     *
     */
    public function verifyToken($token)
    {
        $passwordReset = PasswordReset::where('token', $token)
            ->first();
        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        }
        return response()->json($passwordReset);
    }

    /**
     * Reset the password.
     *
     * @bodyParam email email required The email of user. Example: enclave-recruitment@enclave.vn
     * @bodyParam password string required The new password.
     * @bodyParam password_confirmation string required The password confirmation.
     * @bodyParam token string required The token of request from mail.
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password'              => 'required|string|confirmed|min:3|max:255',
            'password_confirmation' => "required|string|min:3|max:255",
            'token'                 => 'required|string'
        ]);

        $passwordReset = PasswordReset::where([
            ['token', $request->token],
        ])->first();

        if (!$passwordReset)
            return response()->json([
                'message' => 'This token is invalid.'
            ], 404);

        $user = User::where('email', $passwordReset->email)->first();
        if (!$user)
            return response()->json([
                'message' => 'We can not find a user with that e-mail address.'
            ], 404);

        $user->update(["password"  => Hash::make($request->password)]);
        $passwordReset->delete();
        $user->notify(new PasswordResetSuccess($passwordReset));
        return response()->json(["message" => "Reset password successfully"],200);
    }
}
