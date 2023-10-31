<!DOCTYPE html>
<head>
    <meta charset="utf-8"> 
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="shortcut icon" href="img/utp-logo.png" type="image/x-icon">
</head>
<body>
    
        <section class="hero is-link is-fullheight">
            <form name="formulario" method="POST" action="./?op=acceder">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-white">Bienvenido</h3>
                        <div class="box is-info">
                            <figure class="avatar">
                                <img src="../img/utp-logo.png" width="150">
                            </figure>

                            <p class="has-text-danger-dark"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p><br>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="email" name="correo" placeholder="Correo" autocomplete="username" required>
                                    </div>
                                </div>
    
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="password" name="passwd" placeholder="Contraseña" required>
                                    </div>
                                </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" value="remember-me">
                                    Recordarme
                                </label>
                            </div>

                                <button class="button is-block is-link is-large is-fullwidth">Iniciar sesión<i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        
                        </div>
                        <p class="has-text-white">
                            <a href="?op=crear">Registrarse</a> &nbsp;·&nbsp;
                            <a href="#">Olvidaste tu contraseña?</a> &nbsp;&nbsp;
                        </p>
                    </div>
                </div>
            </div>
            </form>
        </section>

        <footer class="footer has-background-link">
            <div class="content has-text-centered">
                <p class="has-text-white">
                    <strong>&copy;</strong> 2023, Cecilia González 1LS132
                </p>
            </div>
        </footer>

</body>
