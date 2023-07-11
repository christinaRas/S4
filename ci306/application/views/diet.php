<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
  <div style="background-color: #1a1a1a; display: flex; align-items: center; justify-content: center; height: 100vh;">
    <section id="book-a-table" class="book-a-table" style="background-color: #1a1a1a; color: #ffd700;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nous traitons vos informations</h2>
          <p>Entrez votre identification</p>
        </div>

        <form action="<?php echo base_url('../Landing/savediet'); ?>" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="poids" class="form-control" id="name" placeholder="Votre poids">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="taille" placeholder="Votre taille(cm)">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <select name="genre" id="">
                <?php foreach ($genres as $genre): ?>
                  <option value="<?php echo $genre->id_genre; ?>"><?php echo $genre->nom_genre; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <select name="choix" id="">
                <?php foreach ($choix as $c): ?>
                  <option value="<?php echo $c->id_choix; ?>"><?php echo $c->nom_choix; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="text-center"><button type="submit">Entrer</button></div>
          </div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
  </div>
</body>
</html>
