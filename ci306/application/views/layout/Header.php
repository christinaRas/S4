<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url = $_SERVER['REQUEST_URI'];
$title = basename($url);
// echo $title;
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<link href="<?php echo base_url('https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('css/paiement.css'); ?>">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php  echo base_url('temp/img/favicon.png'); ?>" rel="icon">
  <link href="<?php  echo base_url('temp/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php   echo base_url('temp/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php   echo base_url('temp/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?php   echo base_url('temp/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?php   echo base_url('temp/vendor/quill/quill.snow.css');?>temp" rel="stylesheet">
  <link href="<?php   echo base_url('temp/vendor/quill/quill.bubble.css');?>" rel="stylesheet">
  <link href="<?php   echo base_url('temp/vendor/remixicon/remixicon.css');?>" rel="stylesheet">
  <link href="<?php   echo base_url('temp/vendor/simple-datatables/style.css');?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('temp/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

  <style>
   body{
    font-family: 'Arial';
   }
    .imprimer
    {
        text-align: center;
    }
    .card {
        width: 16rem;
        text-align: center;
        border: 2px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        display: inline-block;
        margin-top: 10px;
        margin-left: 5px;
    }

    .card-img-top {
        width: 100%;
        border-radius: 5px;
    }

    .card-title {
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .card-text {
        margin-top: 5px;
    }
    .cart-button {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px 20px;
  margin: auto;
}

.cart-button svg {
  margin-right: 5px;
}

.cart-button span {
  font-weight: bold;
}

</style>

  </style>
</body>
</html>
<script>
  window.onload = function() 
{
    document.getElementById("pdf").addEventListener("click",()=>{
        const all = this.document.getElementById('all');
        console.log(all);
        html2pdf().from(all).save();
    })
}
</script>
