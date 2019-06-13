<?php

namespace App\Http\Controllers;

use App\Models\Registermodal;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

use Session;
use Alert;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('register.index');
    }

    public function insert(Request $request)
    {
    	$this->validate($request, [
    		'firstname'	=>	'required',
			'lastname'	=>	'required',
			'password'	=>	'required',
			'username'	=>	'required',
			'gender'	=>	'required',
			'email'		=>	'required',
			'dob'		=>	'required',
			'conf_password'	=>	'required',
			'mobile'	=>	'required'
    	]);

    	// Get Post Data in $request
    	$postData = $request->all();

    	//Insert Data
        Registermodal::create($postData);

        // Message Set
        Session::flash('success_msg', 'Register Successfully');

        return redirect()->route('register.index');

    }

    public function login()
    {
    	return view('register.login');
    }

    public function logindata(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $putt = $request->only('username','password');
        $gett = Registermodal::all();
        foreach ($gett as $val) {
            if ($val['username'] == $putt['username'] && $val['password'] == $putt['password']) {
                return redirect()->route('register.showusers');
            } 
        }
        
        Session::flash('fail_msg', 'Invalid Credetials');
		return redirect()->route('register.login');
    
    }

    public function showusers()
    {

    	$data = Registermodal::all();
    	return view('register.showall', ['data' => $data]);
    
    }

}
