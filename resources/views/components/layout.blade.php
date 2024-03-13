
<!DOCTYPE html>
<html lang="br">
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title></title>

		<!-- Favicon -->
        <link rel="shortcut icon" href=" {{ asset('logo/favicon.png') }} ">
	
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }} ">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }} ">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href=" {{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }} ">
		<link rel="stylesheet" href=" {{ asset('assets/plugins/fontawesome/css/all.min.css') }} ">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }} ">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
		<script src="https://kit.fontawesome.com/e91000bbff.js" crossorigin="anonymous"></script>



		</head>
		
        <body>
		
		<!-- Main Wrapper -->
        <div class="main-wrapper">
          <div class="header">
			
            <!-- Logo -->
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="{{ asset('logo/logo-aleatorio.png') }}" alt="Logo">
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="{{ asset('logo/logo-aleatorio.png') }}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            
            <!-- Search Bar -->
            <div class="top-nav-search">
            <h6 style="padding-top:15px;"></h6> 
            </div>
            <!-- /Search Bar -->
            
            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu">
        
            <li  class="nav-item dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img width="50%" src="{{ asset('img/logos/empresa2.png') }}" alt="">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href=""> <img width="20%" src="{{ asset('img/logos/empresa2.png') }}" alt="">Administrador</a>
                    </div>
                </li>
             
           
                
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('logo/user.png') }}" width="31" alt="Ryan Taylor">
                            <div class="user-text">
                                <h6>Nome do Usuário</h6>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('logo/logo-aleatorio.png') }}" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Nome do Usuario</h6>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                                           
                        <a class="dropdown-item" href="?sair=1">Sair</a>
                    </div>
                </li>
                <!-- /User Menu -->
                
            </ul>
            <!-- /Header Right Menu -->
            
        </div>

            
    <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>administrador</span>
							</li>

							<li class="submenu">
								<a href="#"><i class="feather-grid"></i> <span>Cadastros</span> <span class="menu-arrow"></span></a>
								<ul>
								<li><a href="/alunos/cadastrar">Alunos</a></li> 	 
                                <li><a href="/turmas/cadastrar">Turmas</a></li> 	
			
					
								</ul>
							</li> 

				

							<li class="submenu">
								<a href="#"><i class="feather-grid"></i> <span>Listar</span> <span class="menu-arrow"></span></a>
								<ul>
								<li><a href="/alunos">Alunos</a></li> 	 
								<li><a href="/turmas">Turmas</a></li> 	 
						
					
								</ul>
							</li>  
						
						</ul>
					</div>
                </div>
    </div>


   {{ $slot }}


       			
</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		
		<!-- Feather Icon JS -->
		<script src="{{ asset('assets/js/feather.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Datatables JS -->
		<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js') }}"></script>

		</body>
	</html>
