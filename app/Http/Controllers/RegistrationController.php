<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use App\ExamInfo;
use App\PreviousExamResult;
use Auth;

class RegistrationController extends Controller
{
     public function index()
    {
       return view('Registration');

    }

     public function index2()
    {
       return view('Login');

    }

     
    public function store(Request $request)
    {
    	//echo "Joy Roy.";

    	$data = Input::except(array('token'));

    	//var_dump($data);

    	$rule = array(
    		'SSC_REG' => 'required' ,
    		'SSC_Board' => 'required' ,
    		'HSC_REG' => 'required' ,
    		'HSC_Board' => 'required' ,
    		'Email' => 'required|email' ,
    		'UserName' => 'required' ,
    		'pass_word' => 'required' ,);

    	$validator = Validator::make($data, $rule);

    	if($validator->fails())
    	{
    		return Redirect::to('Registration')->withErrors($validator);
    	}

    	else {
    		Register::formstore(Input::except(array('token')));
    		ExamInfo::examinfostore(Input::except(array('token')));
    		PreviousExamResult::PreviousExamResultstore(Input::except(array('token')));

    		return Redirect::to('Registration')->with('success', 'Successfully registered');
    	}
    }

    public function login()
    {
    	//echo "login function";

    	  	$data = Input::except(array('token'));

    	

    	$rule = array(
    		'Email' => 'required|email' ,
    		'pass_word' => 'required' ,);



    	$validator = Validator::make($data, $rule);

    	if($validator->fails())
    	{
    		return Redirect::to('Login');
    	}

    	else
    	{
    		//$data = Input::except(array('token'));

    		$userdata =array(
    			'email' => Input::get('Email'),
    			 'password'=> Input::get('pass_word'));

    		if(Auth::attempt($userdata))
    		{
    			return Redirect::to('ApplicantHome');
    		}
    		else
    		{
    			return Redirect::to('Login');
    		}
    	}

    	
    }
}
