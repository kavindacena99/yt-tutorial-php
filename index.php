<?php
    require_once 'connection.php';
?>

<?php
    if(isset($_POST['login'])){
        $mail = mysqli_real_escape_string($connection,$_POST['mail']);
        $pswd = mysqli_real_escape_string($connection,$_POST['pswd']);

        $sql2 = "SELECT * FROM users WHERE mail='{$mail}' AND pswd='{$pswd}'";

        $result2 = mysqli_query($connection,$sql2);

        if(mysqli_num_rows($result2) == 1){
            header("Location: view.php");
        }else{
            echo "You are not registered";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form method="post" action="index.php" class="col-md-5" style="margin-top: 150px;margin-left:100px">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </form>

    <h5 style="margin-left: 100px;">Did you not registered? <a style="text-decoration: none;" href="signup.php">Create an account</a></h4>
    </div>
</body>
</html>