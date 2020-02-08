<?php
    $active='Profil';
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
                       S'inscrire
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
           
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
            <div class="col-md-9">
               <div class="box">
                   <div class="box-header">
                       <center>
                           <h2>
                               Nouveau sur notre site? Bienvenue!
                           </h2>
                           
                       </center>
                       <form action="customer_register.php" method="post" enctype="multipart/form-data">
                          
                           <div class="form-group">
                               
                                   <label>Votre nom et prénom:</label>
                                   <input type="text" class="form-control" name="c_name" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre email:</label>
                                   <input type="text" class="form-control" name="c_email" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre mot de passe:</label>
                                   <input type="password" class="form-control" name="c_pass" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre pays:</label>
                                   <input type="text" class="form-control" name="c_country" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre ville:</label>
                                   <input type="text" class="form-control" name="c_city" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre numéro de portable:</label>
                                   <input type="text" class="form-control" name="c_contact" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre adresse:</label>
                                   <input type="text" class="form-control" name="c_address" required>
                           </div>
                           
                           <div class="form-group">
                                   <label>Votre photo de profil:</label>
                                   <input type="file" class="form-control form-height-custom" name="c_image" required>
                           </div>
                          
                           <div class="text-center">
                               <button type="submit" name="register" class="btn btn-primary">
                                   <i class="fa fa-user-md"></i> CREER MON COMPTE
                               </button>
                           </div>
                       </form>
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