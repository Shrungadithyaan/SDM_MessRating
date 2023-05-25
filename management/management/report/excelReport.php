<?php
session_start();
require "../../../conn.php";

$sd = $_GET['sd'];
$ed = $_GET['ed'];

$hstl = $_SESSION['hostel'];

$sql = "SELECT * FROM desc_rating d INNER JOIN rating r ON d.rating_id=r.rating_id INNER JOIN food f ON r.food_id = f.food_id INNER JOIN users u ON r.user_id = u.user_id INNER JOIN cook c ON r.cook_id = c.cook_id INNER JOIN hostel h ON c.hostel_id = h.hostel_id WHERE timestamp BETWEEN '$sd' AND '$ed' and r.hostel_id = $hstl  ORDER BY f.category";
$result = mysqli_query($db, $sql);






$html = '<table>
<tr>
  <th>SR. NO</th>
                                <th>HOSTEL</th>
                                <th>ROLL NUMBER</th>
                                <th>CATEGORY</th>
                                <th>FOOD NAME</th>
                                <th>COOK NAME</th>
                                <th>RATING</th>
                                <th>COMMENTS</th>
 </tr>';

$count=0;
while ($row = mysqli_fetch_assoc($result)) {
    $count++;
    $html .= '<tr> 
    <td>' . $count. '</td> 
    <td>' . $row['hostel_name'] . '</td> 
    <td>' . $row['name'] . '</td> 
    <td>' . $row['category'] . '</td> 
    <td>' . $row['food_item'] . '</td> 
    <td>' . $row['cook_name'] . '</td>  
    <td>' . $row['rating'] . '</td>  
    <td>' . $row['description'] . '</td>  
    
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

$html .= "</table>";

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=comment-list.xls');
echo $html;
