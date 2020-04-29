
<!DOCTYPE html>
<html>
    <head>
        <title>Sample DB Connection</title>
    </head>
    <body>
        <?php
        require_once ('../config/db_connection.php');
        $status = getDatabaseStatus();
        if($status == "success"){
            include('../frontend/views/dashboard.php');
        }
        else{
            echo "<h1> $status </h1>";
        }
        ?>
    </body>
</html>

