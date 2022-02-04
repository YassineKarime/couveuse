<!DOCTYPE html>
<html lang="en">
<?php include('setData.php'); ?>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<head>
    <title>Result </title>
</head>

<body>
    <!-- //on/off status for machine 1 -->
    <div class="container">
        <h1>INJAZ</h1>
        <!-- TABLE CONSTRUCTION-->
        <table class="table container-fluid">
            <tr>
                <th>ID</th>
                <th>Humidity</th>
                <th>Temperature</th>
                <th> Tension</th>
                <th>valeur I1</th>
                <th>valeur I2</th>
                <th>valeur I3</th>
                <th>Date Current</th>
            </tr>
            <?php foreach ($data as $rows) { ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['H']; ?></td>
                    <td><?php echo $rows['T']; ?></td>
                    <td><?php echo $rows['U']; ?></td>
                    <td><?php echo $rows['I1']; ?></td>
                    <td><?php echo $rows['I2']; ?></td>
                    <td><?php echo $rows['I3']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>