<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white">Repairing of devices</h4>
            <a href="{{ route('main') }}" class="text-muted" style="margin-right: 4%;">Home</a>
            <a href="{{ route('profile') }}" class="text-muted">Profile</a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<br>
<div class="container" style="margin-top: 5%; width: max-content;">
    <h2 class="form-signin-heading" style="margin-left: 20%">Please sign in</h2>
    <form class="form-signin" method="get" action="{{ route('profile') }}">
        <div class="form-group">
            <label class="control-label col-xs-3">Email address:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" placeholder="Enter email" title="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Pasword:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" name="password" placeholder="Enter password"
                       title="password" required>
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="signInButton" name="signInButton">Sign in
        </button>
        <p class="font-italic" style="margin-top: 3%">If you have never visited our page, please
            <a href='{{ route('register') }}'>sign up</a></p>
    </form>
</div>
<br><br>

<div class="footer" style="display: flex; color: black; font-size: 14px; justify-content: center; margin-top: 12%;">2018
    by Korzh
</div>

<!--<script type="text/javascript" src="js/check.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</body>
</html>