<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-12">
                <h2>Add Student </h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{ url('savestudent') }}" method="post">

                    @csrf
                    <div class="md-5">
                        <label class="form-label">Name :</label><br>
                        <input value="{{old('name')}}" type="text" name="name" placeholder="Enter Name" id="" value="{{old('name')}}">
@error('name')
<div class="alert alert-danger" role="alert">
    {{$message}}
    </div>
@enderror
                    </div>
                    
                    
                    <div class="md-5">
                        <label class="form-label">Email :</label><br>
                        <input type="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="md-5">
                        <label class="form-label">Phone :</label><br>
                        <input type="text" name="phone" placeholder="Enter Phone Number" value="{{old('phone')}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="md-5">
                        <label class="form-label">Address :</label><br>
                        <input type="text" name="address"
                         placeholder="Enter Address:"
                          value="{{old('address')}}">

                        @error('address')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <br>

                    <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{url('studentlist')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
