<?php
    session_start();    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>goFISHINGshop</title>
        <!-- STYLE CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mycssVegas.css" rel="stylesheet">
        <link href="css/mycss.css" rel="stylesheet">
        <link href="vendor/vegas/vegas.min.css" rel="stylesheet">
        <!-- IKONY -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>
    <body>
        
        <!--  ==========    PASEK NAWIGACJI   ==========  -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><i class="fas fa-hands-helping"></i>&nbsp;&nbsp;goFISHINGshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                         <?php
                         if ((isset($_SESSION['S_UPRAWNIENIA'])) && (!strcmp($_SESSION['S_UPRAWNIENIA'], "admin" ))){
                            echo '<li class="nav-item"><a class="nav-link" href="adminphp/zarzadzaj_pracownikiem.php"><i class="fas fa-gavel"></i>&nbsp;&nbsp;Admin Panel</a></li>';
                         }
                         ?> 
                         <?php
                         if ((isset($_SESSION['S_UPRAWNIENIA'])) && (!strcmp($_SESSION['S_UPRAWNIENIA'], "admin" ) OR !strcmp($_SESSION['S_UPRAWNIENIA'], "pracownik" ))){
                            echo '<li class="nav-item"><a class="nav-link" href="pracownikphp/zarzadzaj_produktem.php"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Pracownik Panel</a></li>';
                         }
                         ?>   
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Strona Główna
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php if(isset($_SESSION['zalogowany'])){ ?>
                                <li class="nav-item">
                                        <a class="nav-link" href="sklep.php"><i class="fas fa-shopping-basket"></i></i>&nbsp;&nbsp;Sklep</a>
                                    </li>
                                    <li class="nav-item">
                                        <?php echo '<a class="nav-link'; if($_SESSION['S_ILEKOSZYK'] > 0) echo ' koszykactive"'; else echo '"'; ?>href="koszyk.php"><i class="fas fa-shopping-cart "></i>&nbsp;&nbsp;Koszyk (<?php echo $_SESSION['S_ILEKOSZYK']; ?>)</a>
 
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="zamowienie.php"><i class="fas fa-history"></i>&nbsp;&nbsp;Zamówienia</a>
                                    </li>

                        <?php } ?>  
                                    <li class="nav-item">
                                        <a class="nav-link" href="zalogujsie.php"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login</a>
                                    </li>
                             
                        <?php if(!isset($_SESSION['zalogowany'])){ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="reg.php"><i class="fa fa-user"></i>&nbsp;&nbsp;Rejestracja</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="vegasSlide"></div> 
        <!-- JavaScripts -->     
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/vegas/vegas.min.js"></script>        
        <script type="text/javascript">
            $("#vegasSlide").vegas({
            slides: [
                { src: "img/slider/veg1.jpg" },
                { src: "img/slider/veg2.jpg" },
                { src: "img/slider/veg3.jpg" },
                { src: "img/slider/veg4.jpg" }
                ],
                overlay: 'vendor/vegas/overlays/01.png'
            });
        </script>
    </body>
</html>