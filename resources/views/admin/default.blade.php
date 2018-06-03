<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paye Vend Tout Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href=" {{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('css/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- datatable style -->
    <link href="{{ asset('css/dataTables.bootstrap.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><b>P</b>aye<b>V</b>end<b>T</b>out</a> 
            </div>
  <div style="color: white;
        padding: 15px 50px 5px 50px;
        float: right;
        font-size: 16px;"> Derniere Connexion : 30 janvier 2018 &nbsp; <a href="{{ route('logout') }}" class="btn btn-danger square-btn-adjust"  
        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Se Deconnecter</a> </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{ asset('img/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="#"><i class="fa fa-chart-line fa-3x"></i> {{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Mes Taches</a>
                        <ul class="nav nav-second-level">
                        <li>
                                <a href="#">Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('category') }}">Ajouter Categorie</a>
                                </li>
                                <li>
                                    <a href="{{ route('showCategory') }}">Voir Categorie</a>
                                </li>
                            </ul>
                        </li>
                            <li>
                                <a href="#">Options<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ route('option') }}">Ajouter Caracteristique</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('showOption') }}">Voir Caracteristique</a>
                                    </li>
                                </ul>

                               <li>
                                <a href="#">Classifier Les Annonces<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ route('classifier') }}">Creer Une Classification</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('showClassifier') }}">Voir Les Classification</a>
                                    </li>
                                

                                </ul>
                               </li>
                                   <li>
                                <a href="#">Gerer La Localisation<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="{{ route('country.create') }}">Ajouter Un Pays</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('country.index') }}">Voir Les Pays</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('city.create') }}">Ajouter Une Ville</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('city.index') }}">Voir Les Villes</a>
                                    </li>
                                

                                </ul>
                               </li>
                            </li>
                       </ul>
                      </li> 
                     <li>
                        <a  href=""><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-qrcode fa-3x"></i> Tabs/Panels</a>
                    </li>
						   <li  >
                        <a   href=""><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href=""><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href=""><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                     
                  <li  >
                        <a  href=""><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav> 
            <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Mon Tableau De Bord</h2>   
                        <h5> Bienvenue <b>{{ Auth::user()->name }}</b> , content de vous revoir. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 

        @yield('content')



 <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset ('js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/app.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('js/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{ asset('js/raphael-2.1.0.min.js')}}"></script>
    <script src="{{ asset('js/morris.js')}}"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.js')}}"></script>
    
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js')}}"></script>
    
   
</body>
</html>