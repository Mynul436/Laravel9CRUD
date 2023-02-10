<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        
        <div class="row">
            <div class="col-md-12">
                <h2>Student List</h2>
                <div style="margin-left: 10px ;float: right;">
                    
                    
                    <a href="{{url('addstudent')}}" 
                    class="btn btn-primary"> Add Student</a></div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                <th>Address</th>
                <th>Action</th>

                    </tr>

                </thead>
                <tbody>
                     @php
                        $i=1;
                    @endphp
                    @foreach($data as $key)
                   
                        <tr>
                            <td>{{$i++}}</td>

                            <td>{{$key->Name}}</td>
                            <td>{{$key->Email}}</td>
                            <td>{{$key->Phone}}</td>
                            <td>{{$key->Address}}</td>
<td>                    <a href="{{url('editstudent/'.$key->StudentId)}}"
     class="btn btn-primary">Edit</a></div>
     <a href="{{url('deletestudent/'.$key->StudentId)}}"
        class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                
            </div>
        </div>
    </div>
</body>
</html>