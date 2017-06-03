<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\libraries\DummyClass;
use App\Register;
use Input;

class ExamInfo extends Model
{
    protected $table = "exam_infos";

    protected $primaryKey = "RegistrationNo";

    public static function examinfostore()
    {
    	$SSC_REG = Input::get('SSC_REG');
    	//echo $SSC_REG. " ";
    	$SSC_Board = Input::get('SSC_Board');
    	//echo $SSC_Board. " ";
    	$HSC_REG  = Input::get('HSC_REG');
    	//echo $HSC_REG. " ";
    	$HSC_Board = Input::get('HSC_Board');
    	//echo $HSC_Board. " ";

    	$examInformation = new ExamInfo();
    	$Dummy = new DummyClass();

        $Dummy->genInfo();

        $examInformation->RegistrationNo = $SSC_REG;
        $examInformation->ExamName = 'SSC';
        $examInformation->Institute = $Dummy->s_Institute;
        $examInformation->Center = $Dummy->s_center;
        $examInformation->RollNo = $Dummy->s_Roll;
        $examInformation->Board = $SSC_Board;
        $examInformation->GroupName = $Dummy->s_HGroup;
        $examInformation->SessionYear = $Dummy->s_Session;
        $examInformation->Type = 'Regular';
        $examInformation->Result = $Dummy->s_Result;
        $examInformation->GPA = $Dummy->s_Gpa;

         $alldata = Register::all();


        foreach ($alldata as $data) {
            $id = $data->id;
        }
        $examInformation->id = $id;

        $examInformation->save();

     
        $exam = new ExamInfo();

        $exam->RegistrationNo = $HSC_REG;
        $exam->ExamName = 'HSC';
        $exam->Institute = $Dummy->h_Institute;
        $exam->Center = $Dummy->h_center;
        $exam->RollNo = $Dummy->h_Roll;
        $exam->Board = $HSC_Board;
        $exam->GroupName = $Dummy->h_HGroup;
        $exam->SessionYear = $Dummy->h_Session;
        $exam->Type = 'Regular';
        $exam->Result = $Dummy->h_Result;
        $exam->GPA = $Dummy->h_Gpa;
        $exam->id = $id;

        $exam->save();

    }
}
