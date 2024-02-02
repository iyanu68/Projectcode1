<?php
include 'head.php';
?>

<body style="background:rgb(252, 251, 251);">

    <label class="logo" style="margin-top:5em; margin-left:22em; margin-bottom: 2em; font-family:arial; letter-spacing:1px; font-size:1.4em;">
        <strong>Perfect Panel</strong>
    </label>

    <a href="logout.php" style="font-size:1em; margin-left:1em; margin-left:25em;">Logout</a>

    <h3 style = "margin-left:5em;"><strong>Welcome!</strong></h3>
        
        <p style="margin-left:5em; font-size:1.5em; color:rgb(200, 201, 203); margin-bottom:2em;"><strong>This is your dashboard.</strong></p>
        
        <p style = "font-size:1.5em; margin-left:5em;"> <strong>You can request for your panel here: </strong></p>
        
       
        <form action="process_request.php" method="post">

            <div class="form-group">
              <textarea id="description" class="form-control" name="panel_request" style = "width:70%; padding-bottom:5em; margin-left:7em;"></textarea>
            </div>

           
            <button type="submit" class="btn btn-primary" style = "margin-left:7em;">Submit Request</button>
        </form>

        
    
</body>

</html>