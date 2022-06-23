<!DOCTYPE html>
<html>
<head>
    <title>Import Export</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Import Export
        </div>
        <div class="card-body">
            <form action="{{url($link)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data</button>
                {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export Bulk Data</a> --}}
            </form>
        </div>
    </div>
</div>
</body>
</html>