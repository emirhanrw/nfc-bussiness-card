<?php
    include_once('./lib/functions.php');
    session_start();
    $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parsed_url = parse_url($current_url);
    $query = $parsed_url['query'];
    parse_str($query, $query_params);
    $idkey = $query_params['idkey'];
    if($idkey){
        $user = query_item('users',$idkey);
        if($idkey == $user['idkey']){
            $_SESSION['loginkey'] = time() + 1800;
            $_SESSION['idkey'] = $idkey;
            header('location:profil');
        }
    }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="text">
            lütfen kartınızı okutunuz
        </div>
    </div>
<script src="./assets/js/postIdkey.js"></script>
</body>
</html>