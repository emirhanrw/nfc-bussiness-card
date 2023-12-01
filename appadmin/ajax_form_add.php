<?php 
    include_once('../lib/functions.php');
    $err = false;
    $msg = '';
    $link = '';
    $alert = '';
    $fileSize = 0;
    $maxSize = 1 * 1024 * 1024;
    if(!empty($_POST['name_surname'])){
        $idkey = rand(1000,2000);
        $idkey_query = admin_safe_idkey(md5($idkey));
        if(!empty($idkey_query)){
            $idkey += time();
        }
        $idkey = md5($idkey);
        if(isset($_FILES['picture'])){
            $filename = $_FILES['picture']['name'];
            $file = $_FILES['picture']['tmp_name'];
            $fileSize = $_FILES['picture']['size'];
            $fileError = $_FILES['picture']['error'];
            if ($fileError !== UPLOAD_ERR_OK) {
                $err = true;
                $msg = "Fotoğraf Yüklenirken Hata Oluştu!";
                $alert = 'danger';
            } elseif ($fileSize > $maxSize) {
                $err = true;
                $msg = "En fazla 1 MB boyutunda resim yükleyiniz!";
                $alert = 'danger';
            } else {
                if (!file_exists('uploads/')) {
                    mkdir('uploads/');
                }
                if (file_exists('uploads/' . $filename)) {
                    $filename = time() . $filename;
                }
                move_uploaded_file($file, 'uploads/' . $filename);
                $err = false;
            }
            
        }
        if($err === false){
            $pdo = Database::db();
            $stmt = $pdo->prepare("INSERT INTO users (name,company,seniority,picture,email,phone,address,idkey) VALUE (:name,:company,:seniority,:picture,:email,:phone,:address,:idkey)");
            $data = array(
                'name'=>$_POST['name_surname'],
                'company'=>$_POST['company'],
                'seniority'=>$_POST['seniority'],
                'picture'=>$filename,
                'email'=>$_POST['email'],
                'phone'=>$_POST['phone'],
                'address'=>$_POST['address'],
                'idkey'=>$idkey,
            );
            if($stmt->execute($data)){
                $msg = 'Kayıt Başarıyla Oluşturuldu!';
                $alert = 'success';
                $link = 'http://localhost/proje/login?idkey='.$idkey;
            }else{
                $msg = 'Kayıt yapılırlen hata oluştu...';
                $alert = 'danger';
                if(file_exists('uploads/'.$filename)){
                    unlink('uploads/'.$filename);
                }
            }
        }
    }else{
        $msg = 'Lütfen isim giriniz!';
        $alert = 'danger';
    }
    echo json_encode(['message'=>$msg, 'link'=>$link, 'alert'=>$alert]);
?>