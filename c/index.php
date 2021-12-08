<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>


    <div class="form-bg n">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-container">
           
                    <h3 class="title">Login</h3>
                    <form class="form-horizontal" method="post">
                    <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input class="form-control" name="email" type="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input class="form-control" name="pass" type="password" placeholder="Password" required>
                        </div>
                   <input type="submit" name="btn" value="LOGIN"  class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
<?php


if (isset($_POST['btn'])) {

    $con = mysqli_connect("localhost","root","","nn") or die("Died");

$name = $_POST['name'];

$email = $_POST['email'];
$pass = $_POST['pass'];

$qu = mysqli_query($con,"insert into dat values('','$name','$email','$pass', current_timestamp())");

if ($qu) {echo "<script>alert('Data Inserted')</script>";

}

else{echo "<script>alert('Data not Inserted')</script>";}
}

?>


</body>
</html>