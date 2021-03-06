<?php
require_once("db/include.php");
require_once("utils/functions.php");

sec_session_start();
if(login_check($dbh->getDb()) == true){
  $userEmail = $_SESSION['user_id'];
  $templateParams["nome"] = "add_product_template.php";
  $templateParams["nnotifiche"] = $dbh->getNotificationsNumber();
  
  if(isset($_POST["name"], $_POST["brand"], $_POST["type"], $_POST["description"], 
  $_POST["feature1"], $_POST["feature2"], $_POST["feature3"], $_POST["price"], $_POST["quantity"]
  )) {
    
    $folderName = preg_replace('/\s+/', '_', $_POST["name"]);
    $path = "../resources/img/".$_POST["type"]."/".$folderName;
    if(!is_dir($path)){
      mkdir($path); 
    }
    
    $features = $_POST["feature1"]."-".$_POST["feature2"]."-".$_POST["feature3"];
    $imgUploadOk = true;
    
    $_FILES['photoFront']['name'] = "front.png";
    $uploadfile = $path."/".basename($_FILES['photoFront']['name']);
    if (!move_uploaded_file($_FILES['photoFront']['tmp_name'], $uploadfile)) {
        $imgUploadOk = false;
        echo "Error on uploading photo front\n";
    }
    $_FILES['photoBack']['name'] = "back.png";
    $uploadfile = $path."/".basename($_FILES['photoBack']['name']);
    if (!move_uploaded_file($_FILES['photoBack']['tmp_name'], $uploadfile)) {
        $imgUploadOk = false;
        echo "Error on uploading photo back\n";
    }
    $_FILES['photoZoom']['name'] = "zoom.png";
    $uploadfile = $path."/".basename($_FILES['photoZoom']['name']);
    if (!move_uploaded_file($_FILES['photoZoom']['tmp_name'], $uploadfile)) {
        $imgUploadOk = false;
        echo "Error on uploading photo zoom\n";
    }
    $_FILES['photoHead']['name'] = "head.png";
    $uploadfile = $path."/".basename($_FILES['photoHead']['name']);
    if (!move_uploaded_file($_FILES['photoHead']['tmp_name'], $uploadfile)) {
        $imgUploadOk = false;
        echo "Error on uploading photo head\n";
    }
    
    if ($imgUploadOk){
        $dbh->addProduct($_POST["name"], $_POST["brand"], $_POST["type"], $_POST["description"], $features,
        $_POST["price"], $_POST["quantity"], $folderName, $userEmail);
        $notification = "Added ".$_POST["name"]." to the shop";
        $dbh->addNotification($notification);
        $templateParams["notifiche"] = $dbh->getNotifications();
        $templateParams["nnotifiche"] = $dbh->getNotificationsNumber();
    } else {
        $notification = "Failed to add ".$_POST["name"]." in the shop";
        $dbh->addNotification($notification);
        $templateParams["notifiche"] = $dbh->getNotifications();
        echo "Product has not been added";
    }
    
} 
} else {
$templateParams["nome"] = "slide-show.php";
}

require("template/base.php");
?>