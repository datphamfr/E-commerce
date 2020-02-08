<?php
include("db.php");
include("functions/functions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DatTourisme</title>
    <!--Noi file voi cac thu vien co san
    -->
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Bienvenue</a>
               <a href="checkout.php">Offre Spéciale | Aujourd'hui seulement </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Inscrivez-vous</a>
                   </li>
                   <li>
                       <a href="checkout.php">Mon Compte</a>
                   </li>
                   <li>
                       <a href="cart.php">Mon Panier</a>
                   </li>
                   <li>
                       <a href="checkout.php">Se Connecter</a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="image/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="image/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <!-- Tao nut search va home cho giao dien dien thoai-->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <!-- Tao thanh nav-bả -->
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="<?php if($active=='Acceuil') echo "active"; ?>">
                           <a href="index.php">Acceuil</a>
                       </li>
                       <li class="<?php if($active=='Tours') echo "active"; ?>">
                           <a href="shop.php">Tours</a>
                       </li>
                       <li class="<?php if($active=='Profil') echo "active"; ?>">
                           <a href="customer/my_account.php">Mon Profil</a>
                       </li>
                      <li class="<?php if($active=='Panier') echo "active"; ?>">
                           <a href="cart.php">Mon Panier</a>
                       </li>
                      <li class="<?php if($active=='Contact') echo "active"; ?>">
                           <a href="contact.php">Contactez-nous</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span> Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               
               <!-- Hien thi thanh tim kiem khi nhan nut tim -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
  <!--- 
   <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                
                                    <a href='details.php?pro_id=$pro_id'>
                                    
                                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                                    </a>
                                    
                                    <div class='text'>
                                    
                                        <h3>
                                        
                                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                            
                                        </h3>
                                        
                                        <p class='price'>
                                        
                                            $pro_price
                                        
                                        </p>
                                        
                                        <p class='buttons '>
                                        
                                             <a class='btn btn-default' href='details.php?pro_id=$pro_id'> 
                                                    En savoir plus
                                             </a>
                                             
                                             <a class='btn btn-default' href='details.php?pro_id=$pro_id'> 
                                                    <i class='fa fa-shopping-cart'></i> Ajourter au panier
                                             </a>
                                        
                                        </p>
                                    
                                    </div>
                                    
                                </div>
</div>
   

  <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                
                                    <a href='details.php?pro_id=$pro_id'>
                                    
                                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                                    </a>
                                    
                                    <div class='text'>
                                    
                                        <h3>
                                        
                                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                            
                                        </h3>
                                        
                                        <p class='price'>
                                        
                                            $pro_price
                                        
                                        </p>
                                        
                                        <p class='button'>
                                        
                                             <a class='btn btn-default' href='details.php?pro_id=$pro_id'> 
                                                    En savoir plus
                                             </a>
                                             
                                             <a class='btn btn-default' href='details.php?pro_id=$pro_id'> 
                                                    <i class='fa fa-shopping-cart'></i> Ajourter au panier
                                             </a>
                                        
                                        </p>
                                    
                                    </div>
                                    
                                </div>
    </div>
    -->
    </body>
</html>