<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="JustBoil.me">
  <link rel="shortcut icon" href="img/utp-logo.png" type="image/x-icon">
  <title>Perfil</title>

  <link rel="stylesheet" href="../css/main.min.css">

  <!-- Agregar el estilo para el cuerpo de la página -->
  <style>
    html, body {
      font-family: 'Questrial', sans-serif;
    }

        /* Estilos personalizados para alinear los campos Nombre y Apellido */
    .inline-fields {
      display: flex;
    }

    .inline-fields .field {
      flex: 1;
      margin-right: 10px;
    }

    .inline-fields .input {
      flex: 1;
      margin-right: 10px;
    }

        
  </style>

<script>

var arrayIdDistrito = new Array();
var arrayNomDistrito = new Array();
var arrayIdProvincia = new Array();
var i=1;
// Inicializamos 3 arreglos con los datos de los Ids de las provincias y distritos; ademas, del nombre de los distritos
<?php
$n=0;
foreach ($distritos as $d)  {
    echo "arrayIdDistrito[$n]=$d->id_distrito;";
    echo "arrayNomDistrito[$n]='$d->nom_distrito';";
    echo "arrayIdProvincia[$n]=$d->id_provincia;";
    $n++;
    }
 ?>
var n ="<?php echo $n; ?>"; //total de registros

   function SelectDistrito()
{
    var indice=0;
    var valor=0;
    //asignamos a la variable valor el valor de la lista de menú seleccionado
    valor=document.formulario.provincia.value;
    document.formulario.distrito.length=0; //Limpiamos la lista de menu distrito
    for (x=0;x<n;x++) {

        if (valor == arrayIdProvincia[x]  )
        {
        //asigna a la lista de menú sub_areas los nuevos valores segun la selección del menú areas
        document.formulario.distrito[indice]= new Option(arrayNomDistrito[x],arrayIdDistrito[x]);
        indice=indice+1;
        }
        }

  }	
</script>



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
        <a class="navbar-link is-arrowless">
            <div class="is-user-avatar">
                <img src="img/users/<?php echo $_SESSION["foto"]; ?>" alt="user-img">
            </div>
            <div class="is-user-name">
                <span><?php echo $_SESSION["user"]; ?></span>
            </div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>

          <div class="navbar-dropdown">
            <a href="?op=perfil" class="navbar-item is-active">
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
        
        <a href="?op=salir" title="Cerrar sesión" class="navbar-item is-desktop-icon-only">
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
          <a href="?op=permitido" class="has-icon">
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
          <a href="?op=perfil" class="is-active has-icon">
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
            <li>Perfil</li>
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
            Perfil de usuario
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
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-circle default"></i></span>
              Editar perfil
            </p>
          </header>
          <div class="card-content">
            <form name="formulario" method="POST" action="./?op=actualizar" enctype="multipart/form-data">
              <div class="field is-horizontal">
                <div class="field-label is-normal"><label class="label">Avatar</label></div>
                <div class="field-body">
                  <div class="field">
                    <div class="field file">
                      <label class="upload control">
                        <a class="button is-info">
                          <span class="icon"><i class="mdi mdi-upload default"></i></span>
                          <span>Adjuntar archivo</span>
                        </a>
                        <input type="file">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <hr>

                <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Nombre</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="text" name="nombre" class="input" value="<?php echo $usuario->nombre; ?>" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Apellido</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="text" name="apellido" value="<?php echo $usuario->apellido; ?>" class="input" required>
                    </div>
                    <p class="help">Requiere. Tu apellido</p>
                  </div>
                </div>
              </div>

              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="example-email" class="label">Provincia</label>
                </div>
              <div class="field-body">
                  <div class="field">
                    <div class="select">
                    <select name="provincia" id="provincia" onchange="SelectDistrito()">
                          <?php foreach ($provincia as $p){ ?>
                          <option value="<?php echo $p->id_provincia; ?>"><?php echo $p->nomprovincia; ?></option>
                          <?php } ?>      
                    </select>
                    </div>
                    <p class="help">Requiere. Selecciona tu provincia</p>
                  </div>
                </div>
              </div>

              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="example-email" class="label">Distrito</label>
                </div>
              <div class="field-body">
                  <div class="field">
                    <div class="select">
                    <select name="distrito" id="distrito">
                     </select>
                    </div>
                    <p class="help">Requiere. Selecciona tu distrito</p>
                  </div>
                </div>
              </div>

              <hr>
              <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <button type="submit" class="button is-info">
                        Actualizar datos
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account default"></i></span>
              Perfil
            </p>
          </header>
          <div class="card-content">
            <div class="is-user-avatar image has-max-width is-aligned-center">
              <img src="../img/perfil.png" alt="John Doe">
              <div class="user-content"><!--nuevo -->
                  <a href="javascript:void(0)"><img src="img/users/<?php echo $_SESSION["foto"]; ?>" 
                   class="thumb-lg img-circle" alt="img"></a><!--nuevo -->
            </div>
            <hr>
            <div class="field">
              <div class="control inline-fields">
                <div class="field">
                  <label class="label">Nombre:&nbsp;</label>
                  <input type="text" readonly name="nombre" class="input is-static" value="John">
                </div>
                <div class="field">
                  <label class="label">Apellido: </label>
                  <input type="text" readonly name="apellido" class="input is-static" value="Smith">
                </div>
              </div>
            </div>
            <hr>
            <div class="field">
              <label for="example-email" class="label">E-mail</label>
              <div class="control is-clearfix">
              <h5 class="subtitle is-5"><?php echo $usuario->email; ?></h5>
              </div>
            </div>
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
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../js/main.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>
