<html>
<head>
    <title>document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" placeholder="name" name="name"><br/>
    <input type="text" placeholder="lname" name="lname"><br/>
    <input type="submit" name="save" >
    </form>
    <?php 
        if(isset($_POST['save'])){
            echo $_POST['name']."<br/>";
            echo $_POST['lname'];
        }


    ?>
</body>
</html>