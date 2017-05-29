<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My business card site!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #00FFFF;
                 color: #800000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <a href="<?php echo e(url('/login')); ?>">Login</a>
                    <a href="<?php echo e(url('/register')); ?>">Register</a>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Waseem Roman's business card site.
                </div>

                <div class="links">
                    <a href="http://minilaravel.loc/contacts">Contacts</a>
                    <a href="http://www.bbc.com/russian/news" target="_blank">News</a>
                    <a href="http://minilaravel.loc/social">Social networks</a>
                    <a href="https://github.com/Roman964" target="_blank">My GitHub</a>
                    <a href="https://bsuir.by" target="_blank">Our University</a>
                </div>
            </div>
        </div>
    </body>
</html>
