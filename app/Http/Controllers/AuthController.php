<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class AuthController extends Controller
{
    public function signUp(AuthRequest $request){

        //THIS IS DEMO (DEV) - FUNCTION. THIS FUNCTION WILL REMOVE AFTER TEST SUCCESSFULLY.
        $user = new User([
            'name' => $request->name,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $request->image,
            'password' => Hash::make($request->password)
        ]);

        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);

        // return response()->json(["message" => "Enclave Recruitment System is not support SignUp." ],200);
    }

    public function logIn(AuthRequest $request){

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
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    // public function user(Request $request)
    // {
    //     return response()->json($request->user());
    // }
}
