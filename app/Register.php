<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\libraries\DummyClass;

use Input;
use Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    //

	protected $table = "ApplicantInfo";

	//public $timestamps = false;

    public static function formstore($data)
    {
    	//echo "Here model is";

    	//var_dump($data);


    	
    	$Email = Input::get('Email');
    	//echo $Email. " ";
    	$UserName = Input::get('UserName');
    	//echo $UserName. " ";
    	$pass_word = Hash::make(Input::get('pass_word'));
    	//echo $pass_word. " ";

    	$users = new Register();
    	$Dummy = new DummyClass();

        $Dummy->genInfo();

    	$users->UserName = $UserName;
    	$users->email = $Email;
    	$users->password = $pass_word;

    	$users->Name = $Dummy->Name;
        $users->FatherName = $Dummy->FatherName;
        $users->MotherName = $Dummy->MotherName;
        $users->DateOfBirth = $Dummy->DateOfBirth;


    	//$users->SSC_REG = $SSC_REG;
    	//$users->SSC_Board = $SSC_Board;
    	//$users->HSC_REG  = $HSC_REG;
    	//$users->HSC_Board = $HSC_Board;

    	$users->save();


    }


}
