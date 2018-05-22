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
<h2 style="text-align: center">Master profile</h2>


<div class="myContent">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('masterMenu') }}">Order periodical</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('createPDF') }}">Create PDF</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('createXLS') }}">Create XLS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('createCSV') }}">Create CSV</a>
            </li>
        </ul>
    </nav>
    <div class="myRightColumn" style="width: 100%;">
        <form method="get" action="{{ route('statusChange') }}" style="width: 100%;">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Model type</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Change Status</th>
                </tr>
                </thead>
                <tbody>
                @if($id_device!= null)
                    <tr>
                        <td>{{ $model_type }}</td>
                        <td>{{ $model }}</td>
                        <td>{{ $price }}</td>
                        <td>{{ $status }}</td>
                        <td>

                            <label>Work was done</label>
                            <input type="submit" value="{{ $id_device }}" id="1" name="status"
                                   style="border-radius: 20px; color: white; font-weight: bold; background-color: #007bff;">
                        </td>
                    </tr>
                @endif
                @if($id_device1!= null)
                    <tr>
                        <td>{{ $model_type1 }}</td>
                        <td>{{ $model1 }}</td>
                        <td>{{ $price1 }}</td>
                        <td>{{ $status1 }}</td>
                        <td>
                            <label>Work was done</label>
                            <input type="checkbox" value="{{ $id_device1 }}" id="2" name="status"
                                   style="border-radius: 20px; color: white; font-weight: bold; background-color: #007bff;">
                        </td>
                    </tr>
                @endif
                @if($id_device2!= null)
                    <tr>
                        <td>{{ $model_type2 }}</td>
                        <td>{{ $model2 }}</td>
                        <td>{{ $price2 }}</td>
                        <td>{{ $status2 }}</td>
                        <td>
                            <label>Work was done</label>
                            <input type="checkbox" value="{{ $id_device2 }}" id="3" name="status"
                                   style="border-radius: 20px; color: white; font-weight: bold; background-color: #007bff;">
                        </td>
                    </tr>
                @endif
                @if($id_device3!= null)
                    <tr>
                        <td>{{ $model_type3 }}</td>
                        <td>{{ $model3 }}</td>
                        <td>{{ $price3 }}</td>
                        <td>{{ $status3 }}</td>
                        <td>
                            <label>Work was done</label>
                            <input type="checkbox" value="{{ $id_device3 }}" id="4" name="status"
                                   style="border-radius: 20px; color: white; font-weight: bold; background-color: #007bff;">
                        </td>
                    </tr>
                @endif
                @if($id_device4!= null)
                    <tr>
                        <td>{{ $model_type4 }}</td>
                        <td>{{ $model4 }}</td>
                        <td>{{ $price4 }}</td>
                        <td>{{ $status4 }}</td>
                        <td>
                            <label>Work was done</label>
                            <input type="checkbox" value="{{ $id_device4 }}" id="5" name="status"
                                   style="border-radius: 20px; color: white; font-weight: bold; background-color: #007bff;">
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
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

<script type="text/javascript" src="{{ asset('/js/ajax.js') }}"></script>
</body>
</html>