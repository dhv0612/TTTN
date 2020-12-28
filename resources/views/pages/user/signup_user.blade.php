<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v2 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/login-signin/sign-in/colorlib-regform-18/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/login-signin/sign-in/colorlib-regform-18/css/style.css') }}">
    <style>
        .inner {
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: center;
        }

        .noti-signup {
            color: red;
            font-size: 15px
        }

    </style>
    <script>
        var checkpassword = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'blue';
                document.getElementById('message').style.fontSize = '18px';
                document.getElementById('message').innerHTML = 'Password matching';

            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').style.fontSize = '18px';
                document.getElementById('message').innerHTML = 'Password not matching';

            }
        }
        var checkform = function() {
            if (!document.getElementById('username').value.trim().length ||
                !document.getElementById('password').value.trim().length ||
                !document.getElementById('confirm_password').value.trim().length ||
                !document.getElementById('fullname').value.trim().length ||
                !document.getElementById('email').value.trim().length) {
                document.getElementById("btn_confirm").disabled = true;
            } else if (document.getElementById('password').value != document.getElementById('confirm_password')
                .value) {
                document.getElementById("btn_confirm").disabled = true;
            } else {
                document.getElementById("btn_confirm").disabled = false;
            }

        }

    </script>
</head>


<body>

    <div class="wrapper"
        style="background-image: url({{ asset('public/frontend/login-signin/sign-in/colorlib-regform-18/images/bg-registration-form-2.jpg') }});">
        <div class="inner">
            <form action="{{ URL::to('save-user') }}" method="POST" onkeyup="checkform()">
                {{ csrf_field() }}
                <h3>Signup Form User</h3>

                <?php
                $noti = Session::get('notification');
                if ($noti) { ?>
                <?php echo '<h5 class="noti-signup">' . $noti . '</h5>'; ?>
                <div class="form-wrapper">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php
                    $user = Session::get('username');
                    echo $user;
                    ?>">
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-wrapper">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                        onkeyup='checkpassword()' />
                    <span id='message'></span>

                </div>
                <div class="form-wrapper">
                    <label for="">Full name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php
                    $fullname = Session::get('fullname');
                    echo $fullname;
                    ?>">
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value=" <?php
                    $email = Session::get('email');
                    echo $email;
                    ?>">
                </div>
                <?php
                Session::put('notification', null);
                Session::put('username', null);
           
                Session::put('fullname', null);
                Session::put('email', null);
                ?>

                <button type="submit" id="btn_confirm" onclick="checkform()">Register Now</button>

                <?php } else { ?>
                <div class="form-wrapper">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="username" id="username" >
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-wrapper">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                        onkeyup='checkpassword()' />
                    <span id='message'></span>
                </div>
                <div class="form-wrapper">
                    <label for="">Full name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname">
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>


                <button type="submit" id="btn_confirm" onclick="checkform()">Register Now</button>
                <?php
                Session::put('notification', null);
                Session::put('username', null);
                Session::put('password', null);
                Session::put('fullname', null);
                Session::put('email', null);
                }
                ?>
            </form>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
