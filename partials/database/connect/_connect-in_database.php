  <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "hackos";

  $connect = mysqli_connect($server, $username, $password, $database);
  if (!$connect){
  //  echo "success";
  //}
  //else {
    die("Error". mysqli_connect_error());
  }
  ?>
