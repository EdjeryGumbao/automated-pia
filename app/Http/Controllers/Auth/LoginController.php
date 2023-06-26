<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAccounts;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function showLoginForm()
    {
        return view('auth.login');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'Email'; // Replace with the desired column name for the login username (in this case, 'Email')
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {   
        $Email = $request->input('Email');
        $Password = $request->input('Password');

        // Check if the email exists in the database
        $user = UserAccounts::where('Email', $Email)->first();

        if ($user && Hash::check($Password, $user->Password)) {
            // Email exists and password matches

            // Proceed with your logic for authenticated user
            Auth::login($user); // Log the user in and create a session

            // Redirect to a specific page or return a response
            return redirect()->intended('/dashboard');
        } else {
            // Email does not exist or password does not match

            // Handle the authentication failure
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        
    }
}


