<?php

    include_once('functions.php');

    if(isset($GET['del'])){
        $userid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($userid);

        if($sql) {
            echo "<script>alert('Deleted Data Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }

    }

?>