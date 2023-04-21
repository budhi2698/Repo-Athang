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
    <header>
        <nav><!--nav start-->
            <img src="/public/images/image.png" alt="Logo">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="announce">Announcement</a></li>
                <li>
                    <a href="#">Courses</a>
                    <ul class="dropdown">
                    <li><a href="register">Registration</a></li>
                    </ul>
                </li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
            <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </nav><!--nav end-->
    </header>
    
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

    <footer><!--footer start-->
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo, sapien non semper facilisis, leo arcu aliquam velit, a vestibulum magna tellus in justo. </p>
            </div>
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <ul>
                <li><i class="fa fa-map-marker"></i> Bhutan,Thimphu,Babena</li>
                <li><i class="fa fa-phone"></i> (123) 456-7890</li>
                <li><i class="fa fa-envelope"></i> athang@gmail.com</li>
                </ul>
            </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                     <p>
                        <hr>
                        &copy; 2023 Athang Training Academy. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--footer end-->
</body>
</html>