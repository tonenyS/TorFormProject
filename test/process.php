<?php include 'connect.php'; ?>

<?php

if(isset($_POST['insert']))
{
    $appointment = $_POST['appointment'];
    $appointment_id = $_POST['appointment_id'];
    $identification = $_POST['identification'];

    $query = "INSERT INTO queuedb (appointment, appointment_id, identification)
    VALUES ('$appointment', '$appointment_id', '$identification')";
    $query_run = mysqli_query($connect,$query);

    if($query_run)
    {
        echo '<script type = "text/javasript"> alert("Data Saved") </script>';
    }
    else
    {
        echo '<script type = "text/javasript"> alert("Data Not Saved") </script>';
    }
}

?>