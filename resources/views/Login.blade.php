<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Admission: University of Chittagong</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/style-input.css"/>
        <link rel="stylesheet" href="css/normalize.min.css"/>

        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-georgia.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="menu_nav">
                        <ul>
                            <li><a href="/Home"><span>Home</span></a></li>
                            <li ><a href="{{url('/Registration')}}"><span>Registration</span></a></li>
                            <li class="active" ><a href="{{url('/Login')}}""><span>Log In</span></a></li>
                            <li><a href="{{url('/ContactUs')}}"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    <div class="logo">

                        <div id="bannerLeft" style="background: none;margin:5px">
                            <a href="#" style="text-decoration: none;color:#281A56;">
                                <div style="float: left;height:100px;">
                                    <img src="images/cu.png" style="
                                         height: 90px;"></img>
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
            <div class="content" >
                <div class="content_resize">
                    <div id="signup" style="margin-left: 30%; margin-right: 30% ">   
                        <h1 style="text-align: center;": #010101">Log In</h1>
                        <form action="{{ route('Login') }}" method="post">

                            <div class="field-wrap">
                                <h3>
                                    Email Address<span class="req">*</span>
                                </h3>
                                <input type="email" name = "Email" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <h3>
                                    Password<span class="req">*</span>
                                </h3>
                                <input type="password" name = "pass_word" required autocomplete="off"/>
                            </div>

                            <button type="submit" class="button button-block"/>Log In</button>
                            <input type="hidden" name="_token" value="{{Session::token()}}">

                        </form>

                    </div>

                </div>
                <div class="footer"style="
                     position:fixed;
                     width: 100%;
                     bottom:0;
                     left:0;"
                     >
                    <div class="footer_resize">
                        <p class="rf">Design by <a target="_blank" href="#">CSE Department, University of Chittagong</a></p>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>


    </body>
</html>