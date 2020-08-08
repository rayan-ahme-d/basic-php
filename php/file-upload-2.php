<?php
if(isset($_FILES['file'])){
echo "<pre>";
print_r($_FILES);
echo "<pre>";
}
$file_name=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];
$file_tmpname=$_FILES['file']['tmp_name'];
move_uploaded_file($file_tmpname,"uploads/".$file_name);

?>
<html>
<heaed>
    <title>fileupload</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br/><br/>
<input type="submit" name="save">
</form>
</body>
</html>

<?php
if(isset($_FILES['file'])){


$file_name=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];
$file_tmpname=$_FILES['file']['tmp_name'];
if(move_uploaded_file($file_tmpname,"uploads/".$file_name)){
    echo "successfully uploaded your file";
}else{
    echo "something is worng ! your file couldnot be uploaded please try again";
}
}
?>
<html>
<heaed>
    <title>fileupload</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data"> //file upload number 2nd option
<input type="file" name="file"><br/><br/>
<input type="submit" name="save">
</form>
</body>
</html>