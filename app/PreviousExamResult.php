<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\libraries\DummyClass;

use DB;

use Input;

class PreviousExamResult extends Model
{
    protected $table = "previousExamResults";

     public static function PreviousExamResultstore()
    {

    	 $Dummy = new DummyClass();

        $Dummy->genInfo();

    	$examname = 'SSC';

        $dataset = [];

        foreach ($Dummy->s_Subjective_Result as $key => $value) {

            $dataset[] = [
            'RegistrationNo' => Input::get('SSC_REG'),
            'Subject' => $key,
            'Grade' => $value,
            'ExamName' => $examname
            ];
        }

        DB::table('previousExamResults')->insert($dataset);


        $dataset1 = [];


        foreach ($Dummy->h_Subjective_Result as $key => $value) {

            $dataset1[] = [
            'RegistrationNo' => Input::get('HSC_REG'),
            'Subject' => $key,
            'Grade' => $value,
            'ExamName' => 'HSC'
            ];
        }

        DB::table('previousExamResults')->insert($dataset1);

    }
}
