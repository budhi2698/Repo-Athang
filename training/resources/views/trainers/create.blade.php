<!DOCTYPE html>
<html>
<head>
    <title>Athang Learning Institute</title>
       <!-------------------------------------------------URL-IMG----------------------------------------------------->
       <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1{
            padding: 15px!important;
            font-size:32px!important;
        }
        h1, h2 {
            margin: 0;
            padding: 10px;
            background-color: #005D6E;
            color: #FFFFFF;
            text-align: center;
            font-family: cambay;
        }
        h2 {
            font-size: 24px!important;
            background-color: #009BA8;
            margin-bottom: 10px
        }
        form {
            margin: 20px;
            padding: 20px;
            border: 2px solid #005D6E;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"], [type="date"],textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #005D6E;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        label, input {
        display: inline-block;
        margin-right: 5px;
        }
        .form-row {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        }
        
        .form-row label, .form-row input {
            flex-basis: 23%;
        }
        
        .form-row label {
            text-align: right;
            margin-right: 10px;
        }
    </style>
     <!-----------------------------------------------BROOTRAPS-LINK------------------------------------------------->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="row">

    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('trainers.index') }}"> Back</a>
   
    <h1> Lesson Plan of Trainer</h1>
    <form action="{{ route('trainers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h2>Lesson Information Details</h2>

        <div class="form-row">
            <div>
                <label for="name">Trainer Name:</label>
                <input type="text" id="name" name="name">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
                @error('date')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
                @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="grade">Batch:</label>
                <input type="text" id="grade" name="grade">
                @error('grade')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <label for="objective">Objective:</label>
        <textarea id="objective" name="objective"></textarea>
        @error('objective')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

        <label for="materials">Materials:</label>
        <textarea id="materials" name="materials"></textarea>
        @error('materials')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

        <h2 class="my-3">Training Hours</h2>
        <label for="theory">Theory:</label>
        <textarea id="theory" name="theory"></textarea>
        @error('theory')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

        <label for="practical">Practical:</label>
        <textarea id="practical" name="practical"></textarea>
        @error('practical')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

        
        <h2 class="my-3 mb-2">Extension Activity</h2>
        <label for="homework">Extension Activity:</label>
        <textarea id="homework" name="homework"></textarea>
        @error('homework')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

        <div class="my-3">
            <input type="submit" value="Submit">
        </div>       
    </form>
</body>
</html>

          
            
          