<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'data' => 'user or password not found'
            ], 405);
        }
        $user->tokens()->delete();
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            'status' => 'success',
            'token' => $token
        ], 200);
    }

    public function RegisterSignUp(Request $request)
    {
        dd($request);
        // $fileName = time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
        // $request->file('image')->storeAs('uploads', $fileName);
        // call to upload the files
        // $data = $FileUploader->upload();
        // $data = $request->all();

        // $data = new User;
        // $data->name = $request->txtUsername;
        // $data->email = $request->txtEmail;
        // $data->password = Hash::make($request->txtPassword);
        // $data->foto = base64_encode()
        // $data->save();
    }
}
