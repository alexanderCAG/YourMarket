
<?php
    $title="Accueil";
    require "head.php";
?>

<form method="POST" enctype="multipart/form-data">
    <input type="hidden" value="1000000" name="MAX_FILE_SIZE"/>
    <input type="file" name="uploadedfile" accept="image/png,image/jpg,image/jpeg"/>
    <input type="submit" name="submit" value="Upload"/>
</form>

<?php
    include("../Bdd/cnx.php");

    if(isset($_POST['submit'])){
        $target_path="../Image/";
        $target_path=$target_path.basename($_FILES['uploadedfile']['name']);

        $fileName=$_FILES['uploadedfile']['name'];
        $fileExt=explode('.', $fileName);
        $fileActualExt= strtolower(end($fileExt));

        $allowed=array('jpg','jpeg','png');

        if(in_array($fileActualExt,$allowed)){

            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
                // enregistrer dans sql
                $sql="insert into upload_image (`path`) values ('$target_path')";
                if($con->query($sql)==true){
                    echo"<br><br>";
                }else{
                    echo "Error:".$sql.$con->error;
                }

                // afficher
                $sql1="select path from upload_image order by id desc limit 1";
                $result=$con->query($sql1);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $path=$row['path'];
                        echo"<img src='$path' heignt='280' width='320'>";
                    }
                }
                $con->close();
            }

        }else{
            echo"You cannot upload files of this type !";
        }

        
    }

?>
<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>




