<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Admission: University of Chittagong</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-georgia.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
            }

            td, th {
                text-align: left;
                padding: 2px;
                padding-left: 8px;
                border-bottom: 1px dashed black; 
            }
            tr{
                background-color: #428086;

            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="menu_nav">
                        <ul>
                            <li class="active"><a href="{{url('/ApplicantHome')}}"><span>Applicant info</span></a></li>
                            <li><a href="{{url('/Apply')}}"><span>Apply</span></a></li>
                            <li><a href="{{url('/Result')}}"><span>Result</span></a></li>
                            <li ><a href="{{url('/logout')}}"><span>Logout</span></a></li>
                            <li><a href="{{url('/ContactUs')}}"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    <div class="logo">

                        <div id="bannerLeft" style="background: none;margin:5px">
                            <a href="#" style="text-decoration: none;color:#281A56;">
                                <div style="float: left;height:100px;">
                                    <img src="images/cu.png" style="
                                         height: 90px;
                                         ">
                                </div>
                                <div style="float:left;padding:10px;color:#ffffff;"><h2>University Of Chittagong<br>Admission Test  2017-18</h2><br>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clr"></div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="content" style="margin-left: 20%; margin-right: 20% ">
                <div>
                    <h2>Personal Information</h2>
                    <table style="width:100%">

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Name</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $name = DB::table('ApplicantInfo')->where('id', $Id)->value('Name');
                             echo $name;
                             ?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Fathers Name</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $FatherName = DB::table('ApplicantInfo')->where('id', $Id)->value('FatherName');
                             echo $FatherName;
                             ?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Mothers name</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $MotherName = DB::table('ApplicantInfo')->where('id', $Id)->value('MotherName');
                             echo $MotherName;
                             ?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">UserName</p></td>
                            <td><p style="font-size:15px"><?php
                            $UserName = Auth::user()->UserName;
                            echo $UserName; ?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Date of Birth</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $DateOfBirth = DB::table('ApplicantInfo')->where('id', $Id)->value('DateOfBirth');
                             echo $DateOfBirth;
                             ?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Email</p></td>
                            <td><p style="font-size:15px"><?php $Email = Auth::user()->email;
                            echo $Email;?></p></td>
                        </tr>

                    </table>
                </div>

                <div>
                    <h2>HSC Information</h2>
                    <table style="width:100%">

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Registration</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $HSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'HSC')->value('RegistrationNo');
                             echo $HSC_REG;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Board</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $HSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'HSC')->value('RegistrationNo');
                             $HSC_Board = DB::table('exam_infos')->where('RegistrationNo', $HSC_REG)->value('Board');
                             echo $HSC_Board;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Group</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $HSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'HSC')->value('RegistrationNo');
                             $Group = DB::table('exam_infos')->where('RegistrationNo', $HSC_REG)->value('GroupName');
                             echo $Group;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Session</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $HSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'HSC')->value('RegistrationNo');
                             $SessionYear = DB::table('exam_infos')->where('RegistrationNo', $HSC_REG)->value('SessionYear');
                             echo $SessionYear;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">GPA</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $HSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'HSC')->value('RegistrationNo');
                             $GPA = $HSC_Board = DB::table('exam_infos')->where('RegistrationNo', $HSC_REG)->value('GPA');
                             echo $GPA;?></p></td>
                        </tr>

                    </table>
                </div>
                <div>
                    <h2>SSC Information</h2>
                    <table style="width:100%">

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Registration</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $SSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'SSC')->value('RegistrationNo');
                             echo $SSC_REG;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Board</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $SSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'SSC')->value('RegistrationNo');
                             $SSC_Board = DB::table('exam_infos')->where('RegistrationNo', $SSC_REG)->value('Board');
                             echo $SSC_Board;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Group</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $SSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'SSC')->value('RegistrationNo');
                             $Group = DB::table('exam_infos')->where('RegistrationNo', $SSC_REG)->value('GroupName');
                             echo $Group;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">Session</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $SSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'SSC')->value('RegistrationNo');
                             $SessionYear = DB::table('exam_infos')->where('RegistrationNo', $SSC_REG)->value('SessionYear');
                             echo $SessionYear;?></p></td>
                        </tr>

                        <tr>
                            <td style="width:20%"><p style="font-size:22px">GPA</p></td>
                            <td><p style="font-size:15px"><?php
                            $Email = Auth::user()->email;
                             $Id = DB::table('ApplicantInfo')->where('email', $Email)->value('id'); 
                             $SSC_REG = DB::table('exam_infos')->where('id', $Id)->where('ExamName', 'SSC')->value('RegistrationNo');
                             $GPA = $HSC_Board = DB::table('exam_infos')->where('RegistrationNo', $SSC_REG)->value('GPA');
                             echo $GPA;?></p></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="footer" >
                <div class="footer_resize">
                    <p class="rf">Design by <a target="_blank" href="#">CSE Department, University of Chittagong</a></p>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </body>
</html>
