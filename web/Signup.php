<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex</title>
    <link rel="stylesheet" href="DocST.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="signup">
        <img src="image/White logo.png" height="120px" width="270px" /> 
        <div class="form1">
            <form action="Signup.php" method="post">
                <h1>Sign-up</h1>
                <label for="username"> Username : </label>&nbsp;<input id="user" name="user" type="text" required>
                <br><label for="pass"> Password : </label>&nbsp;<input id="pass" name="pass" type="password" required>
                <br><label for="gend" style="display: inline-flex;"> Gender : </label>&nbsp;<input id="gend" name="gend" value="Male" type="radio" required><option>Male</option>
                    &nbsp;<input id="gend" name="gend" value="Female" type="radio" required><option>Female</option>
                    &nbsp;<input id="gend" name="gend" value="Others" type="radio" required><option>Others</option>
                <br><label for="mail"> E-Mail : </label>&nbsp;<input id="mail" name="mail" type="email" required>
                <br><label for="numb"> Phone no : </label>&nbsp;<input id="numb" name="numb" size="10" type="number" required>
                <button id="bon" name="submit" type="submit" class="clic">Submit</button>
            </form>
            <?php 
            
            if(isset($_POST["submit"])) {
                $u = $_POST["user"];
                $p = $_POST["pass"];
                $g = $_POST["gend"];
                $m = $_POST["mail"];
                $n = $_POST["numb"];
                
                if($u!="" && $p!="" && $g!="" && $m!="" && $n!="") {
                    $sql="INSERT INTO users(user, pass, gend, mail, numb) VALUES('$u','$p','$g','$m','$n')";
                    if($conn->query($sql)){
                        header("location:Entry.php");
                    }
                    else{
                        echo "Data not stored";
                    }
                }
            }

            ?>
        </div>
    </div>
</body>
</html>