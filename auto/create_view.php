<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('autos/create'); ?>
  <div class="form-group">
    <label>Onderhoud</label>
    <input type="text" class="form-control" name="onderhoud">
  </div>
  <div class="form-group">
    <label>Keuring</label>
    <input type="text" class="form-control" name="keuring">
  </div>
  <div class="form-group">
    <label>Nummerplaat</label>
    <input type="text" class="form-control" name="nummerplaat">
  </div>
  <div class="form-group">
    <label>Chauffeur</label>
    <select name="chauffeur_id" class="form-control">
        <?php foreach($chauffeurs as $item): ?>
          <option value="<?php echo $item['chauffeur_id']; ?>"><?php echo $item['naam']; ?></option>
        <?php endforeach; ?>
        </select>
  </div>
  <button type="submit" class="btn btn-primary">Toevoegen</button>
  <a class="btn btn-primary" href="<?php echo site_url('autos'); ?>">Annuleren</a>
</form>