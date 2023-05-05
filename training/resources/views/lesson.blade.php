<!DOCTYPE html>
<html>
<head>
    <title>Lesson Plan</title>
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
        margin-right: 10px;
        }
        .form-row {
        display: flex;
        flex-wrap: wrap;
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
</head>
<body>

  <h1> Lesson Plan of Trainer<a href="/" class="btn btn-danger" style="float:right; padding-right:20px">BACK</a></h1>
    <form>
        <h2>Lesson Information Details</h2>
        <div class="form-row">
            <div>
                <label for="nam">Trainer Name:</label>
                <input type="text" id="nam" name="nam">
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
            </div>
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label for="grade">Grade:</label>
                <input type="text" id="grade" name="grade">
            </div>
        </div>

        <label for="objective">Objective:</label>
        <textarea id="objective" name="objective"></textarea>

        <label for="materials">Materials:</label>
        <textarea id="materials" name="materials"></textarea>

        <h2 class="my-3">Instructional Activities</h2>
        
        <label for="activity1">Activity 1:</label>
        <textarea id="activity1" name="activity1"></textarea>

        <label for="activity2">Activity 2:</label>
        <textarea id="activity2" name="activity2"></textarea>

        <label for="activity3">Activity 3:</label>
        <textarea id="activity3" name="activity3"></textarea>

        <h2 class="my-3 mb-2">Homework/Extension Activity</h2>

        <label for="homework">Homework/Extension Activity:</label>
        <textarea id="homework" name="homework"></textarea>

        <div class="my-3">
            <input type="submit" value="Submit">
        </div>       
    </form>
</body>
</html>