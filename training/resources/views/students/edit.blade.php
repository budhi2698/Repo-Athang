<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit</title>
       <!-------------------------------------------------URL-IMG----------------------------------------------------->
       <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit student</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('students.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('students.update',$Student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Student Name</strong>
                        <input type="text" name="name" value="{{ $Student->name }}" class="form-control"
                            placeholder="student name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>DoB</strong>
                        <input type="date" name="dob" class="form-control" placeholder="student DoB"
                            value="{{ $Student->dob }}">
                        @error('dob')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
              
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender</strong>
                        <input type="gender" name="gender" class="form-control" placeholder="gender"
                            value="{{ $Student->gender }}">
                        @error('gender')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Present Address</strong>
                        <input type="text" name="address" class="form-control" placeholder="address"
                            value="{{ $Student->address }}">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact</strong>
                        <input type="number" name="contact" class="form-control" placeholder="student contact"
                            value="{{ $Student->contact }}">
                        @error('contact')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email Address</strong>
                        <input type="email" name="email" class="form-control" placeholder="student Email"
                            value="{{ $Student->email }}">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Qualification</strong>
                        <input type="text" name="qualification" value="{{ $Student->qualification }}" class="form-control"
                            placeholder="qualification">
                        @error('qualification')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>course</strong>
                        <input type="text" name="course" value="{{ $Student->course }}" class="form-control"
                            placeholder="course">
                        @error('course')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Why you choose these course?</strong>
                        <input type="text" name="reason" value="{{ $Student->reason }}" class="form-control"
                            placeholder="reason">
                        @error('reason')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
               
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>