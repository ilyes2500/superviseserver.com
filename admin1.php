<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    
      <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Inscription</title>
            <script>
                $("#pwd").click({
                    
                });
            </script>
    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    
    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Nouveau Serveur</title>

    
</head>
<body>
<br><br><br>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;
                        case 'password_length':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Taille mot de passe errone (Il faut 8 charactéres) 
                                </div>
                            <?php
                            break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Email exist déja 
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Ajouter des Admins </h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" id="pwd" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                          <label>Choisisez le Type :   </label>
                <select name="type" id="type" >
                                <option value="Admin">Admin</option>
                                <option value="SuperAdmin">SuperAdmin</option>
                     
                </select>
                <br> <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                    
                </div>   
               
               
            </form>
            
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
        <script>
    if((document.getElementsByName(email)&&(document.getElementsByName(password)))="")
            {
     $(function() 
     {
     $('#submit').click(function()
     {
     $(this).attr("disabled", "disabled");
     });
     });}
        else{ $(function() 
     {
     $('#submit').click(function()
     {
     $(this).attr("enabled", "enabled");
     });
     });}
    </script>
     <script>
     function validate()
{
 var email=$("#email").val();
 var pass=$("#password").val();
 
 var email_regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])([0-9])+([!,%,&,@,#,$,^,*,?,_,~])/;
 var password_regex2=/([0-9])/;
 var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;

 if(email_regex.test(email)==false)
 {
  alert("Please Enter Correct Email");
  return false; 
 }
 else if(pass.length<8 || password_regex1.test(pass)==false || password_regex2.test(pass)==false || password_regex3.test(pass)==false)
 {
  alert("Please Enter Strong Password");
  return false;
 }
 else
 {
  return true;
 }
}
</script>
    



    

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">S Server.</h2>
                    
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
<br><br><br>




        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: 6E2FEB;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
            body {color: 6E2FEB;}
        </style>
        
        <!--**********************************
            Chat box start
        ***********************************-->
        
        <!--**********************************
            Chat box End
        ***********************************-->
        
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Ajouter des Admins
                            </div>
                        </div>
                       
                        <div>
                        <a href="page-error-404.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a></div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    
                    
                                       <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-text">Etat Serveurs</span>
                        </a>
                         <ul aria-expanded="false">
                            <li><a href="callindex1.php">Serveur MySQL</a></li>
                            <li><a href="callindex2.php">Serveur FileZilla</a></li>
                            <li><a href="callindex3.php">Serveur Google</a></li>
                            <li><a href="callindex4.php">Serveur TomCat</a></li>
                        </ul>
                       
                    </li>
                  
                                       <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Nouveau Serveur</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="nouvserv.html">Etat d'un Nouveau Serveur</a></li>
                        </ul>
                    </li>

                           <li>
  <a id ="zz" class="has-arrow" href="javascript:void()" aria-expanded="false">
    <i class="fas fa-user-check"></i>
    <span class="nav-text">Gestion Admins</span>
  </a>
  <ul aria-expanded="false">
    <!-- Utilisez une condition pour afficher les éléments uniquement si a = 1 -->
    <li><a href="admin1.php" id="ajouterAdmins">Ajouter des Admins</a></li>
    <li><a href="admin2.html" id="historiqueConnexion">Historique de Connexion</a></li>
    <li><a href="admin3.html" id="listeAdmins">La liste des Admins</a></li>
  </ul>
</li>


                     <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-info-circle"></i>
                            <span class="nav-text">Help</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="help.html">A propos</a></li>
                            
                        </ul>
                    </li>

                   
                   
                </ul>
                
                
                <div class="copyright">
                    <p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        
        <!--**********************************
            Content body start
        ***********************************-->
     
        <!--**********************************
            Content body end
        ***********************************-->
        


        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->
        
        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>
    
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    
    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="js/dashboard/dashboard-1.js"></script>
    
    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script>
        function cardsCenter()
        {
            
            /*  testimonial one function by = owl.carousel.js */
            
    
            
            jQuery('.card-slider').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive:{
                    0:{
                        items:1
                    },
                    576:{
                        items:1
                    },  
                    800:{
                        items:1
                    },          
                    991:{
                        items:1
                    },
                    1200:{
                        items:1
                    },
                    1600:{
                        items:1
                    }
                }
            })
        }
        
        jQuery(window).on('load',function(){
            setTimeout(function(){
                cardsCenter();
            }, 1000); 
        });
        
    </script>

</body>
</html>