<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="division.css">

    <link rel="stylesheet" href="connnection_tableformate.php">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sub-Division Record Display</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Region</th>
                                <th>Circle</th>
                                <th>Division Name</th>
                                <th>Sub-Division Name</th>
                                <th>Address1</th>
                                <th>Address2</th>
                                <th>Place </th>
                                <th>Email</th>
                                <th>Phone-No</th>
                                <th>Designation</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach  ($users as $user)
                            <tr>
                                <td>{{ $user->	region }}</td>
                                <td>{{ $user->circle }}</td>
                                <td>{{ $user->division_name }}</td>
                                <td>{{ $user->subdivision_name }}</td>
                                <td>{{ $user->address1 }}</td>
                                <td>{{ $user->address2 }}</td>
                                <td>{{ $user->place }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_no }}</td>
                                <td>{{ $user->designation }}</td>


                                <td>
                                    <a href="" class="btn btn-primary btn-sm">View</a>
                                </td>

                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                    <div class="  text-right">
    <small>&copy;sis infotech sangli</small>
</div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>