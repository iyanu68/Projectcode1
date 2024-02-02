<?Php
include 'head.php';
?>

    <body style = "background:rgb(252, 251, 251);">

        <label class = "logo" style = "margin-top:5em; margin-left:23em; margin-bottom: 2em; font-family:arial; letter-spacing:1px; font-size:1.4em;">
            <strong>Perfect Panel</strong>
        </label>

        <div class = "container" style ="background:white; margin-left:25em; margin-right:30em; width:32%; padding-left:1.5em; padding-right:1.5em; padding-bottom:2em; border: 1px solid rgb(223, 232, 248);" >

                <p style = "padding-top:1em; font-size:1.7em; font-weight:bold; padding-bottom:-4em;">Sign in</p>

                <form action = "signindb.php" method = "POST">

                    <div class = form-group>

                        <label for = "email"> </label>
                        <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "Email"/>

                        <label for = "password"> </label>
                        <input type = "password" class = "form-control" name = "password" id = "password" placeholder = "Password"/>
                    </div>
                
                
                <button class = "btn btn-primary" onclick = "submit()" style = "padding-left:1em; padding-right:1em; margin-right:9em;">Sign in </button><a href = "#" style = "font-size:1em; ">Forgot password?</a>
            
                </form>
            </div>

        <p style = "margin-left:29em; margin-top:1em; font-size:1em;"> New to Perfect Panel? <a href = "signup.php"> Create an account</a> </p>
        
    </body>
    </html>

