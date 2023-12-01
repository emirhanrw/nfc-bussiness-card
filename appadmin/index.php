<?php 
    include_once('../lib/functions.php');
    session_start();
    if(isset($_SESSION['loginadmin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı ekle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="vh-100 bg-dark">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">
                <form method="POST" id="user_add_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name_surname" class="text-white">Ad Soyad</label>
                        <input type="text" class="form-control" id="name_surname" name="name_surname" placeholder="Ad / Soyad">
                    </div>
                    <div class="form-group">
                        <label for="company" class="text-white">Şirket</label>
                        <input type="text" class="form-control" id="company" name="company" placeholder="Şirket">
                    </div>
                    <div class="form-group">
                        <label for="seniority" class="text-white">Kıdem</label>
                        <input type="text" class="form-control" id="seniority" name="seniority" placeholder="Kıdem">
                    </div>
                    <div class="form-group">
                        <label for="picture" class="text-white">Fotoğraf</label>
                        <input type="file" class="form-control" id="picture" name="picture" placeholder="Fotoğraf">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-white">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-white">Telefon</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon">
                    </div>
                    <div class="form-group">
                        <label for="address" class="text-white">Adres</label>
                        <input type="phone" class="form-control" id="address" name="address" placeholder="Adres">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Kayıt</button>
                    <div id="message_form"></div>
                    <div id="link"></div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="./assets/js/app.js"></script>
</html>
<?php 
    }else{
        header('location:adminlogin');
    }
?>