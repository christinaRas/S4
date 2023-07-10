<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url = $_SERVER['REQUEST_URI'];
$title = basename($url);
// echo $title;
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle='collapse' datatarget='#navbarNav' aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle-navigation">
            <span class='navbar-toggler-icon'></span>
        </button>
        <a class="navbar-brand" href="#">FACTURE PDF</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            
            <!-- <li class="nav-item active">
                    <a href="Achat" class="nav-link">Achat</a>
            </li> -->
            <li class="nav-item active">
                    <a href="Client" class="nav-link">Facture client</a>
            </li>
            <li class="nav-item active">
                    <a href="Facture" class="nav-link">Voir tout</a>
            </li>
           
            
            </ul>
        </div>
        <form action="search" method="get" class="form-inline ml-2">
            <input name="search" id="facture" class="form from-control mr-sm-2" type="number" placeholder="Numero de facture">
            <!-- <input name="produit" id="designation"  class="form from-control mr-sm-2" type="text" placeholder="Produit"> -->
            <button class="btn btn-outline-light my-2 my-sm-o">Search</button>
        </form>
    </nav>        
</header>  
       <?php 
        if ($title!='Client' && $title!='imprimer') {
          echo '        <form action="RechercheProduit" method="get" class="form-inline ml-2">
          <input name="produit" id="facture" class="form from-control mr-sm-2" type="text" placeholder="Produit??">
        <button class="btn btn-outline-dark my-2 my-sm-o">Search</button>';
        }
       ?>
</form>
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
