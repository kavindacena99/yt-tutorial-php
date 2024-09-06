<?php
    require_once 'connection.php';
?>

<?php
    if(isset($_POST['sign'])){
        $mail = $_POST['mail'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pswd = $_POST['pswd'];
        $cpswd = $_POST['cpswd'];

        if($mail != "" && $fname != "" && $lname != "" && $pswd != "" && $cpswd != ""){
            if($pswd == $cpswd){
                $sql1 = "INSERT INTO users (mail,fname,lname,pswd) VALUES('{$mail}','{$fname}','{$lname}','{$pswd}') LIMIT 1";
                $result1 = mysqli_query($connection,$sql1);
            }else{
                echo "Enter passwords again";
            }
        }else{
            echo "Fields cannot be null";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="signup.php" class="col-md-5" style="margin-top: 130px;margin-left:100px">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="cpswd" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="sign" class="btn btn-primary">Sign Up</button>
        </form>

        <h5 style="margin-left: 100px;">Already Registered? <a style="text-decoration: none;" href="index.php">Log Now</a></h4>
    </div>
</body>
</html>