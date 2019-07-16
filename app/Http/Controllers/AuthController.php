<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

/**
 * @group Auth management
 *
 *
 */
class AuthController extends Controller
{
    /**
     * Login.
     * @bodyParam name string required The name of the user.
     * @bodyParam password string required The password of the user.
     */
    public function logIn(AuthRequest $request)
    {

        //Store username and passwork to $credentials var
        $credentials = request(['name', 'password']);

        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;

        // if ($request->remember_me)
        //     $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    /**
     * Change password.
     *
     * @bodyParam old_password string required The old password.
     * @bodyParam password string required The new password.
     * @bodyParam password_confirmation string required The password for confirm.
     */
    public function changePassword(AuthRequest $request)
    {
        $user = User::findOrFail($request->user()->id);
        if (!Hash::check($request->old_password, $user->password))
        {
            return response()->json(['message' => "The old password is not correct.",],422);
        }
        $user->update(["password" => Hash::make($request->password)]);
        return response()->json(["message" => "Changed password successfully."],200);
    }

    /**
     * Logout.
     * Need access_token to logout.
     */
    public function logout(AuthRequest $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
