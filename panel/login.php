<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
  
  *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
    background:#f3f2f2;
    height: 100%;
}
.b-height{
    position: relative;
    padding:35px 0px 0px;
}
.b-wrapper{
    display:flex;
    align-items:center;
    min-height: 650px;
    background-color: #fff;
    box-shadow: 0px 3px 10px rgba(0,0,0,.2);
} 
.b-min-height{
    height: 650px;
    background: #00bdaa;    
}
.b-logo{
    width:100px;
}
.b-title{
    padding:100px 0px 0px;
}
.b-title h1{
    color:#fff;
    font-weight:600;
}
.b-title p{
    color: #e7e7e7;
    margin:30px 0px 40px;
}
.b-title button{
    letter-spacing: 0.4px;
    padding: 15px 85px;
    border-radius: 36px;
    border: 1.5px solid #fff;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
}
.b-title button:focus{
    outline:none;
}
.b-form{
    width:60%;
    margin:auto;
}
.b-form-title h1{
    color: #00bdaa;
    font-size: 34px;
    font-weight: 900;
}
.b-form-title i{
    width: 50px;
    height: 50px;
    border: 1px solid #ddd;
    border-radius: 36px;
    line-height: 46px;
    font-size: 20px;
    margin: 13px 5px;
    color:#333;
    cursor:pointer;
}
.b-subtext{
    color: #b4b2b2;
    font-size: 14px;
}
.b-form .form-control{
    font-size:14px;
    height: 50px;
    padding-left: 45px;
    background: #edf9fe;
    border-color: #edf9fe;
    color: #333;
}
.b-form .form-control:focus{
    outline:none;
    box-shadow:none;
} 
.form-group{
    position: relative;
}
.b-font{
    position: absolute;
    top: 18px;
    left: 18px;
    z-index: 10;
    color: #6b6b6b;
    font-size:13px;
}    
.b-form button{
    letter-spacing: 0.4px;
    padding: 15px 85px;
    border-radius: 36px;
    border: 1.5px solid #fff;
    background: #00bdaa;
    color: #fff;
    text-transform: uppercase;
    margin-top:25px;
}
.b-form button:focus{
    outline:none;
}
.b-form .b-forgot{
    border-bottom: 1px solid #e8e4e4;
    padding-bottom: 10px;
    color: #7e7e7e;
    font-size: 14px;
    font-weight: 600;
    cursor:pointer;
    display:none;
}
.swift_right{
    display:none;
}
.swift_element{
    display:flex;
    align-items:unset;
    flex-direction: row-reverse;
    transition:0.3s ease-in-out;
    -webkit-transition:0.3s ease-in-out;
    -moz-transition:0.3s ease-in-out;
    -ms-transition:0.3s ease-in-out;
    -o-transition:0.3s ease-in-out;
}


.swift:hover{
background-color:#fff;
color:black;
}
.sign_up:hover{
background-color:#48e8d8;
color:black;
}

  
</style>

<body>


  
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
            <div class="row b-wrapper"> 
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">
                    <div class="b-logo swift_left">
                        <!-- <a href = "https://www.youtube.com/channel/UCg-bMxpjvoQVxVs69iyqGuQ" target = "_blank"><img decoding="async" src="images/Logo.png" alt="Programming Guide Logo" title="Programming Guide Logo" class="img-fluid"></a> -->
                    </div>
                    <div class="b-title text-center">
                        <h1 class="user_title">Welcome Friend</h1>
                        <p class="user_subTitle">To keep Connected with us please </br> login with your personal info.</p>
                        <button type="button" class="swift sign_in">Sign In</button>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <div class="b-logo swift_right">
                        <a href = "https://www.youtube.com/channel/UCg-bMxpjvoQVxVs69iyqGuQ" target = "_blank"><img decoding="async" src="images/Logo.png" alt="Programming Guide Logo" title="Programming Guide Logo" class="img-fluid"></a>
                    </div>
                    <div class="b-form text-center">
                        <div class="b-form-title">
                            <h1 class="form_title">Create Account</h1>
                            <p>
                                <span><a href="https://www.facebook.com/help.programmingguide" target = "_blank"><i class="fab fa-facebook-f"></i></a></span>
                                <span><a href="https://twitter.com/HelpProgrammin0" target = "_blank"><i class="fab fa-twitter"></i></a></span>
                                <span><a href="https://www.instagram.com/help.programmingguide" target = "_blank"><i class="fab fa-instagram"></i></a></span>
                            </p>
                            <p class="b-subtext" style="color:#00bdaa">or use your email for registration</p>
                        </div>
                        <form method="post" action="">
                            <div class="form-group username">
                                <input class="form-control" type="text" name="" placeholder="Name">
                                <i class="fas fa-user b-font"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="" placeholder="Email">
                                <i class="fas fa-envelope b-font"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="" placeholder="Password">
                                <i class="fas fa-unlock-alt b-font"></i>
                            </div>
                            <div class="form-group">
                                <a href=""><span class="b-"style="" >Forgot your password?</span></a>
                            </div>
                            <button type="button" class="sign_up">Sign Up</button>
                        </form>
                    </div>
                </div> 

            </div>
        </div>
    </div>
</div>

 <script>
    $(document).ready(function(){
    $('.swift').click(function(){
        var signButton = $(this).html();
        console.log(signButton);
        debugger;
        if(signButton == 'Sign In'){
            $('.sign_up').html('Sign In'); // sign up button text change
            $('.sign_in').html('Sign Up'); // sign in button text change
            $('.swift_right').show(); // second logo show
            $('.b-forgot').show(); // forgot option show
            $('.form_title').html('Sign in to Guide'); // form title text change
            $('.b-subtext').html('or use your email account'); // form sub title text change
            $('.user_title').html('Hello, Friend'); // user title text change
            $('.user_subTitle').html('Enter your personal details </br> and start journey with us.'); // user sub title text change
            $('.b-title').css('margin-top','100px'); // user section add margin top in css
            $('.swift_left').hide(); // default logo hide
            $('.username').hide(); // form user field hide
            $('.b-wrapper').addClass('swift_element'); // add reverse
        }else{
            $('.sign_up').html('Sign Up'); // sign up button text change
            $('.sign_in').html('Sign In'); // sign in button text change
            $('.swift_right').hide(); // second logo hide
            $('.b-forgot').hide(); // forgot option hide    
            $('.form_title').html('Create Account');
            $('.b-subtext').html('or use your email for registration');
            $('.user_title').html('Welcome Friend');
            $('.user_subTitle').html('To keep Connected with us please </br> login with your personal info.');
            $('.b-title').css('margin-top','0px');
            $('.swift_left').show();
            $('.username').show();
            $('.b-wrapper').removeClass('swift_element');
        }

    })
})


 </script>
</body>
    
<?php include 'includes/footer.php'; ?>
   