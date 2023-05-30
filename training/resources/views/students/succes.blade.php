<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Success</title>
        <!-------------------------------------------------URL-IMG----------------------------------------------------->
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card" style="width: 24rem;">
                <a class="btn btn-primary" href="/register">Back</a>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
    
  

