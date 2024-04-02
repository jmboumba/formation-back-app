<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Home</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->

         <!-- end header section -->
            <header>
                @include('header')
            </header>
         <!-- slider section -->

         <div>
            <div style="float:left; margin-top: 7%; margin-left: 10%; display:inline">
                    <p style="color:#ff5733; font-size:40px; margin-bottom: 0px">Continuez à apprendre </p>
                    <p style="color:#ff5733; font-size:40px;">à votre rythme </p>
                    <p style="font-weight:bold">Des formations dans divers domaines, et de divers type.</p>
                    <p style="font-weight:bold">Vous pourrez comparer les différentes formations disponibles,</p>
                    <p style="font-weight:bold">afin de trouver celle qui vous correspond le mieux.</p>

                    <center>
                    <a class="btn btn btn-primary" id='logincss' href="{{ route('login') }}">S'identifier</a>
                    </center>
            </div>
            <div style="display:inline; margin-top: 12%; float:right; margin-right: 10%;">
                <img style="height: 400px; width: 400px;" src="data:image/jpeg;base64,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" alt="">
                
            </div>
         </div>

         <div style="background-color:#dde0e3; float:left; margin-bottom:50px">
            <br><br>
            <p style="margin-left:10%; font-size:30px">Explorez les formations</p><br><br> 
            <div class="container">
                <nav style="float:left; margin-left:6%; margin-bottom: 20px" class="navbar navbar-expand-lg custom_nav-container ">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li style="margin-right:30px" class="nav-item active">
                            <a href="">Toutes les formations</a>
                            </li> 
                            <li style="margin-right:30px" class="nav-item active">
                            <a href="">Catégorie 1</a>
                            </li> 
                            <li  class="nav-item active">
                            <a href="">Catégorie 2</a>
                            </li> 
                        </ul>
                    </div>
                </nav>
            </div>
         </div>

         <!-- Catégories et Formations --> 
         <div style="margin-left:10%; margin-bottom: 200px; width: 400px;">
            <p style="font-weight:bold">FORMATIONS POPULAIRES RECENTES</p><br>
            <div class="container">
                <nav style="float:left;margin-bottom: 20px" class="navbar navbar-expand-lg custom_nav-container ">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li style="margin-right:30px" class="nav-item active">
                                <a href="">
                                    <div style="display:inline">
                                    <div style="border: 1px solid black; width: 250px; height: 100px; background-color: gray">
                                        <p>Hello</p>
                                    </div>
                                    <p>Cours</p>
                                    <p style="color:black; font-weight: bold">Power BI : Analyse de données avec DAX</p>
                                    <p>100 000 vues</p>
                                    </div>
                                </a>
                            </li> 
                            <li style="margin-right:30px" class="nav-item active">
                                <a href="">
                                    <div style="display:inline">
                                    <div style="border: 1px solid black; width: 250px; height: 100px; background-color: gray">
                                        <p>Hello</p>
                                    </div>
                                    <p>Cours</p>
                                    <p style="color:black; font-weight: bold">Power BI : Analyse de données avec DAX</p>
                                    <p>100 000 vues</p>
                                    </div>
                                </a>
                            </li> 
                            <li style="margin-right:30px" class="nav-item active">
                                <a href="">
                                    <div style="display:inline">
                                    <div style="border: 1px solid black; width: 250px; height: 100px; background-color: gray">
                                        <p>Hello</p>
                                    </div>
                                    <p>Cours</p>
                                    <p style="color:black; font-weight: bold">Power BI : Analyse de données avec DAX</p>
                                    <p>100 000 vues</p>
                                    </div>
                                </a>
                            </li> 
                        </ul>
                    </div>
                </nav>
            </div>
            
         </div>

         <!-- sujets populaires -->
         <div>
            <div style="float:left; margin-left: 10%; display:inline">
                    <p style="color:#ff5733; font-size:40px; margin-bottom: 0px">Continuez à apprendre </p>
                    <p style="color:#ff5733; font-size:40px;">à votre rythme </p>
                    <p style="font-weight:bold">Des formations dans divers domaines, et de divers type.</p>
                    <p style="font-weight:bold">Vous pourrez comparer les différentes formations disponibles,</p>
                    <p style="font-weight:bold">afin de trouver celle qui vous correspond le mieux.</p>

                    <center>
                        <a class="btn btn btn-primary" id='logincss' href="{{ route('login') }}">S'identifier</a>
                    </center>
            </div>
            <div style="display:inline; float:right; margin-right: 30%; margin-bottom: 50%">
                <p style="font-weight:bold">SUJETS POPULAIRES</p><br><br>
                <p>Liste des sujets populaires</p>
            </div>
         </div>
         

         
           
         <!-- end slider section -->
      </div>
      <!-- why section -->
       
      <!-- end why section -->
      
      <!-- arrival section -->
        
      <!-- end arrival section -->
      
      <!-- product section -->
     
      <!-- end product section -->

      <!-- subscribe section -->
       
      <!-- end subscribe section -->

      <!-- client section -->
      
      <!-- end client section -->

      <!-- footer start -->
       
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>