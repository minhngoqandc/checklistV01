<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\MessageBag;
use App\Users;
use Mail;
use App\Mail\SendEmail;

class LoginController extends Controller
{
    public function getLogin(){
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->level == 1) {
                return redirect('http://localhost/checklist/public/admin/listaccount');
            }else{
                
            }
        }
    	return view('login');
    }

    public function postLogin(Request $request){
    	$pattern = [
            'email'=>'required|email',
            'password' => 'required|min:6'
        ];
        $messages= [
            'email.required' => 'Email is required field.',
            'email.email' => 'Email invalid.',
            'password.required' => 'Password is required field.',
            'password.password' => 'Password is at least 6 characters.'
        ];
        $validator = Validator::make($request->all(),$pattern,$messages);
    	if ($validator->fails()){
    		return response()->json([
    			'error' => true,
    			'message' => $validator->errors()
    		], 200);
    	} else {
    		$email = $request->input('email');
    		$password = $request->input('password');
    		$attempt=Auth::attempt(['email' => $email, 'password' => $password]);
    		if ($attempt){
    			return response()->json([
    				'error' => false,
    				'message' => 'success'
    			], 200);
    		} else {
    			$errors = new MessageBag(['errorLogin' => 'Email or Password incorrect']);
    			return response()->json([
    				'error' => true,
    				'message' => $errors
    			]);
    		}
    	}
    }
}
