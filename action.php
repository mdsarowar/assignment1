<?php
require_once 'vendor/autoload.php';
use App\classes\Authclass;
use App\classes\fileUpload;

if (isset($_GET['pages'])){
    if ($_GET['pages']=='login'){
        include 'pages/sigin.php';
    }
    elseif ($_GET['pages']=='fileupload'){
        include 'pages/fileup.php';

    }
    elseif ($_GET['pages'] == 'view')
    {
        $fileUpload = new fileUpload();
        $students = $fileUpload->getAllInfo();
        include 'pages/viewpage.php';
    }
    elseif ($_GET['pages'] == 'logout')
    {
        $auth = new Authclass();
        $auth->logout();
    }
}
elseif (isset($_POST['loginbtn'])){

    $auth=new Authclass($_POST);
    $message=$auth->login();
    include 'pages/sigin.php';

}

elseif (isset($_POST['btn']))
{
    $fileUpload = new fileUpload($_FILES, $_POST);
    $message = $fileUpload->index();
    include 'pages/fileup.php';
}