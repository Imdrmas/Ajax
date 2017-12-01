<?php
include "connect.php";

if (isset($_POST['fname'])) {
    $fname = $_POST['fname'];
}

if (isset($_POST['lname'])) {
    $lname = $_POST['lname'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['job'])) {
    $job = $_POST['job'];
}

// insert user info in database
$stmt = $con->prepare("INSERT INTO
                      `ajax-form`(Name, Lastname, Email, Job)
                      VALUES(:zfname, :zlname, :zemail, :zjob)");

                      $stmt->execute(array(
                        'zfname'  => $fname,
                        'zlname'  => $lname,
                        'zemail'  => $email,
                        'zjob'    => $job
                      ));
echo "<div class='alert alert-success'> " . $stmt->rowCount() . ' Record Inserted </div>';
 ?>
