<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="JustBoil.me">
  <link rel="shortcut icon" href="img/utp-logo.png" type="image/x-icon">

  <title>Dashboard</title>

  <!-- Bulma is included -->
  <link rel="stylesheet" href="../css/main.min.css">

  <!-- Agregar el estilo para el cuerpo de la página -->
  <style>
    html, body {
      font-family: 'Questrial', sans-serif;
    }
  </style>

</head>
<body>
<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
      </a>
    </div>
    <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
      <div class="navbar-end">
     
      
      <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
        <a class="navbar-link is-arrowless" href="?op=perfil">
            <div class="is-user-avatar">
                <img src="../img/users/<?php echo $_SESSION["foto"]; ?>" alt="user-img">
            </div>
            <div class="is-user-name">
                <span><?php echo $_SESSION["user"]; ?></span>
            </div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>

          <div class="navbar-dropdown">
            <a href="?op=perfil" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>Mi perfil</span>
            </a>
            <a href="#" class="navbar-item">
              <span class="icon"><i class="mdi mdi-settings"></i></span>
              <span>Ajustes</span>
            </a>
            <hr class="navbar-divider">
            <a href="?op=salir" class="navbar-item">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Cerrar sesión</span>
            </a>
          </div>
        </div>
      
        <a href="?op=salir" title="Log out" class="navbar-item is-desktop-icon-only">
          <span class="icon"><i class="mdi mdi-logout"></i></span>
          <span>Cerrar sesión</span>
        </a>
      </div>
    </div>
  </nav>
  
  <aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <a href="?op=permitido" class="has-text-white">
    <div class="aside-tools-label">
        <div class="is-flex is-align-items-center">
            <img src="../img/utp-logo.png" alt="homepage" width="50" height="50" />
            <span><b>Dashboard</b> usuario</span>
        </div>
    </div>
    </a>
</div>

    <div class="menu ">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="?op=permitido" class="is-active router-link-active has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Ejemplos</p>
      <ul class="menu-list">
        <li>
          <a href="#" class="has-icon">
            <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Tablas</span>
          </a>
        </li>
        <li>
          <a href="#" class="has-icon">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Formulario</span>
          </a>
        </li>
        <li>
          <a href="?op=perfil" class="has-icon">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Perfil</span>
          </a>
        </li>
        
    </div>
  </aside>
  <section class="section is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Admin</li>
            <li>Dashboard</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>
  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item"><h1 class="title">
            Dashboard
          </h1></div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section is-main-section">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Clientes
                </h3>
                  <h1 class="title">
                    512
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-info is-large"><i
                    class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Ventas
                </h3>
                  <h1 class="title">
                    $7,770
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-info is-large"><i
                    class="mdi mdi-cart-outline mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Rendimiento
                </h3>
                  <h1 class="title">
                    256%
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-info is-large"><i
                    class="mdi mdi-finance mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card has-table has-mobile-sort-spaced">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clientes
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
              <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Acciones</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Rebecca Bauch</td>
                <td data-label="Company">Daugherty-Daniel</td>
                <td data-label="City">South Cory</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-info" value="79">79</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Oct 25, 2020">Oct 25, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-info" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Felicita Yundt</td>
                <td data-label="Company">Johns-Weissnat</td>
                <td data-label="City">East Ariel</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-info" value="67">67</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jan 8, 2020">Jan 8, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-info" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              
              </tbody>
            </table>
          </div>
         
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container-fluid">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            2023, Cecilia González 1LS132
          </div>
        </div>
     
      </div>
    </div>
  </footer>
</div>

<div id="sample-modal" class="modal">
  <div class="modal-background jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Confirm action</p>
      <button class="delete jb-modal-close" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>This will permanently delete <b>Some Object</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button jb-modal-close">Cancel</button>
      <button class="button is-danger jb-modal-close">Delete</button>
    </footer>
  </div>
  <button class="modal-close is-large jb-modal-close" aria-label="close"></button>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../js/main.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="../js/chart.sample.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>
