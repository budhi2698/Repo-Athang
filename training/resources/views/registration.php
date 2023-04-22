<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>
<body>
        <?php 
            include('nav.php') 
        ?>
    <form>
        <h2>Student Registration Form</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="dob">DoB</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="">--Select Gender--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
        </select>

        <label for="name">CID</label>
        <input type="text" id="cid" name="cid" required>

        <label for="name">Contact</label>
        <input type="text" id="con" name="con" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>


        <label for="course">Course</label>
        <select id="course" name="course" required>
            <option value="">--Select Course--</option>
            <option value="math">Dilopma in ICT</option>
            <option value="science">ECCD</option>
        </select>

        <div class="checkbox-container">
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree" class="checkbox-label">All above information is valid</label>
        </div>

        <input type="submit" value="Register">
    </form>

    <?php 
            include('footer.php')    
    ?>
</body>
</html>