<?php include ('reusable/_con.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php include ('reusable/nav.php'); ?>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">All songs</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">


        <?php include ('inc/functions.php');

        get_message();
        $query = 'SELECT * FROM spotify_tracks';
        $songs = mysqli_query($connect, $query);

        foreach ($songs as $song) {
          echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">' . $song['name'] . '</h5>
                        <p class="card-text">' . $song['genre'] . '</p>
                        <span class="badge bg-secondary">' . $song['artists'] . '</span>
                        <span class="badge bg-info">' . $song['album'] . '</span>
                        <span class="badge bg-info">' . $song['popularity'] . '</span>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <form action="update.php" method="GET">
                              <input type="hidden" name="id" value="' . $song['id'] . '">
                              <button type="submit" class="btn btn-sm btn-primary" name="updatesong">
                                Update
                              </button>
                            </form>
                          </div>
                          <div class="col text-end">
                            <form action="inc/deletesong.php" method="GET">
                              <input type="hidden" name="id" value="' . $song['id'] . '">
                              <button type="submit" name="deletesong" class="btn btn-sm btn-danger">
                                Delete
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
        }
        ?>
      </div>
    </div>
  </div>


</body>

</html>