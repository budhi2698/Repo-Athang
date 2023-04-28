<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Registration Form<a href="/" class="btn btn-danger float-end">BACK</a></h4>
                </div>
                <div class="card-body">
                    <form  method="POST">
                        <div class="mb-3 md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3 md-6">
                            <label>DoB</label>
                            <input type="number" name="bob" class="form-control">
                        </div>
                        <div class="row">
                        <!-- <div class="col">
                            <input type="text" class="form-control" placeholder="male" aria-label="male">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="female" aria-label="female">
                        </div> -->
                        </div>
                        <div class="mb-3">
                            <label>CID</label>
                            <input type="number" name="cid" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Contact</label>
                            <input type="number" name="contact" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Choose Course</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Choose your course">
                            <datalist id="datalistOptions">
                                <option value="Dilopma in ICT">
                                <option value="ECCD">
                            </datalist> 
                        </div>
                        <div class="mb-3">
                            <label for="chooseCourse" class="form-label">Course Duration</label>
                            <input class="form-control" list="datalistOptions" id="chooseCourse" placeholder="Course duration">
                            <datalist id="datalistOptions">
                                <option value="Two years for Dilopma">
                                <option value="Six month for ECCD">
                            </datalist> 
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                              All above information are mandatory.
                            </label>
                            </div>
                          <div class="mb-3 py-3">
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>












<!-- 
</html><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Registration</title>
<link rel="stylesheet" href="style.css">

 FontsAwosome link 
<link rel="stylesheet" href="font-awesome/font-awesome.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background-color:grey">
<a href="/services"><button class="btn">Back</button></a>
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
        <option value="ict">Dilopma in ICT</option>
        <option value="eccd">ECCD</option>
        </select>

        <label for="duration">Course duration</label>
        <select id="duration" name="duration" required>
        <option value="">--Select Course duration--</option>
        <option value="two">Two years</option>
        <option value="month">Six month</option>
        </select>

        <div class="checkbox-container">
        <input type="checkbox" id="agree" name="agree" required>
        <label for="agree" class="checkbox-label">All above information is valid.</label>
        </div>

        <input type="submit" value="Register">
    </form>


</body>
</html> -->










