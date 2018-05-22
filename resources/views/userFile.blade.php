<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/userStyle.css') }}">
</head>
<body>

<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white">Repairing of devices</h4>
            <a href="{{ route('main') }}" class="text-muted" style="margin-right: 4%;">Home</a>
            <a href="{{ route('profile') }}" class="text-muted">Profile</a>
            <form class="form-inline mt-2 mt-md-0" method="get" style="margin-left: 7%; display: inline-block"
                  action="{{ route('logout') }}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogOut</button>
            </form>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<h2 style="text-align: center">Client profile</h2>

<div class="myContent">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('clientOrder') }}">Order periodical</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('showOrder') }}">Show the orders</a>
            </li>
        </ul>
    </nav>
    <div class="myRightColumn">

        <form method="get" action="{{ route('addOrder') }}" style="width: 70%;margin-left:50%;">
            <div class="form-group">
                <label for="exampleInputMobile">Model type:</label>
                <select id="exampleInputMobile" class="custom-select custom-select-lg mb-3" name="exampleInputMobile"
                        required>
                    <option value="1" selected>Mobile</option>
                    <option value="2">Tablet</option>
                    <option value="3">Computer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputModel">Model:</label>
                <input type="text" class="form-control" id="exampleInputModel" name="exampleInputModel"
                       placeholder="Enter your model" required>
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Date of order:</label>
                <input type="date" class="form-control" id="exampleInputDate" name="exampleInputDate" required>
            </div>
            <div class="form-group">
                <label for="exampleInputBreakage">Type of breakage:</label>
                <select id="exampleInputBreakage" name="exampleInputBreakage"
                        class="custom-select custom-select-lg mb-3" required>
                    <option value="1" selected>Break the top glass</option>
                    <option value="2">The sensor does not work</option>
                    <option value="3">Breakage of the load speaker</option>
                    <option value="4">Problem with charging</option>
                    <option value="5">Some or all of buttons does not work</option>
                </select>
            </div>
            <div class="form-group" style="width: max-content">
                <label for="exampleInputModel">Result price:</label>
                <input type="text" class="form-control" id="price" name="price" required disabled
                       style="width: max-content; display: inline-block" value=""> <span style="display: inline-block">p</span>
            </div>
            <button type="submit" class="btn btn-primary" name="userFileSubmit" id="userFileSubmit">Submit</button>
        </form>
    </div>
</div>


<div class="footer" style="display: flex; color: black; font-size: 14px; justify-content: center;">2018 by Korzh</div>

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
<script type="text/javascript" src="{{ asset('/js/calculatePrice.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/checkFileSubmit.js') }}"></script>
</body>
</html>