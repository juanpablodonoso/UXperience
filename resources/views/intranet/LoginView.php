<?php

class LoginView
{
    function print_login(){
        echo '
        <body id="auth_wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l4 offset-m2 offset-l4">
                    <div id="auth_box">
                        <h3 class="brand-logo grey-text text-darken-3">Panel</h3>
                        <form  role="form" name="myForm" method="POST" action="?page=intranet">
                            <input name="action" type="hidden" value="login">
                            <!-- Email field -->
                            <div class="input-field col s12">
                                <input id="email" name="email" type="text" class="validate">
                                <label for="email">Email</label>
                            </div>
        
                            <!-- Password field -->
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Contraseña</label>
                            </div>
        
                            <div class="col s6">
                                <a href="/" class="waves-effect waves-light btn">Volver</a>
                            </div>
                            <div class="col s6">
                                <button type="submit" class="btn waves-effect waves-light">Entrar</button>
                            </div>
        
                            <div class="col s12">
                                <p class="center-align"><a href="#">¿Has olvidado tu contraseña?</a></p>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        </body>
        ';
    }
}