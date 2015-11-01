<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Model\Users;


/**
 * 
 */
class AuthController extends Controller{


	public function postLogin(Request $request){

		if (Auth::check())
		{
        	return response()->json(Auth::user());
		}

		$email = $request->input('email');
		$password = $request->input('password');

	  	if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1]))
        {
            return response()->json(Auth::user());
        }

        return response()->json(false);

	}


	public function getLogout(Request $request){

		 Auth::logout();
	 	if (Auth::check())
		{
        	return response()->json(false);
		}

        return response()->json(true);

	}


	/**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        if (Auth::check())
        {
            return response()->json(Auth::user());
        }
        
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return response()->json(false);
        }

        $user = $this->create($request->all());

        Auth::login($user);

        return response()->json(Auth::user());
    }



    protected function create(array $data)
    {
        return Users::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'active' => 1,
            'expiration_date' => new \DateTime('+ 1 year'),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'photo' => $data['photo'],
            'description' => $data['description'],
        ]);
    }

 /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'description' => 'min:10|max:160',
            'photo' => array(
                'url',
                'regex:/.jpg$|.gif$|.jpeg$|.png$/')
        ], [
            'email.required' => 'Il faut une adresse email!!',
            'email.email' => 'Mauvaise adresse email ...:(',
            'required' => 'Ce champ doit être renseigné',
            'min' => 'Ce champ doit faire plus de :min caractères',
            'max' => 'Ce champ doit faire moins de :max caractères',
            'confirmed' => 'La confirmation ne correspond pas au mot de passe',
            'unique' => 'Cette adresse email est déjà utilisée',
            'url' => 'Ce champ doit être une URL valide',
            'regex' => 'Ce champ doit être une image valide'

        ]);
    }



	

	
}


?>
