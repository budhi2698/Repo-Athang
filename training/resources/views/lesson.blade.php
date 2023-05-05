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
        h1, h2 {
            margin: 0;
            padding: 20px;
            background-color: #005D6E;
            color: #FFFFFF;
            text-align: center;
        }
        h2 {
            font-size: 24px;
            background-color: #009BA8;
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
            width: 98%;
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
    </style>
</head>
<body>
    <h1>Lesson Plan </h1>
    <form>
        <h2>Lesson Information</h2>
        <label for="nam">Trainer Name:</label>
        <input type="text" id="nam" name="nam">

        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title">

        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade">

        <label for="objective">Objective:</label>
        <textarea id="objective" name="objective"></textarea>

        <label for="materials">Materials:</label>
        <textarea id="materials" name="materials"></textarea>

        <h2>Instructional Activities</h2>
        <label for="activity1">Activity 1:</label>
        <textarea id="activity1" name="activity1"></textarea>

        <label for="activity2">Activity 2:</label>
        <textarea id="activity2" name="activity2"></textarea>

        <label for="activity3">Activity 3:</label>
        <textarea id="activity3" name="activity3"></textarea>

       
        <h2>Homework/Extension Activity</h2>
        <label for="homework">Homework/Extension Activity:</label>
        <textarea id="homework" name="homework"></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>