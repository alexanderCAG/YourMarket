
<?php
    $title="Recette";
    require "head.php";
    include("../../Bdd/cnx.php");

    $titreRecette = mysqli_query($con, 'select titre_recette from recette');
    $queryCountRecette = mysqli_query($con, "select count(id_recette) as total_recette  from recette"); 
     
?>


<div class="card" style="width:1200px;background-color: #EBEDEF;border:none;margin:auto;margin-top:120px;padding:40px">
<?php
  if($row = mysqli_fetch_assoc($queryCountRecette)){
    $totalRecette = $row['total_recette'];  
?>
<div class="row">
 <!-- -------------------  COL 1 ------------------>
  <div class="col-md-4">
    <footer class="blockquote-footer h1">Selectionnez une ou plusieurs  <cite title="Source Title">Recette</cite></footer> 
    <form method="post">
      <select name="select_recette">
          <?php
                // Total recettes
                    
                    for ($i=0; $i<=$totalRecette;$i++){
                        if($rowAllRecette = mysqli_fetch_assoc($titreRecette)){
                            $titre = $rowAllRecette['titre_recette'];
                            echo    '<option value="3">'.$titre.'</option>';
                        }
                    }
                    if (isset($_POST['select_recette'])){$select_recette = $_POST['select_recette'];}

          ?>
      </select> 
  
  </div>
<!-- -------------------  COL 2 ------------------>
  <div class="col-md-8 pl-4" style="border-top:none!important;border-bottom:none!important;border-right:none!important;border-style:solid">
    <footer class="blockquote-footer h1">Tableau récapitulatif | quantité des ingrédients | prix en fonction des marques </footer>          
      <table>
        <thead>
          <tr>
            <th>Ingredients</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>Status</th>
          </tr>
        </thead>
        <tr> 
       <?php 
        // for ($i=0; $i<=$totalRecette;$i++){ 
        //                 if($rowAllRecette = mysqli_fetch_assoc($titreRecette)){
        //                     $titre = $rowAllRecette['titre_recette'];
        //                     echo ' <td><a href="#">'.$titre.'</a></td>';
        //                 }
        //             }
        if(isset($_POST['select_recette'])){
                if($_POST['secteur']==$_POST['secteur']){
                        echo $_POST['secteur'];
                }
          }
        ?>
                <td><a href="#"> <?php echo $select_recette ?></a></td>
                <td>Paragon</td>
                <td>1/5/2021</td>

              </tr>
        </tr>
      </table>
  </div>
  </form>
  <?php } ?>
</div>  
</div>
<?php
    include("footer.php");
?>

<style> 
 select {
	 border: 0;
	 outline: 0;
	 font: inherit;
	 width: 20em;
	 height: 3em;
	 padding: 0 4em 0 1em;
	color: black ;
	 border-radius: 0.25em;
	 box-shadow: 0 0 1em 0  rgba(0, 0, 0, 0.2);
	 cursor: pointer;
}
select:focus {outline: none;}
select::-ms-expand {display: none;}






table {
  border-collapse: collapse;
  box-shadow: 0 5px 10px #e1e5ee;
  background-color: white;
  text-align: left;
  overflow: hidden;
  width: 100%;
}
  thead {
    box-shadow: 0 5px 10px #e1e5ee;
  }

  th {
    padding: 1rem 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    font-size: 0.7rem;
    font-weight: 900;
  }

  td {
    padding: 1rem 2rem;
  }

  a {
    text-decoration: none;
    color:#2962ff;
  }

  .status {
    border-radius:  0.2rem;
    background-color: red;
    padding: 0.2rem 1rem;
    text-align: center;
}
   .status-pending {
      background-color: #fff0c2;
      color: #a68b00;
    }

     .status-paid {
      background-color: #c8e6c9;
      color:  #388e3c;
    }

      .status-unpaid {
      background-color: #ffcdd2;
      color: #c62828;
    }
  

  .amount {
    text-align: right;
  }

 
  tr:nth-child(even) {
    background-color: #f4f6fb;
  }
</style>