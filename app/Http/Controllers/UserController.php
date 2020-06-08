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

        return redirect('/');
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $user = $request->get('username');
        if (User::where('username', '=', $user)->exists()) {
            try {
                $this->validate($request, [
                    'username' => 'required',
                    'password' => 'required'
                ]);
            } catch (ValidationException $e) {
                echo $e;
            }

            $user_data = array(
                'username' => $request->get('username'),
                'password' => $request->get('password')
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

    public function logout(){
        Auth::logout();

        return redirect('login');
    }

    public function showUsers() {
        $users = User::all();

        return view('users', ['users' => $users]);
    }

    public function showUserDetails($id) {
        $user = User::where('id', $id)->first();

        return view('editUser', ['user' => $user]);
    }

    public function editUser(Request $request, $id) {
        $userrank = $request->get('userRight');
        $username = $request->get('username');
        $password = $request->get('password');

        try {
            $this->validate($request, [
                'userrank' => ['required', 'integer'],
                'username' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            echo $e;
        }

        $user = User::where('id', $id)->first();

        $user->userrank = $userrank;
        $user->username = $username;
        $user->password = Hash::make($password);

        $user->save();

        return redirect('users');
    }

    public function deleteUser($id) {
        User::find($id)->delete();

        return redirect('users');
    }
}
