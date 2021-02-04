<?php
  $q = $_GET['name'];
  $conn = mysqli_connect('localhost', 'root', 'admin', "emp");
  if(mysqli_connect_errno()) {
    echo "failed to connect the database".mysqli_connect_error();
  }
  $query = "SELECT * FROM emprecord WHERE id='".$q."'";
  $result = mysqli_query($conn, $query);
  echo "<table>
  <tr>
  <th>Name</th>
  <th>Age</th>
  <th>Designation</th>
  </tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['designation']."</td>";
  }
  echo "</table>";
  mysqli_close($conn);
?>
