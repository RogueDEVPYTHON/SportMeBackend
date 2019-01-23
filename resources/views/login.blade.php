<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

	<meta charset="utf-8">

	<title>Dashboard - {{ $title }}</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
    <style>
        body{
            margin:0;
            color:#6a6f8c;
            background-color: rgba(245, 245, 245, 1);
            font:600 16px/18px 'Open Sans',sans-serif;
        }
        input.switch {
            -moz-appearance: none;
            -webkit-appearance: none;
            -o-appearance: none;
            appearance: none;
            width: 84px;
            height: 47.25px;
            border-radius: 47.25px;
            box-shadow: inset -33.6px 0px 0px 0px rgba(220, 220, 220, 1);
            border: 3.675px solid rgba(220, 220, 220, 1);
            outline: none;
            transition: 0.05s;
            cursor: pointer;
            background-color: rgba(255, 255, 255, 1);
        }
        .form-inline {
            display: flex;
        }
        .form-check {
            margin:5px 10px;x
        }
        input.switch:after {
            content: "\2715";
            font-size: 23.625px;
            display: inline-flex;
            justify-content: center;
            width: 42px;
            line-height: 47.25px;
            position: relative;
            z-index: 99;
            left: 0;
            top: -3.675px;
            color: rgba(220, 220, 220, 1);
            transition: 0.05s;
        }
        input.switch:checked {
            box-shadow: inset 33.6px 0px 0px 0px rgba(33, 150, 243, 1);
            border: 3.675px solid rgba(33, 150, 243, 1);
        }
        input.switch:checked + label.switch-label {
            color: rgba(33, 150, 243, 1);
        }
        input.switch:checked:after {
            content: "\2713";
            left: 38.325px;
            color: rgba(33, 150, 243, 1);
        }
        label.switch-label {
            font-size: 23.625px;
            height: 47.25px;
            display: flex;
            line-height: 47.25px;
            padding: 0 0 0 21px;
            color: rgba(220, 220, 220, 1);
        }
        input.radiobutton {
            -moz-appearance: none;
            -webkit-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: absolute;
            display: inline-block;
            width: 124px;
            height: 83px;
            border-radius: 8px;
            box-shadow: inset 124px 124px 0px 124px rgba(220, 220, 220, 1);
            outline: none;
        }
        input.radiobutton:checked {
            box-shadow: inset 124px 124px 0px 124px rgba(33, 150, 243, 1);
        }
        input.radiobutton:checked + label.radiobutton-label {
            color: white;
        }
        input.radiobutton:checked + label.radiobutton-label:after {
            content: "\2713";
            width: 32px;
            height: 32px;
            line-height: 32px;
            border-radius: 32px;
            background-color: white;
            color: rgba(33, 150, 243, 1);
            box-shadow: 0px 0px 0px 2px rgba(33, 150, 243, 1);
            z-index: 999;
            position: absolute;
            top: -6px;
            right: -6px;
        }
        label.radiobutton-label {
            width: 124px;
            height: 83px;
            position: relative;
            font-size: 23.625px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px;
            color: rgba(169, 169, 169, 1);
            text-align: center;
            font-size: 1rem;
            cursor: pointer;
            font-weight: bold;
        }
        label.radiobutton-label span {
            font-size: 1rem;
            font-weight: normal;
        }

        *,:after,:before{box-sizing:border-box}
        .clearfix:after,.clearfix:before{content:'';display:table}
        .clearfix:after{clear:both;display:block}
        a{color:inherit;text-decoration:none}

        .login-wrap{
            width:100%;
            margin:auto;
            max-width:525px;
            min-height:670px;
            position:relative;
            background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
            box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
        }
        .login-html{
            width:100%;
            height:100%;
            position:absolute;
            padding:90px 70px 50px 70px;
            background:rgba(40,57,101,.9);
        }
        .login-html .sign-in-htm,
        .login-html .sign-up-htm{
            top:0;
            left:0;
            right:0;
            bottom:0;
            position:absolute;
            transform:rotateY(180deg);
            backface-visibility:hidden;
            transition:all .4s linear;
        }
        .login-html .sign-in,
        .login-html .sign-up,
        .login-form .group .check{
            display:none;
        }
        .login-html .tab,
        .login-form .group .label,
        .login-form .group .button{
            text-transform:uppercase;
        }
        .login-html .tab{
            font-size:22px;
            margin-right:15px;
            padding-bottom:5px;
            margin:0 15px 10px 0;
            display:inline-block;
            border-bottom:2px solid transparent;
        }
        .login-html .sign-in:checked + .tab,
        .login-html .sign-up:checked + .tab{
            color:#fff;
            border-color:#1161ee;
        }
        .login-form{
            min-height:345px;
            position:relative;
            perspective:1000px;
            transform-style:preserve-3d;
        }
        .login-form .group{
            margin-bottom:15px;
        }
        .login-form .group .label,
        .login-form .group .input,
        .login-form .group .button{
            width:100%;
            color:#fff;
            display:block;
        }
        .login-form .group .input,
        .login-form .group .button{
            border:none;
            padding:15px 20px;
            border-radius:25px;
            background:rgba(255,255,255,.1);
        }
        .login-form .group input[data-type="password"]{
            text-security:circle;
            -webkit-text-security:circle;
        }
        .login-form .group .label{
            color:#aaa;
            font-size:12px;
        }
        .login-form .group .button{
            background:#1161ee;
        }
        .login-form .group label .icon{
            width:15px;
            height:15px;
            border-radius:2px;
            position:relative;
            display:inline-block;
            background:rgba(255,255,255,.1);
        }
        .login-form .group label .icon:before,
        .login-form .group label .icon:after{
            content:'';
            width:10px;
            height:2px;
            background:#fff;
            position:absolute;
            transition:all .2s ease-in-out 0s;
        }
        .login-form .group label .icon:before{
            left:3px;
            width:5px;
            bottom:6px;
            transform:scale(0) rotate(0);
        }
        .login-form .group label .icon:after{
            top:6px;
            right:0;
            transform:scale(0) rotate(0);
        }
        .login-form .group .check:checked + label{
            color:#fff;
        }
        .login-form .group .check:checked + label .icon{
            background:#1161ee;
        }
        .login-form .group .check:checked + label .icon:before{
            transform:scale(1) rotate(45deg);
        }
        .login-form .group .check:checked + label .icon:after{
            transform:scale(1) rotate(-45deg);
        }
        .login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
            transform:rotate(0);
        }
        .login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
            transform:rotate(0);
        }

        .hr{
            height:2px;
            margin:60px 0 50px 0;
            background:rgba(255,255,255,.2);
        }
        .foot-lnk{
            text-align:center;
        }
    </style>
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">  
                <div class="sign-in-htm">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="email" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </form>
                </div>
                <div class="sign-up-htm">
                <form action="{{ url('signup') }}" method="POST">
                @csrf
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="username" class="input" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="confirmed_password" required>
                    </div>
                    <div class="group">
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="text" name="email" class="input" required>
                    </div>
                    <div class="form-inline">

                        <div class="form-check mr-3">
                            <input checked class="radiobutton" type="radio" name="radio5" id="radio3" value="1"><label class="radiobutton-label" for="radio3"><span>Client</span></label>
                        </div>
                        <div class="form-check mr-3">
                            <input class="radiobutton" type="radio" name="radio5" id="radio4" value="2"><label class="radiobutton-label" for="radio4"><span>Coach</span></label>
                        </div>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>