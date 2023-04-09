 <?php
if (!isset($_COOKIE['login'])) {
	header("location:login.php");
} 
?>
<html lang="en" style="height: auto;"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="paineladm/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="paineladm/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="paineladm/dist/css/adminlte.min.css">
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open" style="height: auto;">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" style="display: none;">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      

      
      
      <!-- Notifications Dropdown Menu -->
<li class="nav-item d-none d-sm-inline-block">
        <a href="sair.php" class="nav-link">Sair</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img style="opacity: .8" class="brand-image img-circle elevation-3" alt="AdminLTE Logo" src="https://img.icons8.com/nolan/64/futurama-bender.png">
      <span class="brand-text font-weight-light">Arch Painel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-transition os-host-foreign os-host-scrollbar-vertical-hidden os-host-scrollbar-horizontal-hidden"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div><div class="os-resize-observer"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 584px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 584px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 584px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 580px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style=""><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      
      

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/google-home.png">
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/web.png">
              <p>Telas<i class="fas fa-angle-left right"></i><span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/web.png">
                  <p>Painel Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" target="_blank" rel="noopener noreferrer" class="nav-link"> 
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/web.png">
                  <p>Painel CC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/web.png">
                  <p>Painel Consul</p>
                </a>
              </li>
              
              
              
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/console.png">
              <p>Paineis<i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/console.png">
                  <p>Painel Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/console.png">
                  <p>Painel CC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/console.png">
                  <p>Painel Consul</p>
                </a>
              </li>
              
              
              
              
              
            </ul>
          </li>
          
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">FERRAMENTAS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/checked-checkbox.png">
              <p>Checker<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/diners-club.png">
              <p>CC/GG<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/mastercard.png">
                  <p>Full</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/amex.png">
                  <p>GG Allbins</p>
                </a>
              </li><li class="nav-item">
                <a href="chks/cc/itau/index.php" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/visa.png">
                  <p>Validador Itau</p>
                </a>
              </li>
            </ul>
          </li>
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/user-default.png">
              <p>Logins<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/online-shop-card-payment.png">
              <p>Lojas<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="chks/logins/amaro/index.php" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/user-default.png">
                  <p>Amaro</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="chks/logins/kabum/index.php" target="_blank" rel="noopener noreferrer" class="nav-link">
                <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/user-default.png">
                  <p>Kabum</p>
                </a>
              </li><li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/user-default.png">
                  <p>Renner</p>
                </a>
              </li>
            </ul>
          </li>
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/tv-show.png">
              <p>Streaming<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="chks/logins/amaro/index.php" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/netflix.png">
                  <p>Netflix</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="chks/logins/kabum/index.php" target="_blank" rel="noopener noreferrer" class="nav-link">
                <img src="https://img.icons8.com/nolan/25/hbo.png">
                  <p>HBO</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li><li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/ticket.png">
              <p>Vales<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/ticket.png">
                  <p>Amaro</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/ticket.png">
                  <p>Kabum</p>
                </a>
              </li><li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/ticket.png">
                  <p>Renner</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/gmail.png">
              <p>E-mail<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/gmail.png">
                  <p>Terra</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/gmail.png">
                  <p>Bol</p>
                </a>
              </li><li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/gmail.png">
                  <p>Uol</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/ingredients-list.png">
              <p>Separador<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/electronic-identity-card.png">
                  <p>CPF</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/gmail.png">
                  <p>E-mail</p>
                </a>
              </li><li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/txt.png">
                  <p>TXT</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/engine.png">
              <p>Gerador<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="https://namso-gen.com/" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/stripe.png">
                  <p>CC</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="https://www.4devs.com.br/gerador_de_pessoas" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/men-age-group-4--v2.png">
                  <p>Pessoa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/phishing.png">
              <p>Spam<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/gmail.png">
                  <p>E-Mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/sms.png">
                  <p>  SMS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" target="_blank" rel="noopener noreferrer" class="nav-link">
                  <img src="https://img.icons8.com/nolan/25/1A6DFF/C822FF/google-adwords.png">
                  <p>ADS</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 2646px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">Owner</div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Wazah</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Web Designer / Weed Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone: +55 (42) 9 8824-8922 </li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="paineladm/dist/img/art.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class=" ">
                      <img src="https://img.icons8.com/nolan/25/telegram-app.png">
                    </a>
                    <a href="#" class="btn">
                      <img src="https://img.icons8.com/nolan/25/whatsapp.png"> </a>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
            
          </div>
        </div>
        
        
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none; top: 57px;">
    <!-- Control sidebar content goes here -->
  <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition" style="height: 100%;"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible"><div class="os-content" style="padding: 16px; height: 100%; width: 100%;"><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-dark"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option>clear</select></div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div></aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright © 2021-2023 <a href="https://adminlte.io">Arch Group</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="paineladm/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="paineladm/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="paineladm/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="paineladm/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="paineladm/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="paineladm/plugins/raphael/raphael.min.js"></script>
<script src="paineladm/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="paineladm/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="paineladm/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="paineladm/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="paineladm/dist/js/pages/dashboard2.js"></script>


</body></html>