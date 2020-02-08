<?php
    $active='Panier';
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
                       Mon Panier
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           <div id="cart" class="col-md-9">
               <div class="box">
                   <form action="cart.php" methode="post" enctype="multipart/form-data">
                       <h1>Mon panier</h1>
                       <p class="text-muted">Voilà, vous avez choisi: </p>
                       <div class="table-reponsive">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th colspan="2">Tours</th>
                                       <th>Nombre de personnes</th>
                                       <th>Tatif par personne</th>
                                       <th colspan="1">Supprimer</th>
                                       <th colspan="2">Sous-total</th>
                                   </tr>
                               </thead>
                               
                               <tbody>
                                   <tr>
                                       <td>
                                           <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                       </td>
                                       
                                       <td>
                                           <a href="#">Bruxelles - Bruges</a>
                                       </td>
                                       <td>
                                           2
                                       </td>
                                       <td>
                                           399€
                                       </td>
                                       <td>
                                           <input type="checkbox" name="remove[]">
                                       </td>
                                       <td>
                                           798€
                                       </td>
                                   </tr>
                               </tbody>
                               
                               <tbody>
                                   <tr>
                                       <td>
                                           <img class="img-responsive" src="admin_area/product_images/add1.gif" alt="Product anniversaire">
                                       </td>
                                       
                                       <td>
                                           <a href="#">Anniversaire option</a>
                                       </td>
                                       <td>
                                           1
                                       </td>
                                       <td>
                                           49€
                                       </td>
                                       <td>
                                           <input type="checkbox" name="remove[]">
                                       </td>
                                       <td>
                                           49€
                                       </td>
                                   </tr>
                               </tbody>
                               <tfoot>
                                   <tr>
                                       <th colspan="5">Sous-Total</th>
                                       <th colspan="2">847€</th>
                                   </tr>
                               </tfoot>
                           </table>
                       </div>
                       <div class="box-footer">
                           <div class="pull-left">
                               <a href="index.php" class="btn btn-default">
                                   <i class="fa fa-chevron-left"></i> Voir les autres offres
                               </a>
                           </div>
                           
                           <div class="pull-right">
                               <button type="submit" name="update" Value="Renouveller Mon Panier" class="btn btn-default">
                                   <i class="fa fa-refresh"></i> Renouveller Mon Panier
                               </button>
                               <a href="checkout.php" class="btn btn-primary">
                                   Valider Mon Panier <i class="fa fa-chevron-right"></i>
                               </a>
                           </div>
                       </div>
                   </form>
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
           <div class="col-md-3">
               <div id="order-summary" class="box">
                   <div class="box-header">
                       <h3>Votre commande</h3>
                   </div>
                   <p class="text-muted">
                       TVA compris
                   </p>
                   <div class="table-responsive">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Sous-Total</td>
                                   <th>847€</th>
                               </tr>
                               <tr>
                                   <td>TVA</td>
                                   <td>84.7€</td>
                               </tr>
                               <tr>
                                   <td>Service</td>
                                   <td>10€</td>
                               </tr>
                               <tr class="total">
                                   <td>Total</td>
                                   <td>941.7€</td>
                               </tr>
                           </tbody>
                       </table>
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