<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Admission: University of Chittagong</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        {{ Html::style('css/style.css') }}
        {{ Html::style('http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600') }}
        {{ Html::style('css/style-input.css') }}
        {{ Html::style('css/normalize.min.css') }}
        {{ Html::style('css/style.css') }}

        {{ Html::script('js/cufon-yui.js') }}
        {{ Html::script('js/cufon-georgia.js') }}
        {{ Html::script('js/jquery-1.4.2.min.js') }}
        {{ Html::script('js/script.js') }}
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="menu_nav">
                        <ul>
                            <li><a href="/Home"><span>Home</span></a></li>
                            <li class="active"><a href="{{url('/Registration')}}"><span>Registration</span></a></li>
                            <li><a href="{{url('/Login')}}""><span>Log In</span></a></li>
                            <li><a href="{{url('/ContactUs')}}"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    <div class="logo">

                        <div id="bannerLeft" style="background: none;margin:5px">
                            <a href="#" style="text-decoration: none;color:#281A56;">
                                <div style="float: left;height:100px;">
                                {{ HTML::image('images/cu.png', 'Cu picture', array( 'height' => 90 )) }}
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
                        <h1 style="text-align: center;": #010101">Registration</h1>

                        @if(Session::has('success'))

                        <div class="row">
                            <div class="col-md-12">
                              <div class="alert alert-success">
                                  {{Session::get('success')}}
                                  </div>
                              </div>
                        </div>
                        @endif
                        {!! Form::open(['route' => 'Registration', 'class'=> 'form-horizental']) !!}
                            <div class="top-row">
                                <div class="field-wrap">
                                    <h3>
                                        SSC Reg<span class="req">*</span>
                                    </h3>
                                    <input type="text" name = "SSC_REG" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <h3>
                                        SSC Board<span class="req">*</span>
                                    </h3>
                                    <input type="text" name = "SSC_Board"  required autocomplete="off"/>
                                </div>
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <h3>
                                        HSC Reg<span class="req">*</span>
                                    </h3>
                                    <input type="text" name = "HSC_REG" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <h3>
                                        HSC Board<span class="req">*</span>
                                    </h3>
                                    <input type="text"  name = "HSC_Board" required autocomplete="off"/>
                                </div>
                            </div>

                            <div class="field-wrap">
                                <h3>
                                    Email Address<span class="req">*</span>
                                </h3>
                                <input type="email" name = "Email" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <h3>
                                    User Name<span class="req">*</span>
                                </h3>
                                <input type="text" name = "UserName" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <h3>
                                    Set A Password<span class="req">*</span>
                                </h3>
                                <input type="password" name = "pass_word" required autocomplete="off"/>
                            </div>

                            {!! Form::submit('Get Started', $attributes = ['class'=>'button button-block']) !!}

                            <input type="hidden" name="_token" value="{{Session::token()}}">

                        {!! Form::close() !!}

                    </div>

                </div>
                <div class="footer"
                     >
                    <div class="footer_resize">
                        <p class="rf">Design by <a target="_blank" href="#">CSE Department, University of Chittagong</a></p>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>


    </body>
</html>