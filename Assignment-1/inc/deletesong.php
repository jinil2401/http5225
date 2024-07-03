<?php
include('functions.php');
require('../reusable/_con.php');
if (isset($_GET['deletesong'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM spotify_tracks WHERE `id` = '$id'";
    $song = mysqli_query($connect, $query);

    if ($song) {
        set_message('School was deleted succesfully!', 'danger');
        header('Location: ../index.php');
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}