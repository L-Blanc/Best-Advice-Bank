<?php include 'database.php'; ?>

<?php
function populate_shoutbox($conn) {
      $query = "SELECT * FROM nuggets ORDER BY id DESC LIMIT 20";
      $shouts = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($shouts)) {
          echo '<li>';
          echo $row['advice'] . ': ';
          echo $row['source'];
          echo '  ' . $row['why'] . ' ';
          echo '</li>';
      }
    }
if (isset($_POST['advice']) && isset($_POST['source'])&& isset($_POST['why'])) {

  $advice = mysqli_real_escape_string($conn, $_POST['advice']);
  $source = mysqli_real_escape_string($conn, $_POST['source']);
  $why = mysqli_real_escape_string($conn, $_POST['why']);


  $query = "INSERT INTO nuggets (advice, source, why) VALUES ('$advice', '$source', '$why')";

  $result = mysqli_query($conn, $query);

  if ($result) {
populate_shoutbox($conn);
}
else {
  echo "Error: Unable to write to the database.";
}
} elseif (isset($_POST['refresher'])) {
  populate_shoutbox($conn);
}
else {
echo "Error: Unable to submit your shout.";
}




?>
