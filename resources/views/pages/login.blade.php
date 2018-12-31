
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    <link rel="icon" href="{{ url('/') }}/assets/images/favicon.ico">
    <title>Neon | Login</title>
    <link rel="stylesheet" href="{{ url('/') }}/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/custom.css" id="style-resource-8">
    <script src="{{ url('/') }}/assets/js/jquery-1.11.3.min.js"></script>
    
</head>

<body class="page-body login-page login-form-fall" data-url="https://demo.neontheme.com">

    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content"> <a href="{{ url('/') }}/dashboard/main/index.html" class="logo"> <img src="{{ url('/') }}/assets/images/logo@2x.png" width="120" alt="" /> </a>
                <p class="description">Dear user, log in to access the admin area!</p> <!-- progress bar indicator -->
                <div class="login-progressbar-indicator"> <h3>43%</h3> <span>logging in...</span> </div>
            </div>
        </div>
        <div class="login-progressbar">
            <div></div>
        </div>
        <div class="login-form">
            <div class="login-content">
                <div class="form-login-error"> <h3>Invalid login</h3>
                    <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
                </div>
                <form method="post" role="form"  action="{{ url('/') }}/login/check">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> <i class="entypo-user"></i> </div> <input type="text" class="form-control" name="name" id="username" placeholder="Username" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> <i class="entypo-key"></i> </div> <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group"> <button type="submit" class="btn btn-primary btn-block btn-login"> <i class="entypo-login"></i>
                            Login In
                        </button> </div>
                   
                </form>
                <div class="login-bottom-links"> <a href="../forgot-password/index.html" class="link">Forgot your password?</a> <br /> </div>
            </div>
        </div>
    </div>
    <script src="{{ url('/') }}/assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
    <script src="{{ url('/') }}/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.js" id="script-resource-3"></script>
    <script src="{{ url('/') }}/assets/js/joinable.js" id="script-resource-4"></script>
    <script src="{{ url('/') }}/assets/js/resizeable.js" id="script-resource-5"></script>
    <script src="{{ url('/') }}/assets/js/neon-api.js" id="script-resource-6"></script>
    <script src="{{ url('/') }}/assets/js/cookies.min.js" id="script-resource-7"></script>
    <script src="{{ url('/') }}/assets/js/jquery.validate.min.js" id="script-resource-8"></script>
    <script src="{{ url('/') }}/assets/js/neon-login.js" id="script-resource-9"></script> 
    <script src="{{ url('/') }}/assets/js/neon-custom.js" id="script-resource-10"></script>
    <script src="{{ url('/') }}/assets/js/neon-demo.js" id="script-resource-11"></script>
    <script src="{{ url('/') }}/assets/js/neon-skins.js" id="script-resource-12"></script>
</body>

</html>
