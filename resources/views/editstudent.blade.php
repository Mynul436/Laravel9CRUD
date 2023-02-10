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
                <h2>Edit Student </h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{ url('updatestudent') }}" method="post">

                    @csrf
                    <input type="hidden" name="id" value="{{$data->StudentId}}">
                    <div class="md-5">
                        <label class="form-label">Name :</label><br>
                        <input value="{{$data->Name}}" type="text"
                         name="name" placeholder="Enter Name" 
                         id="" value={{$data->name}}>@error('name')
<div class="alert alert-danger" role="alert">
    {{$message}}
    </div>
@enderror
                    </div>
                    
                    
                    <div class="md-5">
                        <label class="form-label">Email :</label><br>
                        <input type="email" name="email"
                         placeholder="Enter Email" value={{$data->Email}}>
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="md-5">
                        <label class="form-label">Phone :</label><br>
                        <input type="text" name="phone" placeholder="Enter Phone Number" 
                        value={{$data->Phone}}>
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="md-5">
                        <label class="form-label">Address :</label><br>
                        {{-- <input type="text" name="address" placeholder="Enter Address" 
                        value={{$data->Address}} --}}
                        <input type="text" name="address" placeholder="Enter Address:" 
                        value={{$data->Address}}>
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
