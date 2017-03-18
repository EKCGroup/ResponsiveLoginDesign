<?php include('/var/www/html/login/layout/header.php'); ?>

    <h2>Please select a service you wish to access.</h2>
    <form method="post" action="" id="login">  
        <p>Staff & Students:</p>
        <input type="text" name="username" id="username" placeholder="Username:" readonly/> <br><br>
        <input type="password" name="password" id="password" placeholder="Password:" readonly/> <br><br>
        <input type="submit" class="icon-submit fa fa-angle-right" id="login" value="Sign In" readonly/>
    </form>

<?php include('/var/www/html/login/layout/footer.php'); ?>