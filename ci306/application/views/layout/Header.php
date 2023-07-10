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
