<?php

    include("includes/header.php")

?>
   
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Acceuil</a>
                   </li>
                   <li>
                       Tours
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9">
               <div class="row" id="productMain">
                   <div class="col-sm-6">
                       <div id="mainImage">
                          <!-- Tao chuyen canh slidebar -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <!-- Tao dau cham o duoi anh -->
                               <ol class="carousel-indicators">
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="2" class="active" ></li>
                               </ol>
                               <!--- Slide Bruxelles -->
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/product-1-a.jpg" alt="Product-1-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/product-1-b.jpg" alt="Product-1-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/product-1-c.jpg" alt="Product-1-c"></center>
                                   </div>
                               </div>
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a>
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                               </a>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-sm-6">
                       <div class="box">
                           <h1 class="text-center">Bruxelles - Bruges</h1>
                           <form action="details.php" class="form-horizontal" method="post">
                               <div class="form-group">
                                   <label for="" class="col-md-5 control-label">Nombre de personnes</label>
                                   <div class="col-md-7">
                                          <select name="nombre" id="" class="form-control">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>Famille Offre</option>
                                         </select>
                                    </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-5 control-label">Mois de départ</label>
                                   <div class="col-md-7">
                                          <select name="mois" id="" class="form-control">
                                           <option>Janvier</option>
                                           <option>Fevrier</option>
                                           <option>Mars</option>
                                           <option>Avril</option>
                                           <option>Mai</option>
                                           <option>Juin</option>
                                           <option>Juillet</option>
                                           <option>Août</option>
                                           <option>Septembre</option>
                                           <option>Octobre</option>
                                           <option>Novembre</option>
                                           <option>Décembre</option>
                                         </select>
                                    </div>
                               </div>
                               <p class="price">399€</p>
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Ajourter au panier</button></p>
                           </form>
                       </div>
                       
                       <div class="row" id="thumbs">
                          
                           <div class="col-xs-4">
                              <!--- 3 anh o duoi -->
                               <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                   <img src="admin_area/product_images/product-1-a.jpg" alt="Product-1" class="img-responsive">
                               </a>
                           </div>
                           
                           <div class="col-xs-4">
                               <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                   <img src="admin_area/product_images/product-1-b.jpg" alt="Product-2" class="img-responsive">
                               </a>
                           </div>
                           
                           <div class="col-xs-4">
                               <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                   <img src="admin_area/product_images/product-1-c.jpg" alt="Product-3" class="img-responsive">
                               </a>
                           </div>
                           
                       </div>
                   </div>
               </div>
               <!-- Thong tin ve tours -->
               <div class="box" id="details">
                       <h4>Plan prévu</h4>
                       <p>
                           dfghujkfghjkfghjk
                       </p>
                       <h4>Les monuments touristiques:</h4>
                       <ul>
                           <li>1</li>
                           <li>2</li>
                           <li>3</li>
                       </ul>
                       <hr>
               </div>
               <div id="row same-heigh-row">
                   <div class="col-md-3 col-sm-6">
                       <div class="box same-height headline">
                           <h3 class="text-center">Vous aimerez aussi</h3>
                       </div>
                   </div>
                   
                   
                   <div class="col-md-3 col-sm-6 center-responsive">
                       <div class="product same-height">
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/productad-1.jpg" alt="Product 5">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Venice</a></h3>
                                <p class="price">A partir de 699€</p>
                            </div>
                       </div>
                   </div>
                   
                   <div class="col-md-3 col-sm-6 center-responsive">
                       <div class="product same-height">
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/productad-2.jpg" alt="Product 5">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Marseille</a></h3>
                                <p class="price">A partir de 199€</p>
                            </div>
                       </div>
                   </div>
                   
                   <div class="col-md-3 col-sm-6 center-responsive">
                       <div class="product same-height">
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/productad-3.jpg" alt="Product 5">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Italie</a></h3>
                                <p class="price">A partir de 199€</p>
                            </div>
                       </div>
                   </div>
                   
                   
               </div>
           </div>
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>