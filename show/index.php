<?php

$connect = mysqli_connect('localhost', 'root', '123456789', 'form');
if (mysqli_connect_error($connect)) {
    echo 'Failed to connect';
}

$result = mysqli_query($connect, "SELECT * FROM queuedb");

// while ($row = mysqli_fetch_array(@$result)){
//echo $row['appointment'] . ' ' . $row['appointment_id'] . '<br>';
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <table id="showTable" widt="500" cellspacing="5" cellpadding="5" border="1">
        <tr>
            <th>ลำดับ</th>
            <th>ใบนัด</th>
            <th>เลขที่ใบนัด</th>
            <th>เลขบัตรประจำตัวประชาชน</th>
        </tr>

        <?php while ($row = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['appointment'] ?></td>
                <td><?php echo $row['appointment_id'] ?></td>
                <td><?php echo $row['identification'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <script>
        $(document).ready(function() {
            $('#showTable').DataTable();
        });
    </script>
</body>

</html>