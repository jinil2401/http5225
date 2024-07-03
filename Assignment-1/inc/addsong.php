<?php
include('functions.php');
if (isset($_POST['addsong'])) {
    // print_r($_POST);
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $artists = $_POST['artists'];
    $album = $_POST['album'];
    $popularity = $_POST['popularity'];

    // Connection string
    include('../reusable/_con.php');
    $query = "INSERT INTO spotify_tracks (`name`, `genre`, `artists`, `album`, `popularity`) VALUES ('$name', '$genre', '$artists', '$album', '$popularity')";

    $song = mysqli_query($connect, $query);

    if ($song) {
        set_message('song was added succesfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}