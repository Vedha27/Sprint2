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
    <section id="Loginp">
        <div class="ent1">
            <img src="image/1723956093125.png" height="190px" width="340px" style=" background: none;"/>
            <div class="typein">
                <p>Log-in</p>
                <form action="Loginp.php" method="post">
                    <label for="username" style="font-size: 22px;">Username : </label><input name="username" type="text" placeholder="username" style="margin-top: 0px;" required>
                    <label for="password" style="font-size: 22px;">Password : </label><input name="password" type="password" placeholder="password" style="margin-top: 20px;" required>
                    <button type="submit" name="submit" class="clic">Submit</button>
                </form>

                <?php 
                
                if(isset($_POST["submit"])){
                    $use = $_POST["username"];
                    $pas = $_POST["password"];
                    if($use!="" && $pas!=""){
                        $sql = "SELECT id, user, pass FROM users WHERE user='$use' AND pass='$pas'";
                        $result = $conn->query($sql);
                        if($result->num_rows==1){
                            header("location:Join.php?mes=$user");
                        }
                        else{
                            echo "Invalid User";
                        }
                    }
                }
                
                ?>
            </div>
            <div class="foot11">
                <h2>Contact us on</h2>
                <h3 class="ico11">
                    <button class="bton111"><a href="https://www.facebook.com/" style="color: darkred;background: none;"><i class="fa fa-facebook-square" style="font-size: 38px;background: none;"></i></a></button>
                    <button class="bton222"><a href="https://www.instagram.com/" style="color: darkred;background: none;"><i class="fa fa-instagram" style="font-size: 38px;background: none;"></i></a></button>
                    <button class="bton333"><a href="https://github.com/" style="color: darkred;background: none;"><i class="fa fa-github" style="font-size: 38px;background: none;"></i></a></button>
                    <button class="bton444"><a href="https://web.telegram.org/" style="color: darkred;background: none;"><i class="fa fa-telegram" style="font-size: 38px;background: none;"></i></a></button>
                </h3>
                <h3 class="c11">Copyrights &copy; Reserved 2024</h3>
            </div>
        </div>
    </section>
</body>
</html>