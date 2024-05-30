<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="main">

        <div class="left">
            <div class="leftimg"><img src="{{ asset('assets/images/dis.png') }}" alt="Left Image" /></div>
           
        </div>
        
        <div class="right">

<form action="{{route('signup.submit')}}"method="POST">
    @csrf
    @method('post')
            <div class="loginbox">

                {{-- <img  src="{{ asset('assets/images/msk.png') }}" alt="Logo" class="logoimg" /> --}}
                <div class="logo"></div>
                
                <label htmlFor="email">Email</label>
                <input type="email" name="email" placeholder="Enter email here" class="inp emailinp" required/>

                <label htmlFor="usrname">Username</label>
                <input type="text" name="username" placeholder="Enter username here" class="inp emailinp" required/>

                <label htmlFor="password">Password</label>
                <div class="pas">
                    <input type="password" name="password" placeholder="Enter Password Here" class="inp pasinp" required/>
                    <p class="togglepass" id="toggleBtn" onClick={passwordToggle}>show/hide</p>
                </div>
                
                
                <label htmlFor="password">Confirm Password</label>
                <input type="password" name="confirmpassword" placeholder="Enter password again" class="inp emailinp" required/>
               
                <!-- <p class="forgot" onClick={forgetPasswords}>Forgot Password</p> -->
                
                <div class="btnbox">
                    <button class="btn"><a href="{{ route('login.index') }}">Login</a></button>
                    <input type="submit"  value="Signup" class="btn signup" name="signup" onclick=""/>
                    
                </div>
            </div>

        </form>
        </div>
    </div>
</body>
<script src="{{ asset('assets/javascripts/login.js') }}"></script>
<script src="../assets/javascripts/signup.js"></script>
</html>
