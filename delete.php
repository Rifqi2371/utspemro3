<?php 
include "connection.php";

$iddataguru = $_GET['iddataguru'];
$sql = "DELETE FROM dataguru WHERE id = $iddataguru";
$query = mysqli_query($connect, $sql);
if ($query) {
    echo "<script>
            alert ('Deleted Success')
            window.location = 'index.php'
            </script>";
}else {
    echo "<script>
            alert ('Deleted Failed !!!')
            window.location = 'index.php'
            </script>";
}

?>