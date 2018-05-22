<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report for user {{ $name }}</title>
</head>
<body>
<table class="table" style="border: 5px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Order id:</th>
        <th scope="col">Price:</th>
        <th scope="col">Date:</th>
        <th scope="col">Status:</th>
        <th scope="col">Device id:</th>
        <th scope="col">Client id:</th>
        <th scope="col">Master id:</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {{$id_order}}
        </td>
        <td>
            {{$price}}
        </td>
        <td>
            {{$date}}
        </td>
        <td>
            {{$status}}
        </td>
        <td>
            {{$id_device}}
        </td>
        <td>
            {{$id_client}}
        </td>
        <td>
            {{$id_master}}
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>