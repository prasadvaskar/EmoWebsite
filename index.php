<!DOCTYPE html>
<html>
    <head>
        <title>For Article</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script type="text/javascript" src="index.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        

    </head>
    <body>
      <!---Section 1 for the User Name and Emotion Button-->
      <section id="section1">
        <!-- Image and text -->
<nav  class="navbar navbar-light bg-dark">
  <a class="navbar-brand text-danger" href="#">
    <h2>Emotion Player</h2>
  </a>
</nav>
        <ul  class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="emotion.html">EMOTION SCANNER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="playlist.html">PLAYLIST</a>
          </li>
          
        </ul>
      </section>
      <!--End of Section 1-->
      <!---Section 2 for the Playlist---------------->
      <section>
        <table class="table table-responsive"> 
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "songsdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo "connected";
}

$sql = "SELECT * FROM usersongs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?><tr><td><?php echo $row['sno'];?></td>
        <td><?php echo $row['sname'];?></td>
        <td><?php echo $row['artist'];?></td>
        <td><?php echo $row['duration'];?></td>
        
        </tr><?php
    }
}
?>
</table>
      </section>
      <!----End of Section 2-->
      <!--Section 3 for the Controller of Songs-->
      <section></section>

      
        

    </body>

</html>