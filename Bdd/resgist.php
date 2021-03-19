<!-- <?php
    include("cnx.php");

    if(isset($_POST['submit'])){
        $target_path="../Image/";
        $target_path=$target_path.basename($_FILES['uploadedfile']['name']);
        // echo"$target_path";
        echo"OUIIIIIIIII";
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
            echo"OUII";
            // $conn= new mysqli("localhost","root","","test_bdd");
            // echo"OUIII";
            $sql="insert into upload_image (`path`) values ('$target_path')";
            if($con->query($sql)==true){
                echo"<br>Working<br>";
                // echo"OUI";
            }else{
                echo "Error:".$sql.$con->error;
            }
        }
        // echo"NOOOOOO";
    }

?> -->