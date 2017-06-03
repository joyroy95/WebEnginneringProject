<?php

namespace App\libraries;

class DummyClass
{
    public $email;
    public $username;
    public $password;
    public $DateOfBirth;
    public $FatherName;
    public $MotherName;
    public $Name;
    public $HSCRegistrationNo;
    public $h_Institute;
    public $h_center;
    public $h_Roll;
    public $h_Board;
    public $h_HGroup;
    public $h_Session;
    public $h_Result;
    public $h_Gpa;
    public $h_Subjective_Result;
    public $SSCRegistrationNo;
    public $s_Institute;
    public $s_center;
    public $s_Roll;
    public $s_Board;
    public $s_HGroup;
    public $s_Session;
    public $s_Result;
    public $s_Gpa;
    public $s_Subjective_Result;

    public function genInfo()
    {
        $this->DateOfBirth = $this->BirthDateRandomString();
        $this->FatherName = $this->NamegenerateRandomString();
        $this->MotherName = $this->NamegenerateRandomString();
        $this->Name = $this->NamegenerateRandomString();
        $this->gen_ssc_info();
        $this->gen_hsc_info();
    }

    function gen_hsc_info()
    {
        $array_group = array("science", "arts", "commerce");
        $this->h_HGroup = $array_group[rand(0, 2)];
        $this->gen_hsc_common_subject_result();
        if ($this->h_HGroup == "science" && $this->s_HGroup=="science") {
            $this->gen_hsc_science_subject_result();
        } else if ($this->h_HGroup == "arts") {
            $this->gen_hsc_arts_subject_result();
        } else {
            $this->gen_hsc_commerce_subject_result();
        }
        $sum = 0.0;
        foreach ($this->h_Subjective_Result as $key => $value) {
            if ($key == 'Biology' || $key == 'Statistics' || $key == 'Economics')
                $sum += ($value > 2 ? ($value - 2) : 0);
            else
                $sum += floatval($value);
        }
        $this->h_Gpa = min(5, $sum / 6);
        $this->h_Result = 'passed';
        $this->h_Institute = $this->NamegenerateRandomString1();
        $this->h_center = $this->NamegenerateRandomString1();
        $this->h_Roll = $this->NamegenerateRandomStringRoll();
        $this->h_Session = '2015-16';
    }

    function gen_ssc_info()
    {
        $array_group = array("science", "arts", "commerce");
        $this->s_HGroup = $array_group[rand(0, 2)];
        $this->gen_ssc_common_subject_result();
        if ($this->s_HGroup == "science") {
            $this->gen_ssc_science_subject_result();
        } else if ($this->s_HGroup == "arts") {
            $this->gen_ssc_arts_subject_result();
        } else {
            $this->gen_ssc_commerce_subject_result();
        }
        $sum = 0.0;
        foreach ($this->s_Subjective_Result as $key => $value) {
            if ($key == 'Biology' || $key == 'Computer')
                $sum += ($value > 2 ? ($value - 2) : 0);
            else
                $sum += floatval($value);
        }
        $this->s_Gpa = min(5, $sum / 10);
        $this->s_Result = 'passed';
        $this->s_Institute = $this->NamegenerateRandomString1();
        $this->s_center = $this->NamegenerateRandomString1();
        $this->s_Roll = $this->NamegenerateRandomStringRoll();
        $this->s_Session = '2013-14';
    }

    function gen_ssc_common_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->s_Subjective_Result['Bangla'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['English'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Mathematics'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Islam'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Physical education'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['ICT'] = $array_result[rand(0, 5)];
    }

    function gen_ssc_science_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->s_Subjective_Result['Physics'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Chemistry'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Biology'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Bangladesh and Global studies'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Higher Mathematics'] = $array_result[rand(0, 5)];
    }

    function gen_ssc_arts_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->s_Subjective_Result['History'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Economics'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['General Science'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Geography'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Computer'] = $array_result[rand(0, 5)];
    }

    function gen_ssc_commerce_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->s_Subjective_Result['Accounting'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Business Enterpreneurship'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Finance'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['General Science'] = $array_result[rand(0, 5)];
        $this->s_Subjective_Result['Computer'] = $array_result[rand(0, 5)];
    }

    function gen_hsc_common_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->h_Subjective_Result['Bangla'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['English'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['ICT'] = $array_result[rand(0, 5)];
    }

    function gen_hsc_science_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->h_Subjective_Result['Physics'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Chemistry'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Biology'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Higher Mathematics'] = $array_result[rand(0, 5)];
    }

    function gen_hsc_commerce_subject_result()
    {
        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->h_Subjective_Result['Accounting'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Management'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['finance'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Statistics'] = $array_result[rand(0, 5)];
    }

    function gen_hsc_arts_subject_result()
    {

        $array_result = array(1, 2, 3, 3.5, 4, 5);
        $this->h_Subjective_Result['Sociology'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['History'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Civics'] = $array_result[rand(0, 5)];
        $this->h_Subjective_Result['Economics'] = $array_result[rand(0, 5)];
    }

    function NamegenerateRandomString()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $randomString .= ' ';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function NamegenerateRandomString1()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        for ($i = 0; $i < 8; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function NamegenerateRandomStringRoll()
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

//echo "joy";

     function BirthDateRandomString() {
        $temp = '0';

    $var1 = rand(1990, 2002);

        $var1 .= '-';
        $temp1 = rand(1, 12);
        if ($temp1 >= 1 && $temp1 <= 9) {
            $var2 = $temp . $temp1;
            $var1 .= $var2;
        } else {
            $var1 .= $temp1;
        }
        $var1 .= '-';
        
        $temp1 = rand(1, 30);

        if ($temp1 >= 1 && $temp1 <= 9) {
            $temp2 = $temp . $temp1;
        $var1 .= $temp2;
        }
    else $var1 .= $temp1;
        return $var1;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

