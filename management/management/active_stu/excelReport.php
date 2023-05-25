

<?php
session_start();
require "../../../conn.php";

$sd = $_GET['sd'];
$ed = $_GET['ed'];

$hstl = $_SESSION['hostel'];
if (!isset($_SESSION['id'])) {
?>
  <script>
    window.location.href = "../../../index.php";
  </script>
<?php
}

?>
<?php

$sql = "SELECT * FROM rating r INNER JOIN users u ON u.user_id = r.user_id INNER JOIN hostel h ON u.hostel_id=h.hostel_id WHERE timestamp BETWEEN '$sd' AND '$ed' and r.hostel_id = $hstl ";
$result = mysqli_query($db, $sql);






$html = '<table>
  <tr>
    <th>SR. NO</th>
    <th>ROLL NUMBER</th>
    <th>HOSTEL NAME</th>
    <th>ROLE</th>
    <th>DATE AND TIME OF SUBMISSION</th>


  </tr>';

  $count = 0;
  while ($row = mysqli_fetch_assoc($result)) {
  $count++;
  $html .= '<tr>
    <td>' . $count . '</td>
    <td>' . $row['name'] . '</td>
    <td>' . $row['hostel_name'] . '</td>
    <td>' . $row['role'] . '</td>
    <td>' . $row['timestamp'] . '</td>



    ';

    '
  </tr>';
  }

  $html .= '<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>';

  $html .= "
</table>";

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=student-list.xls');
echo $html;