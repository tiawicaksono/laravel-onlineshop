<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function FormLogin()
    {
        return view('login');
    }

    public function RegisterSignUp(Request $request)
    {
        // $fileName = time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
        // $request->file('image')->storeAs('uploads', $fileName);
        // call to upload the files
        // $data = $FileUploader->upload();
        // $data = $request->all();
        try {
            $data = new User;
            $data->name = $request->txtUsername;
            $data->email = $request->txtEmail;
            $data->password = Hash::make($request->txtPassword);
            // $data->foto = base64_encode()
            $data->save();

            return response()->json(['success' => 'Got Simple Ajax Request.']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function SignIn(Request $request)
    {
        try {
            // $user = User::where('email', $request->sigin_email)->first();
            $email = $request->sigin_email;
            $password = $request->sigin_password;
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                $request->session()->regenerate();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Login Gagal!'
                ], 401);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
