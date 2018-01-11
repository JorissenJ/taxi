<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('autos/update'); ?>

    <input type="hidden" name="auto_id" value="<?php echo $auto['auto_id']; ?>">
    <table class="table table-hover">
        <tr>
            <td>Onderhoud</td>
            <td><input type="text" class="form-control" name="onderhoud" value="<?php echo $auto['onderhoud']; ?>"></td>
        </tr>
        <tr>
            <td>Keuring</td>
            <td><input type="text" class="form-control" name="keuring" value="<?php echo $auto['keuring']; ?>"></td>
        </tr>
        <tr>
            <td>Nummerplaat</td>
            <td><input type="text" class="form-control" name="nummerplaat" value="<?php echo $auto['nummerplaat']; ?>"></td>
        </tr>
        <tr>
            <td>Chauffeur</td>
            <td>
                <select name="chauffeur_id" class="form-control">
                    <?php foreach($chauffeurs as $item): ?>
                        <?php if($item['chauffeur_id'] == $auto['chauffeur_id']) : ?>
                            <option value="<?php echo $item['chauffeur_id']; ?>" selected><?php echo $item['naam']; ?></option>
                        <?php else : ?>
                            <option value="<?php echo $item['chauffeur_id']; ?>"><?php echo $item['naam']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Bijwerken</button>
    <a class="btn btn-primary" href="<?php echo site_url('autos'); ?>">Annuleren</a>
</form>