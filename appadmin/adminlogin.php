<!DOCTYPE html>
<?php 
    include_once('../lib/functions.php');
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = strip_tags(trim($_POST['username']));
        $password = strip_tags(trim($_POST['password']));
        if(!empty($username) && !empty($password)){
            $msg = "giriş yapıldı";
            $adminusr = admin_safe($username,$password); 
            if(!empty($adminusr)){
                session_start();
                $_SESSION['adminid'] = $adminusr['id'];
                $_SESSION['loginadmin'] = true;
                header('location:adminapp');
            }else{
                $msg = "böyle bir kullanıcı yok";
            }
        }else{
            $msg = 'Lütfen boş alan bırakmayınız!';
        }
    }
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="vh-100 bg-dark">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="username" class="text-white">Kullanıcı adı</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Kullaınıcı adını gir">
                    </div>
                    <div class="form-group">
                    <label for="password" class="text-white">Şifre</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Şifre gir">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Giriş</button>
                    <?php 
                        if(!empty($msg)){
                            echo '<div class="alert alert-light mt-3 text-center text-uppercase"><h4>'.$msg.'<h4></div>';
                        }
                    ?>
                    
                </form>
            </div>
        </div>
    </div>
    
<script src="./assets/js/app.js"></script>
</body>
</html>