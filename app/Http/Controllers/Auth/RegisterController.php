<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserAccounts;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Lastname' => ['required', 'string'],
            'Firstname' => ['required', 'string'],
            'Middlename' => ['nullable', 'string'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:user_accounts'],
            'ContactNumber' => ['required', 'string'],
            'Password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return UserAccounts::create([
            'Lastname' => $data['Lastname'],
            'Firstname' => $data['Firstname'],
            'Middlename' => $data['Middlename'],
            'CompleteName' => $data['Lastname'] . ', ' . $data['Firstname'] . ' ' . ($data['Middlename'] ?? ''),
            'Email' => $data['Email'],
            'UserType' => $data['UserType'] ?? 'user',
            'ContactNumber' => $data['ContactNumber'],
            'Password' => Hash::make($data['Password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
    
        $user = $this->create($request->all());
        $this->guard()->login($user);
    
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}