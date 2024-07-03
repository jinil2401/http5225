<?php 
  include('reusable/_con.php'); 
  $id = $_GET['id'];
  $query = "SELECT * FROM spotify_tracks WHERE `id` = '$id'";
  $school = mysqli_query($connect, $query);
  $result = $school -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include('reusable/nav.php'); ?>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">Update <?php echo $result['name'] ?></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="inc/updatesong.php" method="POST">
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <div class="mb-3">
              <label for="name" class="form-label">Song Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?php echo $result['name'] ?>">
            </div>
            <div class="mb-3">
              <label for="genre" class="form-label">Song genre</label>
              <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $result['genre'] ?>">
            </div>
            <div class="mb-3">
              <label for="artists" class="form-label">Song artists</label>
              <input type="text" class="form-control" id="artists" name="artists" value="<?php echo $result['artists'] ?>">
            </div>
            <div class="mb-3">
              <label for="album" class="form-label">Song album</label>
              <input type="album" class="form-control" id="album" name="album" value="<?php echo $result['album'] ?>">
            </div>
            <div class="mb-3">
              <label for="popularity" class="form-label">Song popularity</label>
              <input type="popularity" class="form-control" id="popularity" name="popularity" value="<?php echo $result['popularity'] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="updatesong">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>
</html>