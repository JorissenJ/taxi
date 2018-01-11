<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Overzicht Auto's</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Onderhoud</th>
                <th scope="col">Keuring</th>
                <th scope="col">Nummerplaat</th>
                <th scope="col">Chauffeur</th>
                <td>
                    <span class="glyphicon glyphicon-edit"></span>
                    <span class="glyphicon glyphicon-trash"></span>
                </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($autos as $record) : ?>
                <tr>
                    <td scope="col"><?php echo $record['onderhoud']; ?></td>
                    <td scope="col"><?php echo $record['keuring']; ?></td>
                    <td scope="col"><?php echo $record['nummerplaat']; ?></td>
                    <td scope="col"><?php echo $record['naam']; ?></td>
                    <td>
                        <a class="glyphicon glyphicon-edit" href="<?php echo site_url('/autos/edit/'.$record['auto_id']); ?>"></a>
                        <a class="glyphicon glyphicon-trash" href="<?php echo site_url('/autos/delete/'.$record['auto_id']); ?>"></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="<?php echo site_url('/autos/create'); ?>">Toevoegen</a>
</body>
</html>