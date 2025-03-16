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
                <a href="{{ route('employees.index')}}" class="btn btn-primary">Back</a>
            </div>
                </div>

            </div>
      

    </div>
    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <form action="" >
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter Name here">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Enter Name here">
            </div>
            <div class="mb-3">
                <label for="">Address</label>
                <textarea name="" class="form-control" id=""></textarea>
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="Enter Name here">
            </div>
            <button class="btn btn-primary mt-3">Save</button>
            </form>
        </div>

    </div>
</body>
</html>