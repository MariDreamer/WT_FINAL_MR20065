<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($request)
    {
        
        $this->create($request);

        $validation = Validator::make($request, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        return $validation;
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * 
     */
    protected function create($request)
    {
        
        $user= new User;

        $smth=array();
        $k=0;

        foreach ($request as $req)
        {
            $smth[$k]=$req;
            $k=$k+1;
        }
        

        $user->username = $smth[1];
        $user->email = $smth[2];
        $user->password = Hash::make($smth[3]);


        $user->save();
        Auth::login($user);
        return redirect()->intended('homepage');
    }

    function showRegistrationForm()
    {
        return view('auth.register');
    }
    
}