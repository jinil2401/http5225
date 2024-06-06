<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <div class="row">
        
          <?php
            function getUsers(){
              $url = "users.json";
              $data = file_get_contents($url);
              //echo gettype($data);
              return json_decode($data, true);
            }
        
            $users = getUsers();
            if(!empty($users)){
              for($i = 0; $i < count($users); $i++){
                echo
                'div class="col-md -3">
                <div class="card mt-2 my-2" style=""> 
                <div class="card-body">
                  <div class="card" style="">Username :-' . $users[$i]['username'] . '</h5>
                    <p class="card-text">Name :-' . $users[$i]['name'] . '</p>
                    <p class="card-text">' . $users[$i]['email'] . '</p>
                    <p class="card-text">' . $users[$i]['street'] . '</p>
                    <p class="card-text">' . $users[$i]['suite'] . '</p>
                    <p class="card-text">' . $users[$i]['city'] . '</p>
                  </div>
                </div>
                </div>';
              }
            }

          ?>
        </div>
      </div>
    </div>

    <?php
    
    

  ?>
</body>
</html>