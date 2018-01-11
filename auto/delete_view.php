<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('autos/delete_confirm'); ?>
    <input type="hidden" name="auto_id" value="<?php echo $auto['auto_id']; ?>">
    <table class="table table-hover">
        <tr>
            <td>Onderhoud</td>
            <td><?php echo $auto['onderhoud']; ?></td>
        </tr>
        <tr>
            <td>Keuring</td>
            <td><?php echo $auto['keuring']; ?></td>
        </tr>
        <tr>
            <td>Nummerplaat</td>
            <td><?php echo $auto['nummerplaat']; ?></td>
        </tr>
        <tr>
            <td>Chauffeur</td>
            <td><?php echo $auto['naam']; ?></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-danger">Verwijderen</button>
    <a class="btn btn-primary" href="<?php echo site_url('autos'); ?>">Annuleren</a>
</form>