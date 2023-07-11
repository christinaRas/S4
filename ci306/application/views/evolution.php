<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
<a href="javascript:history.back()" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">saisir votre evolution</span>
</a>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

 <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
    <a class="nav-link " href="index.html">
    <i class="bi bi-grid"></i>
    <span>Votre Evolution</span>
    </a>
</li><!-- End Dashboard Nav -->


</ul>
</aside><!-- End Sidebar-->

    <style>

            form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 126px;
        }

        input[type="date"],
        input[type="number"] {
        width: 300px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        input[type="submit"] {
        width: 200px;
        padding: 10px;
        background-color: orange;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition : 2s;
        }

        input[type="submit"]:hover {
        background-color: #45a049;
        }

    </style>

</head>
<body>
    <form action="<?php echo base_url('../Evolutionuser/save'); ?>" method="post">
    <span style ="font-weight : bold;"> saisir la dernière date de progression</span>
    <input type="date" name="date" id=""></br>

    <span style ="font-weight : bold;"> saisir votre nouveau poids</span>
    <input type="number" name="newpoids" placeholder="Votre nouveau poids">
    <input type="submit" value="valider">
    </form>

</body>

    
<div class="footer" style ="margin-left: 0%; margin-top: 25%;">
<footer style="background-color: black; color: white; padding: 20px; width: 100%; text-align: center; mar">
        <div class ="titre" style ="text-align: center;">
        <p >&copy; 2023  ETU : 2204-2207-2207.</p>
        </div>
</footer>
</div>

</html>