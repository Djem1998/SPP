<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/modalWindow.css') }}">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<br>

<div class="container" style="margin-top:5%">
    <h2 class="form-signin-heading" style="margin-left: 40%">Please sign up</h2>
    <form class="form-horizontal" method="get" action="{{ route('userRegister') }}">
        <div class="form-group">
            <label class="control-label col-xs-3">Last name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="lastName" placeholder="Enter last name" title="last name"
                       required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">First Name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="name" placeholder="Enter name" title="name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Login:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="login" placeholder="Enter login" title="login" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" placeholder="Email" title="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Password:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" name="Password" placeholder="Enter password"
                       title="password" required>
            </div>
        </div>
        <div class="form-group" style="width: max-content;">
            <label class="control-label col-xs-3"> User type:</label>
            <select class="form-control" title="usertype" required id="userType" name="usertype">
                <option>Master</option>
                <option>Client</option>
            </select>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree" title="agree" required name="agree"> I agree with <a
                        href="#dialog" name="modal" id="modal">conditions</a>.
                </label>
            </div>
        </div>
        <!-- Модальное окно -->
        <div id="boxes" class="form-horizontal">
            <div id="dialog" class="window" style="height: max-content;">
                <div class="top"><span id="modalName">Conditions</span>
                    <!--<a href="#" class="link close">Close</a>-->
                </div>
                <div class="content">By accepting this agreement, you confirm that your personal data will be stored and
                    used on this site. You have no claims to the developers and owners of the site in the event of loss
                    or loss of your personal data. Attempts have been made to preserve the data. If you agree with these conditions, tick the appropriate box and continue the registration.
                </div>
            </div>
        </div>
        <!-- Маска, затемняющая фон -->
        <div id="mask"></div>

        <br/>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="signUpButton" name="signUpButton">Sign up</button>
            </div>
        </div>
    </form>
</div>
<br><br>

<div class = "footer" style = "display: flex; color: black; font-size: 14px; justify-content: center;">2018 by Korzh</div>

<!--<script type="text/javascript" src="js/check.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('/js/modalWindow.js') }}"></script>

</body>
</html>