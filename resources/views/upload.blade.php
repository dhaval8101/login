<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{url('/upload')}}" method="POST" enctype="multipart/form-data">
    @include('cdn')
    @csrf
    <div>
        <div class="form-group">

        <label for="">file</label>
        <input type="file" name="image" id="" class="form-control" aria-describedby="helpId">
        </div>
    </div>
<button class="btn btn-primary">Upload</button>
    </form>
</body>
</html>