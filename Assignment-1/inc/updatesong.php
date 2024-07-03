
<?php
include("functions.php");
require('../reusable/_con.php');
if (isset($_POST['updatesong'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $artists = $_POST['artists'];
    $album = $_POST['album'];
    $popularity = $_POST['popularity'];
    
    $query = "UPDATE `spotify_tracks` SET `name`='$name',`genre`='$genre',`artists`='$artists',`album`='$album',`popularity`='$popularity' WHERE `id`='$id'";

    $school = mysqli_query($connect, $query);
    if ($school) {
        set_message("Song was updated successfully","success");
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here";
}
