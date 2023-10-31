<!DOCTYPE html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="shortcut icon" href="img/utp-logo.png" type="image/x-icon">
</head>
<body>
    
<script>
    function verificarContrasena() {
        passwd1 = document.formulario.passwd.value;
        passwd2 = document.formulario.confirm_passwd.value;

        if (passwd1 !== passwd2) {
            alert("Las contraseñas no coinciden.");
            return false;
        } else {
            console.log("Contraseñas coinciden, enviando el formulario.");
        }
    }
</script>



        <section class="hero is-link is-fullheight">
            <form name="formulario" class="form-signin" method="POST" action="./?op=registrar" onSubmit="return verificarContrasena()">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-white">Registrarse</h3>
                        <div class="box is-info">
                            <figure class="avatar">
                                <img src="../img/utp-logo.png" width="150">
                            </figure>
                            
                            <p class="<?php if (isset ($_GET['msg'])) echo $_GET['t'];?>"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p> 
                            <br>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="text" id="apellido"  name="apellido" placeholder="Apellido" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="email" id="email" name="correo" placeholder="Correo" autocomplete="username" required>
                                    </div>
                                </div>
    
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="password" id="password" name="passwd" placeholder="Contraseña" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="password" id="repaasword" name="confirm_passwd" placeholder="Confirmar contraseña" required>
                                    </div>
                                </div>

                                <button class="button is-block is-link is-large is-fullwidth" type="submit">Registrar<i class="fa fa-sign-in" aria-hidden="true"></i></button>

                            
                        </div>
                        <p class="has-text-white">
                        ¿Ya tienes una cuenta? - <a href="./">Iniciar sesión</a>
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
