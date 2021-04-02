


<?php

include("../Bdd/cnx.php");

$sql=mysqli_query($con, "SELECT * FROM messagerie");

while($row = mysqli_fetch_assoc($sql)){
    ?>

    <div class="message">
        <h4><?= $row['user']; ?></h4>
        <p><?= $row['message']; ?></p>
    </div>

<?php
}
?>