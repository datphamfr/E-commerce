<?php
    $active='Contact';
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
                       Contacts
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
                               Nous contacter
                           </h2>
                           <p>L'équipe Service client Dat'sTourisme se fera un plaisir de vous aider et de répondre à vos appels. </p>
                           <p class="text-muted"><strong>Du lundi au vendredi de 09:00 à 19:00</strong></p>   
                           <p class="text-muted">Le service est suspendu <strong>les 25 et 26 décembre et le 1er janvier</strong>. </p>
                           <p class="text-muted">Note: Les appels n'ayant pas été passés depuis une ligne fixe nationale peuvent donner lieu à des frais supplémentaires.</p>
                           
                       </center>
                       <form action="contact.php" method="post">
                           <div class="form-group">
                               
                                   <label>Votre nom et prénom:</label>
                                   <input type="text" class="form-control" name="name" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                                   <label>Email</label>
                                   <input type="text" class="form-control" name="email" required>
                             
                           </div>
                           <div class="form-group">
                              
                                   <label>Sujet</label>
                                   <input type="text" class="form-control" name="subject" required>
                            
                           </div>
                           <div class="form-group">
                               
                                   <label>Message</label>
                                   <textarea name="message" class="form-control"></textarea>
                             
                           </div>
                           <div class="text-center">
                               <button type="submit" name="submit" class="btn btn-primary">
                                   <i class="fa fa-user-md"></i> Envoyer la message
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