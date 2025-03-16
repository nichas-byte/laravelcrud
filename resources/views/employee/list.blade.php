<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Laravel Crud</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="bg-dark">
        <div class="container">
            <div class="h5 text-white">Employee Crud</div>
          

        </div>

    </div>
    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4"> Employee
</div>
                <div>
                <a href="" class="btn btn-primary">Create</a>
            </div>
                </div>

            </div>
      

    </div>
    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>

                </tr>
                <tr>
                    <td>ID</td>
                    <td>ID</td>
                    <td>ID</td>
                    <td>ID</td>
                    <td><a href="" class="btn btn-primary btn-sm">Edit</a></td>
                    <td><a href="" class="btn btn-danger btn-sm">delete</a></td>

                </tr>

            </table>

        </div>

    </div>
</body>
</html>