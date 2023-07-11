<form class="bg-dark text-light p-4" method="post" action="<?php echo base_url('../Wallet/insertCode'); ?>">
  <h2 class="text-light mb-4">Choisir crédit</h2>
  <div class="form-group">
    <label for="selectOption" class="form-label">Option :</label>
    <select class="form-control" name="code" id="selectOption">
        <?php  foreach ($result as $results) { ?>
      <option value="<?php echo $results->id_argent ?>"><?php echo $results->code ?></option>
    <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>