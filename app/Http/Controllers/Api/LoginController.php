<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
    	$user = User::where('email', $request->email)->first();

    	if( !empty($user) && Hash::check($request->password, $user->password)){
			$token = $user->createToken('api-token')->accessToken;
			$response = ['status'=>'success','token'=>$token];
    	}else{
    		$response = ['status'=> 'error','message'=> 'Credentials are incorrect'];
    	}
		return response()->json($response);
    }

    public function register(Request $request){
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();
    	$token = $user->createToken('api-token')->accessToken;

    	$response = ['status'=>'success','token'=>$token];
    	return response()->json($response);
    }
}
