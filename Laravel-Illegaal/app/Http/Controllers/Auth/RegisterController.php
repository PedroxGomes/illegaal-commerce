<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/illegaal';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
<<<<<<< HEAD
            'telefone'=> 'required|numeric|min:9',
            'Cep'=> 'required|numeric|min:8'
=======
            'Cep'=> 'required|numeric|min:8',
            'Telefone'=> 'required|numeric|min:9',
            'Data_De_Nascimento'=> 'required|numeric|min:8',
>>>>>>> 4af23ec914e53e942f4eec67dbdc4db01083fba7
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return clientes::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Cep' => $data['Cep'],
<<<<<<< HEAD
=======
            'Telefone' => $data['telefone'],
            'Data_De_Nascimento' => $data['Data_De_Nascimento'],
>>>>>>> 4af23ec914e53e942f4eec67dbdc4db01083fba7
        ]);
    }
}
