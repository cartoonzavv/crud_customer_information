<?php

    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])){
        
        $userid = $_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname  = $_POST['surname'];
        $email = $_POST['email'];

        $sql = $updatedata->update($username, $password, $name, $surname, $email, $userid);
        
        if($sql) {
            echo "<script>alert('Updated Data Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else{
            echo "<script>alert('Someting went wrog! Please tey again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-secondary mt-3">Go back</a>
        <hr>
        <h1 class="mt-5">Update Page</h1>
        <hr>
    
        <?php

            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);

            //loop data from functions.php file
            while($row = mysqli_fetch_array($sql)) {
        ?>
    
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username"
                value="<?php echo $row['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" 
                value="<?php echo $row['password']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name"
                value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" name="surname" 
                value="<?php echo $row['surname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" 
                value="<?php echo $row['email']; ?>" required>
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>