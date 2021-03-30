
<?php
    $title="Recup Image";
    require "head.php";
?>

<form method="POST" enctype="multipart/form-data">

    <input type="hidden" value="1000000" name="MAX_FILE_SIZE"/>
    <input type="file" name="uploadedfile" accept="image/png, image/jpg, image/jpeg"/>
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

        // if(in_array($fileActualExt,$allowed)){

            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
                // enregistrer dans sql
                $sql="insert into upload_image (path) values ('$target_path')";
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

        // }else{
        //     echo"You cannot upload files of this type !";
        // }

        
    }

?>

<!-- <div class="show_work"><img src="images/works/test1.png" alt="test1"/><aside><hr/><a href="#" class="link_work <?php echo color();?>">Test1</a><hr/><p>Lorem Ispum</p></aside></div>
<div class="show_work"><img src="images/works/test2.png" alt="test2"/><aside><hr/><a href="#" class="link_work <?php echo color();?>">Test2</a><hr/><p>Lorem Ipsum dolor sit amet</p></aside></div>

<style>
    .grey{
    color : lightgrey;
    }
    
    .red{
    color:red;
    }
    
    .blue{
    color:blue;
    }
</style>

<?php
    function color(){
        $couleurs = array("blue", "red", "grey");
        return $couleurs[ rand(0, count($couleurs)-1 ) ];
    }
?> -->


<br><a href="index.php">ICI</a>
<?php
    include("footer.php");
?>




