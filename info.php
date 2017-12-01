
<?php
include "connect.php";
include_once ('detect_language_class.php');
// select all users except admin
 $stmt = $con->prepare("SELECT * FROM `ajax-form` order by id ASC");
 // Exécuter l'instruction
 // Execute the statement
 $stmt->execute();
  // assigner à la variable
 // assign to variable
 $rows = $stmt->fetchAll();
 if (!empty($rows)){
  foreach ($rows as $row) {
    ?>
    <tr>
      <td><?php echo $row['ID']?></td>
      <td><?php echo $row['Name']?></td>
      <td><?php echo $row['Lastname']?></td>
      <td><?php echo $row['Job']?></td>
      <td><?php echo $row['Email']?></td>
      <td><a href="ajax?edit=<?php echo $row['ID'];?>" onclick="return editUser(<?php echo $row['ID'];?>);"><?php echo $lang8[$lang]?></a></td>
      <td><a href="ajax?delete=<?php echo $row['ID'];?>" onclick="return deleteUser(<?php echo $row['ID'];?>);"><?php echo $lang9[$lang]?></a></td>
    </tr>
<?php
  }
 }

 ?>
 <?php
  ?>
