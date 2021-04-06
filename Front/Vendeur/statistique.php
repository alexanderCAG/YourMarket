<?php
    $title="Statistical";
    require "head.php";
    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
    
    $querySeller = mysqli_query($con, "SELECT id_seller FROM seller WHERE email='$email_user' or brand='$email_user'");


    if($row = mysqli_fetch_assoc($querySeller)){
        $id_seller = $row['id_seller'];

        $Seller = mysqli_query($con, "select background from seller where email='$email_user' or brand='$email_user'");
        $ca_seller = mysqli_query($con, "SELECT sum(price*quantity) as CA FROM history WHERE id_seller= '$id_seller'");

        $qtt_pillow = mysqli_query($con, "SELECT sum(quantity) as qttPillow FROM history WHERE id_seller='$id_seller' and subcategory='pillow'");
        $qtt_pillow2 = mysqli_query($con, "SELECT sum(quantity) as qttPillow FROM history WHERE id_seller='$id_seller' and subcategory='pillow'");

        $qtt_sheet = mysqli_query($con, "SELECT sum(quantity) as qttSheet FROM history WHERE id_seller='$id_seller' and subcategory='sheet'");
        $qtt_sheet2 = mysqli_query($con, "SELECT sum(quantity) as qttSheet FROM history WHERE id_seller='$id_seller' and subcategory='sheet'");

        $qtt_decoration = mysqli_query($con, "SELECT sum(quantity) as qttDecoration FROM history WHERE id_seller='$id_seller' and subcategory='decoration'");
        $qtt_decoration2 = mysqli_query($con, "SELECT sum(quantity) as qttDecoration FROM history WHERE id_seller='$id_seller' and subcategory='decoration'");

        $qtt_tshirt = mysqli_query($con, "SELECT sum(quantity) as qttTshirt FROM history WHERE id_seller='$id_seller' and subcategory='tshirt'");
        $qtt_tshirt2 = mysqli_query($con, "SELECT sum(quantity) as qttTshirt FROM history WHERE id_seller='$id_seller' and subcategory='tshirt'");

        $qtt_shoes = mysqli_query($con, "SELECT sum(quantity) as qttShoes FROM history WHERE id_seller='$id_seller' and subcategory='shoes'");
        $qtt_shoes2 = mysqli_query($con, "SELECT sum(quantity) as qttShoes FROM history WHERE id_seller='$id_seller' and subcategory='shoes'");

        $qtt_sweatshirt = mysqli_query($con, "SELECT sum(quantity) as qttSweatshirt FROM history WHERE id_seller='$id_seller' and subcategory='sweat_shirt'");
        $qtt_sweatshirt2 = mysqli_query($con, "SELECT sum(quantity) as qttSweatshirt FROM history WHERE id_seller='$id_seller' and subcategory='sweat_shirt'");
       
        $totalChiffre_pillow = mysqli_query($con, "SELECT sum(price*quantity) as caPillow FROM history WHERE subcategory='pillow' and id_seller='$id_seller'");
        $totalChiffre_sheet = mysqli_query($con, "SELECT sum(price*quantity) as caSheet FROM history WHERE subcategory='sheet' and id_seller='$id_seller'");
        $totalChiffre_decoration = mysqli_query($con, "SELECT sum(price*quantity) as caDecoration FROM history WHERE subcategory='decoration' and id_seller='$id_seller'");
        $totalChiffre_tshirt = mysqli_query($con, "SELECT sum(price*quantity) as caTshirt FROM history WHERE subcategory='tshirt' and id_seller='$id_seller'");
        $totalChiffre_shoes = mysqli_query($con, "SELECT sum(price*quantity) as caShoes FROM history WHERE subcategory='shoes' and id_seller='$id_seller'");
        $totalChiffre_sweatshirt = mysqli_query($con, "SELECT sum(price*quantity) as caSweatshirt FROM history WHERE subcategory='sweat_shirt' and id_seller='$id_seller'");
      

        // Statistique %
        $query_stock_pillow = mysqli_query($con, "SELECT sum(quantity) as stock_pillow FROM item WHERE subcategory ='pillow' and id_seller='$id_seller'");
        $query_stock_decoration = mysqli_query($con, "SELECT sum(quantity) as stock_decoration FROM item WHERE subcategory ='decoration' and id_seller='$id_seller'");
        $query_stock_sheet = mysqli_query($con, "SELECT sum(quantity) as stock_sheet FROM item WHERE subcategory ='sheet' and id_seller='$id_seller'");
        $query_stock_tshirt = mysqli_query($con, "SELECT sum(quantity) as stock_tshirt FROM item WHERE subcategory ='tshirt' and id_seller='$id_seller'");
        $query_stock_shoes = mysqli_query($con, "SELECT sum(quantity) as stock_shoes FROM item WHERE subcategory ='shoes' and id_seller='$id_seller'");
        $query_stock_sweatshirt = mysqli_query($con, "SELECT sum(quantity) as stock_sweatshirt FROM item WHERE subcategory ='sweat_shirt' and id_seller='$id_seller'");
?>  

<!-- Define the personnal background -->
<?php if($row2 = mysqli_fetch_assoc($Seller)){
    $bg = $row2['background'];
    if($bg != null){?>
        <div class="genale_listeArticle position-relative" style="background-color:<?php echo $bg ?>!important;">
    <?php 
    }else{?>
        <div class="genale_listeArticle position-relative" >
<?php 
    }
}?>
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
            Statistique
        </p>

    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>
<div class="w-100">
    <div class="container mt-5">
        <div class="card w-100 border-0"  >
            <!--------------- stat turnover ---------------->
            <div class="card-header bg_blue2 text-light text-uppercase rounded-0 mt-4">
                <h5> Turnover </h5> 
            </div>
            <div class="row pt-3 pb-3">
                <div class="col-md-12">
                    <div class="card border-0 rounded-0 p-5 text-uppercase bg_grey1 shadow" >
                    <?php if($row3 = mysqli_fetch_assoc($ca_seller)){
                        $ca = $row3['CA'];
                    ?>
                       <h1 class="text-center color_blue1" style="font-size: 4rem;"><?php echo $ca ?> €</h1>                        
                    </div>
                    <?php 
                    }
                    ?>
                </div>
              
            </div>

             <!--------------- stat sale ----------------->
            <div class="card-header bg_blue2 text-light text-uppercase rounded-0 mt-5">
                <h5> Sales by Category</h5> 
            </div>
<!-------------{# Pillow #}--------->
            <div class="row pt-3 pb-3 ">
                <?php
                if($row4 = mysqli_fetch_assoc($qtt_pillow)){
                        $qttPillow = $row4['qttPillow'];
                        if($qttPillow != 0){ ?>
                            <div class="col-md-4">
                                <div class="card bg_blue1  text-light rounded-0 p-5  shadow-lg">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center" ><i class="fas fa-3x fa-home"></i> <a class=" text-decoration-none text-light"><small>PILLOW</small></a></p> 
                                        </div>
                                        <div class="col-md-8">
                                            <p class="f_right" >
                                                <?php 
                                                if($row_totalChiffre_pillow = mysqli_fetch_assoc($totalChiffre_pillow)){
                                                        $caPillow = $row_totalChiffre_pillow['caPillow'];
                                                        ?>
                                                   <a class="h3 f_right text-decoration-none text-light mb-0"><?php echo $caPillow ?> €</a><br> 
                                                    <?php  } ?>
                                                <a class="f_right text-decoration-none text-light"><small>Sell: <?php echo $qttPillow ?> </small></a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                }
                ?>
                <!-------------{# DECORATI0N #}--------->
                <?php
                if($row20 = mysqli_fetch_assoc($qtt_decoration)){
                        $qttDecoration = $row20['qttDecoration'];
                        if($qttDecoration != 0){ ?>
                            <div class="col-md-4">
                                <div class="card bg_blue1  text-light rounded-0 p-5  shadow-lg">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center" ><i class="fas fa-3x fa-home"></i> <a class=" text-decoration-none text-light"><small>DECORATION</small></a></p> 
                                        </div>
                                        <div class="col-md-8">
                                            <p class="f_right" >
                                                <?php 
                                                if($row_totalChiffre_Decoraiton = mysqli_fetch_assoc($totalChiffre_decoration)){
                                                        $caDecoration = $row_totalChiffre_Decoraiton['caDecoration'];
                                                        ?>
                                                   <a class="h3 f_right text-decoration-none text-light mb-0"><?php echo $caDecoration ?> €</a><br> 
                                                    <?php  } ?>
                                                <a class="f_right text-decoration-none text-light"><small>Sell: <?php echo $qttDecoration ?> </small></a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                }
                ?>
                <!-------------{# Sheet #}--------->


                <?php
                if($row6 = mysqli_fetch_assoc($qtt_sheet)){
                        $qttSheet = $row6['qttSheet'];
                        if($qttSheet != 0){ ?>
                            <div class="col-md-4">
                                <div class="card bg_blue1  text-light rounded-0 p-5  shadow-lg">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center" ><i class="fas fa-3x fa-home"></i> <a class=" text-decoration-none text-light"><br><small>SHEET</small></a></p> 
                                        </div>
                                        <div class="col-md-8">
                                            <p class="f_right" >
                                                <?php 
                                                if($row_totalChiffre_Sheet = mysqli_fetch_assoc($totalChiffre_sheet)){
                                                        $caSheet = $row_totalChiffre_Sheet['caSheet'];
                                                        ?>
                                                   <a class="h3 f_right text-decoration-none text-light mb-0"><?php echo $caSheet ?> €</a><br> 
                                                    <?php  } ?>
                                                <a class="f_right text-decoration-none text-light"><small>Sell: <?php echo $qttSheet ?> </small></a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                }
                ?>
            </div>

            <!-------------{# T-shirt #}--------->
            <div class="row pt-3 pb-3 ">
                <?php
                if($row14 = mysqli_fetch_assoc($qtt_tshirt)){
                        $qttTshirt = $row14['qttTshirt'];
                        if($qttTshirt != 0){ ?>
                            <div class="col-md-4">
                                <div class="card bg_blue1  text-light rounded-0 p-5  shadow-lg">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center" ><i class="fas fa-3x fa-tshirt"></i> <br><a class=" text-decoration-none text-light"><small>T-shirt</small></a></p> 
                                        </div>
                                        <div class="col-md-8">
                                            <p class="f_right" >
                                                <?php 
                                                if($row_totalChiffre_tshirt = mysqli_fetch_assoc($totalChiffre_tshirt)){
                                                        $cathisrt = $row_totalChiffre_tshirt['caTshirt'];
                                                        ?>
                                                   <a class="h3 f_right text-decoration-none text-light mb-0"><?php echo $cathisrt ?> €</a><br> 
                                                    <?php  } ?>
                                                <a class="f_right text-decoration-none text-light"><small>Sell: <?php echo $qttTshirt ?> </small></a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                }
                ?>
                <!-------------{# swaet-shirt #}--------->
                <?php
                if($row20 = mysqli_fetch_assoc($qtt_sweatshirt)){
                        $qttSweatshirt = $row20['qttSweatshirt'];
                        if($qttSweatshirt != 0){ ?>
                            <div class="col-md-4">
                                <div class="card bg_blue1  text-light rounded-0 p-5  shadow-lg">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center" ><i class="fas fa-3x fa-tshirt"></i> <a class=" text-decoration-none text-light"><small>Sweat-shirt</small></a></p> 
                                        </div>
                                        <div class="col-md-8">
                                            <p class="f_right" >
                                                <?php 
                                                if($row_totalChiffre_sweatshirt = mysqli_fetch_assoc($totalChiffre_sweatshirt)){
                                                        $caSweatshirt = $row_totalChiffre_sweatshirt['caSweatshirt'];
                                                        ?>
                                                   <a class="h3 f_right text-decoration-none text-light mb-0"><?php echo $caSweatshirt ?> €</a><br> 
                                                    <?php  } ?>
                                                <a class="f_right text-decoration-none text-light"><small>Sell: <?php echo $qttSweatshirt ?> </small></a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                }
                ?>
                <!-------------{# shoes #}--------->


                <?php
                if($row60 = mysqli_fetch_assoc($qtt_shoes)){
                        $qttShoes = $row60['qttShoes'];
                        if($qttShoes != 0){ ?>
                            <div class="col-md-4">
                                <div class="card bg_blue1  text-light rounded-0 p-5  shadow-lg">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center" ><i class="fas fa-3x fa-tshirt"></i> <a class=" text-decoration-none text-light"><br><small>Shoes</small></a></p> 
                                        </div>
                                        <div class="col-md-8">
                                            <p class="f_right" >
                                                <?php 
                                                if($row_totalChiffre_Shoes = mysqli_fetch_assoc($totalChiffre_shoes)){
                                                        $caShoes = $row_totalChiffre_Shoes['caShoes'];
                                                        ?>
                                                   <a class="h3 f_right text-decoration-none text-light mb-0"><?php echo $caShoes ?> €</a><br> 
                                                    <?php  } ?>
                                                <a class="f_right text-decoration-none text-light"><small>Sell: <?php echo $qttShoes ?> </small></a>
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                }
                ?>
            </div>
      
            <!--------------- stat sale by quantity ----------------->
            <div class="card-header bg_blue2 text-light text-uppercase rounded-0 mt-5">
                <h5> Statistique</h5> 
            </div>
            <div class="row pt-3 pb-3">
                <div class="col-md-12">
                    <div class="card border-0 rounded-0 text-uppercase shadow bg_grey1 " style="height: 550px!important">
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="m-2 pl-4 p-2  text-light" style="background-color:#5499C7">Pillow</span>
                            <span class="m-2 pl-4 p-2  text-light" style="background-color:#F39C12">Decoraton</span>
                            <span class="m-2 pl-4 p-2  text-light" style="background-color:#52BE80">Sheet</span>
                            <span class="m-2 pl-4 p-2  text-light" style="background-color:#A569BD">T-shirt</span>
                            <span class="m-2 pl-4 p-2  text-light" style="background-color:#B03A2E">Sweat-shirt</span>
                            <span class="m-2 pl-4 p-2  text-light" style="background-color:#935116">Shoes</span>
                        </div>
                    </div>
                
                    <div class="container h-100 pt-5" style="margin-left:15%;"> 
                   <!-- ##### Stat pillow #######-->
                   
                    <?php 
                    if($row_stock_pillow = mysqli_fetch_assoc($query_stock_pillow)){
                            $stockPillow = $row_stock_pillow['stock_pillow'];

                            if($row_qtt_Pillow2 = mysqli_fetch_assoc($qtt_pillow2)){
                                $qtt_pillow_vendu = $row_qtt_Pillow2['qttPillow'];

                            if( $stockPillow != 0){
                                 $stat_pillow = ($qtt_pillow_vendu * 100 ) / $stockPillow ;
                            }
                        }
                    ?>

                        <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo $stat_pillow ?>%; background-color:#5499C7">
                                <span class=""> <?php echo $stat_pillow ?> %</span>
                            </div>
                        </div>
                    <?php } ?>

                     <!-- ##### Stat decoration #######-->
                     <?php if($row_stock_decoration = mysqli_fetch_assoc($query_stock_decoration)){
                            $stockDecoration = $row_stock_decoration['stock_decoration'];

                            if($row_qtt_Decoration2 = mysqli_fetch_assoc($qtt_decoration2)){
                                $qtt_decoration_vendu = $row_qtt_Decoration2['qttDecoration'];
                            }
                            if(  $stockDecoration != 0){
                                $stat_decoration = ($qtt_decoration_vendu * 100 ) / $stockDecoration ;
                           }

                            
                    ?>

                        <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo $stat_decoration ?>%; background-color: #F39C12;">
                                <span class=""><?php echo $stat_decoration?> %</span>
                            </div>
                        </div>
                    <?php } ?>

                     <!-- ##### Stat sheet #######-->
                     <?php if($row_stock_sheet = mysqli_fetch_assoc($query_stock_sheet)){
                            $stockSheet = $row_stock_sheet['stock_sheet'];

                            if($row_qtt_Sheet2 = mysqli_fetch_assoc($qtt_sheet2)){
                                $qtt_sheet_vendu = $row_qtt_Sheet2['qttSheet'];
                            }
                            if( $stockSheet != 0){
                                $stat_sheet = ($qtt_sheet_vendu * 100 ) / $stockSheet ;
                           }
                           
                    ?>
                        <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo $stat_sheet ?>%; background-color: #52BE80;">
                                <span class=""><?php echo $stat_sheet ?> %</span>
                            </div>
                        </div>
                    <?php } ?>

                  <!-- ##### Stat Tshirt #######-->
                  <?php if($row_stock_tshirt = mysqli_fetch_assoc($query_stock_tshirt)){
                            $stockTshirt = $row_stock_tshirt['stock_tshirt'];

                            if($row_qtt_Tshirt2 = mysqli_fetch_assoc($qtt_tshirt2)){
                                $qtt_tshirt_vendu = $row_qtt_Tshirt2['qttTshirt'];
                            }
                            if( $stockTshirt != 0){
                                $stat_tshirt = ($qtt_tshirt_vendu * 100 ) / $stockTshirt ;
                           }
                           
                    ?>
                        <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo $stat_tshirt ?>%; background-color: #A569BD;">
                                <span class=""><?php echo $stat_tshirt ?> %</span>
                            </div>
                        </div>
                    <?php } ?>

                     <!-- ##### Stat Sweat-shirt #######-->
                  <?php if($row_stock_sweatshirt = mysqli_fetch_assoc($query_stock_sweatshirt)){
                            $stockSweatshirt = $row_stock_sweatshirt['stock_sweatshirt'];

                            if($row_qtt_Sweatshirt2 = mysqli_fetch_assoc($qtt_sweatshirt2)){
                                $qtt_sweatshirt_vendu = $row_qtt_Sweatshirt2['qttSweatshirt'];
                            }
                            if( $stockSweatshirt != 0){
                                $stat_sweatshirt = ($qtt_sweatshirt_vendu * 100 ) / $stockSweatshirt ;
                           }
                           
                    ?>
                        <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo $stat_sweatshirt ?>%; background-color: #B03A2E;">
                                <span class=""><?php echo $stat_sweatshirt ?> %</span>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- ##### Stat Shoes #######-->
                  <?php if($row_stock_shoes = mysqli_fetch_assoc($query_stock_shoes)){
                            $stockShoes = $row_stock_shoes['stock_shoes'];

                            if($row_qtt_Shoes2 = mysqli_fetch_assoc($qtt_shoes2)){
                                $qtt_shoes_vendu = $row_qtt_Shoes2['qttShoes'];
                            }
                            if( $stockShoes != 0){
                                $stat_shoes = ($qtt_shoes_vendu * 100 ) / $stockShoes ;
                           }
                           
                    ?>
                        <div class="progress progress-bar-vertical h-75 bg-light shadow-lg" style="width:120px">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo $stat_shoes ?>%; background-color: #935116;">
                                <span class=""><?php echo $stat_shoes ?> %</span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
                   
                </div>
                </div>
                <style type="text/css">
                    .container { margin-top: 10px; }

                    .progress-bar-vertical {
                    width: 20px;
                    min-height: 100px;
                    display: flex;
                    align-items: flex-end;
                    margin-right: 20px;
                    float: left;
                    }

                    .progress-bar-vertical .progress-bar {
                    width: 100%;
                    height: 0;
                    -webkit-transition: height 0.6s ease;
                    -o-transition: height 0.6s ease;
                    transition: height 0.6s ease;
                    }
                </style>
            </div>
        </div>
    </div>
</div>


</div>


<?php
    
}
    include("footer.php");
?>