<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['$username'];
  $password = $_POST['password'];
  if ($password !== "kpsportclub" && $username !== "admin") {
    http_response_code(401);
    exit("Unauthorized");
  }
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display Page</title>
  </head>

  <body>
    <h1 style="text-align:center;">Log in</h1>
    <div class="password" style="display: flex;justify-content: center;">
      <form action="" method="post">
        <input style="width:300px; height:50px; margin-bottom: 10px;" type="text" name="username" placeholder="Enter the username"></br>
        <input style="width:300px; height:50px; margin-bottom: 10px;" type="password" name="password" placeholder="Enter the password"></br>
        <button style="width:309px; height:50px;"type="submit">Submit</button>
      </form>
    </div>
    <?php
    exit;
}
?>
  <style>
    body{
      margin:0;
    }
    .formsOutput {
      width: 30%;
      float: left;
      margin: 10 15;
    }
    #data {
      width: 100%;

    }
    .header h1 {
      text-align: center;
    }
  </style>
  <div class="header">
    <h1>Admin Panel</h1>
    <div>
      <div id="data">
        <?php
        $file = file_get_contents('data.txt');
        if (!empty($file)) {
          $dataArray = explode("\n", $file);
          $count = 0;
          foreach ($dataArray as $index => $data) {
            if ($data != "") {
              $splitData = explode('\ ', $data);
              echo "<div class='formsOutput green' style='border:solid 1px black; padding: 5px; width:30%;'><p>Name: " . explode(': ', $splitData[0])[1] . "</p>";
              echo "<p>Number: " . explode(': ', $splitData[1])[1] . "</p>";
              echo "<p>Message: " . explode(': ', $splitData[2])[1] . "</p></div>";
              $count++;
              if ($count % 3 == 0) {
                echo "<br>";
              }
            }
          }
        } else {
          echo "<p>No entries found</p>";
        }
        ?>
      </div>
</body>
</html>