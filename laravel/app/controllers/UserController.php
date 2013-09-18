<?php

use Illuminate\Support\MessageBag;

class UserController extends \BaseController {

    public function login()
    {
        // get POST data
        $validator = Validator::make(Input::all(), [
            "username" => "required",
            "password" => "required"
            ]);

        if($validator->passes()){

            $credentials = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
                );

            if(Auth::attempt($credentials))
            {
            // we are now logged in, go to admin
                return Redirect::route('admin');
            }
        }

        $data["errors"] = new MessageBag([
            "password" => [
            "Username and/or password invalid."
            ]
            ]);

        return View::make('user.login', $data);

    }

}
