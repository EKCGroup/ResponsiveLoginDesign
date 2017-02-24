<!DOCTYPE html>
<html>
    <head>
        <title>Login - Canterbury College</title>
        <link rel="shortcut icon" href="https://cdn.cant-col.ac.uk/canterbury-assets/favicon.ico">
        <link rel="stylesheet" type="text/css" href="minify-style.css" /> <!-- Desktop and Mobile Style (Minus Responsive Footer) -->
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 651px)" href="minify-style-dfooter.css" /> <!-- Desktop Style -->
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 650px)" href="minify-style-mfooter.css" /> <!-- Mobile Style -->
        <meta name="keywords" content="Canterbury, College, Cantebury College, Login, Office 365, VLE, e-Tracker, Learning Curve, Intranet, BKSB">
        <meta name="description" content="Welcome to the Canterbury College Login Page.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Canterbury College">
        <meta name="theme-color" content="#005393">
        <meta name="robots" content="noindex">
        <meta charset="utf-8">
    </head>    
    <body>
        <div class="custom-login-panel">
            <div class="login-panel">
                <header>
                    <a href="https://canterburycollege.ac.uk/">
                        <h1>Canterbury College</h1>
                    </a>
                </header>
                <div class="login-panel-main">
                    <main>
                        <h2>404 | Page not Found.</h2>
                        <p>This page may have been moved or deleted.</p><br>
                        <p onclick="goBack()">Go Back</p>
                        <script>
                            function goBack() { window.history.back(); }
                        </script>
                    </main>
                    <nav>
                        <button class="button-off" id="top-button" onclick="location.href = 'https://vle.cant-col.ac.uk'">VLE Login</button>
                        <button class="button-off" onclick="location.href = 'https://login.microsoftonline.com/'">Office 365</button>
                        <button class="button-off" onclick="location.href = 'https://rems.canterburycollege.ac.uk/portal/html/HOM/portalhome.htm#Home'">REMs</button>
                        <button class="button-off" onclick="location.href = 'https://etracker.cant-col.ac.uk/'">e-Trackr</button>
                        <button class="button-off" onclick="location.href = 'http://intranet.cant-col.ac.uk'">Intranet</button>
                        <button class="button-off" onclick="location.href = 'https://mail.cant-col.ac.uk'">Staff Outlook</button>
                        <button class="button-off" id="bottom-button" onclick="location.href = 'https://www.bksblive.co.uk/bksblive1/CanterburyCollege/default.aspx'">BKSB</button>
                        <a href="https://canterburycollege.ac.uk/"><img src="logo.png" height="30"></a>
                    </nav>
                </div><!--end div class=login-panel-main-->
            </div><!--end div class=login-panel-->
            <footer>
                <p class="copy">© Copyright <?= date("Y") ?> by Canterbury College</p>
            </footer>
        </div><!--end div class=custom-login-panel-->            
    </body>
</html>
