<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
</body>


<?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo " user name dan password salah";
            }
        }


    ?>

    <section>
        <div class="login">
            <h2>Login</h2>

    <form method="POST" action="simpan.php">
    <input type="text" name="user" placeholder="User" ><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" class="submit" value="Submit" >
    </form>
    </div>
    </section>

</body>
</html>