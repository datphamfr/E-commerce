<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <center>
            <img class="img-responsive" src="customer_images/acc1.jpg" alt="Profile">
        </center>
        <br/>
        <h3 align="center" class="panel-title">
            Nom: DatPham
        </h3>
    </div>
    
    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li class="<?php if(isset($_GET['my_orders'])){echo"active";}?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> Mes commandes
                </a>
            </li>
            
             <li class="<?php if(isset($_GET['pay_offline'])){echo"active";}?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Paiement offline
                </a>
            </li>
            
            <li class="<?php if(isset($_GET['edit_account'])){echo"active";}?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Modifier mon profil
                </a>
            </li>
            
             <li class="<?php if(isset($_GET['change_pass'])){echo"active";}?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Modifier mon mot de pass
                </a>
            </li>
        
            
            <li class="<?php if(isset($_GET['delete_account'])){echo"active";}?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Supprimer mon compte
                </a>
            </li>
            
             <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i> Se déconnecter
                </a>
            
            
            
          
        </ul>
    </div>
</div>
