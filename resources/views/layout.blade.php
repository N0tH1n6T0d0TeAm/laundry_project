<!-- 
                                                     ..                                     
                                                                                    ,o""""o                                   
                                                                                ,o$"     o                                   
                                                                            ,o$$$                                           
                                                                            ,o$$$'                                            
                                                                        ,o$"o$'                                             
                                                                        ,o$$"$"'                                              
                                                                    ,o$"$o"$"'                                               
                                                                ,oo$"$"$"$"$$`                      ,oooo$$$$$$$$oooooo.    
                                                                ,o$$$"$"$"$"$"$"o$`..             ,$o$"$$"$"'            `oo.o 
                                                            ,oo$$$o"$"$"$"$  $"$$$"$`o        ,o$$"o$$$o$'                 `o 
                                                        ,o$"$"$o$"$"$"$  $"$$o$$o $$o`o   ,$$$$$o$"$$o'                    $ 
                                                        ,o"$$"'  `$"$o$" o$o$o"  $$$o$o$oo"$$$o$"$$"$o"'                     $ 
                                                    ,o$"'        `"$ "$$o$$" $"$o$o$$"$o$$o$o$o"$"$"`""o                   '  
                                                ,o$'          o$ `"$"$o "$o$$o$$$"$$$o"$o$$o"$$$    `$$                     
                                                ,o'           (     `" o$"$o"$o$$$"$o$"$"$o$"$$"$ooo|  ``                    
                                                $"$             `    (   `"o$$"$o$o$$ "o$o"   $o$o"$"$    )                   
                                                (  `                   `    `o$"$$o$" "o$$     "o /|"$o"                       
                                                `                           `$o$$$$"" o$      "o$\|"$o'                       
                                                    Art Name                 `$o"$"$ $ "       `"$"$o$                        
                                                    -Naga Butuh-            "$$"$$ "oo         ,$""$                        
                                                                            $"$o$$""o"          ,o$"$                       
                                                                            $$"$$"$ "o           `,",                       
                                                                    ,oo$oo$$$$$$"$o$$$ ""o                                    
                                                                ,o$$"o"o$o$$o$$$"$o$$oo"oo                                   
                                                                ,$"oo"$$$$o$$$$"$$$o"o$o"o"$o o                                
                                                            ,$$$""$$o$,      `$$$$"$$$o""$o $o                              
                                                            $o$o$"$,          `$o$"$o$o"$$o$ $$o                            
                                                            $$$o"o$$           ,$$$$o$$o"$"$$ $o$$oo      ,                  
                                                            "$o$$$ $`.        ,"$$o$"o$""$$$$ `"$o$$oo    `o                 
                                                            `$o$o$"$o$o`.  ,.$$"$o$$"$$"o$$$$   `$o$$ooo    $$ooooooo        
                                                                `$o$"$o"$"$$"$$"$"$$o$$o"$$o"        `"$o$o            `"o     
                                                                `$$"$"$o$$o$"$$"$ $$$  $ "           `$"$o            `o    
                                                                    `$$"o$o"$o"$o$ "  o $$$o            `$$"o          ,$    
                                                                        (" ""$"""     o"" "o$o             `$$ooo     ,o$$    
                                                                            $$"""o   (   "$o$$$"o            `$o$$$o$"$'     
                                                                                ) ) )           )  ) )   

 -->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" />
  <title>Launchdry</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="shortcut icon" type="x-icon" href="https://media.istockphoto.com/id/931246294/id/vektor/lencana-lambang-logo-laundry.jpg?s=612x612&w=0&k=20&c=tXE-E7LocWQnYW5jG3tpCAMxccN7S2zv2Ko0hQU1LGA=">


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <style>
    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: black; 
      transition: opacity 0.75s, visibilty 0.75s;
    }

    .loader-hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader::after{
      content: "";
      width: 75px;
      height: 75px;
      border: 15px solid #dddddd;
      border-top-color: blue;
      border-radius: 50%;
      animation: loading 0.75s ease infinite;
    }

    @keyframes loading {
      from {
        transform: rotate(0turn);
      }
      to{
        transform: rotate(1turn);
      }
    }

    .tombol{
        background: #1985ff; 
        height: 40px; 
        color: white; 
        border: none; 
        border-radius: 4px;
    }

    .tombol:hover{
        background: #1985ffb0;
    }

    .button{
        transition: all 0.3s ease-out;
    }
    .overlay{
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.8);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }

    .overlay:target{
        visibility: visible;
        opacity: 1;
    }
    .close{
      margin-top: 2px; 
      font-size: 30px;     
      border-radius: 10px;
      width: 20px;
      text-align: center;
    } 
    .form-control{
        width: 47rem;
        margin: auto;
    }

    table {
  border-collapse: collapse;
  width: 80%;
}

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #D6EEEE;
    }
  </style>

  <script>
    window.addEventListener("load", ()=> {
      const loader = document.querySelector(".loader");

      loader.classList.add("loader-hidden");

      loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
      })
    });
  </script>
</head>

<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right " >
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
       
         
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item">
       
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #363534">
    <!-- Brand Logo -->
    <a align="center" href="#alert" class="brand-link" style="cursor: pointer">
      <span class="brand-text font-weight-bold">LAUNCHDRY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <b style="color: white; font-size: 20px; font-weight: 400">DASHBOARD</b>
               <li class="nav-item">
                <li class="nav-item">
                  <a href="/dashboard" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
               </li>


               
     @if(auth()->user()->role=="admin" || auth()->user()->role === "kasir")            
   <b style="color: white; font-size: 20px; font-weight: 400">KONTENT</b>
               <li class="nav-item">
                <li class="nav-item">
                  <a href="/regpel" class="nav-link">
                    <i class="fa fa-users nav-icon"></i>
                    <p>Registrasi Pelanggan</p>
                  </a>
                </li>
               </li>
      
              


               <li class="nav-item">
                <li class="nav-item">
                  <a href="/outlet" class="nav-link">
                    <i class="fa fa-building nav-icon"></i>
                    <p>Outlet</p>
                  </a>
                </li>
               </li>
               @endif
          


@if(auth()->user()->role=="admin")
               <li class="nav-item">
                <li class="nav-item">
                  <a href="/paket_cucian" class="nav-link">
                    <i class="fas fa-archive nav-icon"></i>
                    <p>Produk/Paket Cucian</p>
                  </a>
                </li>
               </li>



               <li class="nav-item">
                <li class="nav-item">
                  <a href="/pengguna" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>Pengguna</p>
                  </a>
                </li>
               </li>
              @endif

              @if(auth()->user()->role=="admin" || auth()->user()->role === "kasir")       
          <b style="color: white; font-size: 20px; font-weight: 400">TRANSAKSI</b>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/tambah_transaksi" class="nav-link">
                  <i class="fas fas fa-book nav-icon"></i>
                  <p>Tambah Transaksi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/data_transaksi" class="nav-link">
                  <i class="fa fa-history nav-icon"></i>
                  <p>Riwayat Transaksi</p>
                </a>
              </li>

             
              
  </ul>


  

  <b style="color: white; font-size: 20px; font-weight: 400">LAPORAN</b>
  <li class="nav-item">
                <li class="nav-item">
                  <a href="/laporan_pemasukan" class="nav-link">
                    <i class="fas fa-file nav-icon"></i>
                    <p>Laporan Pemasukan</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/laporan_pengeluaran" class="nav-link">
                    <i class="fas fa-file nav-icon"></i>
                    <p>Laporan Pengeluaran</p>
                  </a>
                </li>
               </li>


          <li class="nav-item">
          
          </li>
          <li class="nav-item">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
               
              </li>
            </ul>
          </li>
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item">
          </li>
          <li class="nav-item">
           
          </li>
          <li class="nav-item">
           
          </li>
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
               
              </li>
              <li class="nav-item">
                
              </li>
            </ul>
          </li>
          <li class="nav-item">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
           
          </li>
          <li class="nav-item">
          </li>
          
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                </a>
              </li>
              <li class="nav-item">
                
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </li>
              <li class="nav-item">
              </li>
            </ul>
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          
          </li>
          
          </li>
        </ul>
      </nav>
      <div class="loader"></div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #403e37">
    <!-- Content Header (Page header) -->
        
           @yield('content')
       
          
    <div class="overlay" id="alert">
    <div class="wrapper">
    <h2>Perhatian!</h2>
       <div class="content">
           <div class="container">
               <form action="/tambah_out" method="POST" style="margin-left: 15rem; width: 50%; margin-top: 9rem; color: black;  transition: all 0.5s ease-out;background: white;height: 250px">
                   @csrf
                   <div style="margin-left: 10px;">
                   <h2 style="color: red; font-weight: 400">Perhatian!</h2>
                   <hr>
                   <h2 style="margin-left: 4rem;">Apakah Anda Yakin Ingin Logout ?</h2><br>
                   <a href="/logout" style="font-size: 30px; margin-left: 3em;" class="btn btn-success">Ya,Saya Logout</a>
                   <a href="#" style="font-size: 30px; margin-left: 3rem;" class="btn btn-danger">Tidak</a>
                   </div>
               </form>
           </div>
       </div>
    </div>
</div>
    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/dist/js/table2excel.js')}}"></script>
<script src="{{asset('assets/dist/js/table_pengeluaran.js')}}"></script>
<script src="{{asset('assets/dist/js/table_pemasukan.js')}}"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
