
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>@include('cdn')

<div class="alert alert-success" align="center" >



@if(session()->has('message'))

<button type="button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}

    @endif
</div>

<table border="2" class="table table-bordered table-striped font-italic">
    <tr><th>id</th>
        <th>Name</th>
        <th>lname</th>
        <th>email</th>
        <th>password</th>
        <th>city</th>
        <th>pincode</th>
        <th>Button</th>
    </tr>
    <tr>

    @foreach($forms as $for)
    <td>
    {{$for['id']}} 
    </td>
    <td>{{$for['name']}}</td>
    <td>
        {{$for['lname']}}
    </td>
    <td>
        {{$for['email']}}
    </td>
    <td>{{$for['password']}}</td>
    <td>
        {{$for['city']}}
    </td>
    <td>{{$for['pincode']}}</td>
    <td>
    <button class="btn btn-danger"><a class="text-white" type="button" href={{'delete/'.$for['id']}}>Delete</a>

    </button>
    <button class="btn btn-primary"><a class="text-white" type="button" href={{'update/'.$for['id']}}>Update</a>
    
    </button>
    </td>
    </tr>
    

@endforeach
</table>

