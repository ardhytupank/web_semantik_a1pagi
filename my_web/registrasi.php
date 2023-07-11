<?php require "functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

      <!-- Link Bootstrap 5.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="text-align: center">
        <h1>Halaman Registrasi</h1>
        <form action="" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="" placeholder="Input username" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pw1" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="pw2" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" id="" class="form-control" placeholder="Input nama">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="registrasi">Registrasi</button>
        </div>
        </form>
        <p>Sudah sudah punya akun? login <a href="login.php">disini</a></p>
    </div>

    <?php
    if (isset($_POST["registrasi"])) {
        $username = htmlspecialchars(strtolower($_POST["username"]));
        $pw1 = htmlspecialchars($_POST["pw1"]);
        $pw2 = htmlspecialchars($_POST["pw2"]);
        $nama = htmlspecialchars($_POST["nama"]);

        if ($username == "" || $pw1 == "" || $pw2 == "" || $nama == "") {
            echo "<script>
            alert('Data masih ada yang kosong!');
            </script>";
        }elseif ($pw1 != $pw2) {
            echo "<script>
            alert('Confirm password tidak sesuai!');
            </script>";
        }else {

        }

    }
    $pw_baru = "12345";
    echo base64_decode(base64_encode($pw_baru));
    ?>
</body>
</html>