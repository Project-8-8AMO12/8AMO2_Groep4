<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function registerView()
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $username = $request->get('naam');
        $password = $request->get('wachtwoord');
        $userrank = $request->get('userRight');

        try {
            $this->validate($request, [
                'userrank' => ['required', 'integer'],
                'naam' => ['required', 'string', 'max:255'],
                'wachtwoord' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            echo $e;
        }

        $user = new User();
        $user->userrank = $userrank;
        $user->username = $username;
        $user->password = Hash::make($password);

        $user->save();

        $user_data = array(
            'username' => $username,
            'password' => $password
        );

        if (Auth::attempt($user_data)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Something went wrong.');
        }
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $user = $request->get('naam');
        if (User::where('username', '=', $user)->exists()) {
            try {
                $this->validate($request, [
                    'naam' => 'required',
                    'wachtwoord' => 'required'
                ]);
            } catch (ValidationException $e) {
                echo $e;
            }

            $user_data = array(
                'username' => $request->get('naam'),
                'password' => $request->get('wachtwoord')
            );

            if (Auth::attempt($user_data)) {
                return redirect('/');
            } else {
                return back()->with('error', 'Wrong Login Details');
            }
        } else {
            return back()->with('error', 'Please enter login details');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
