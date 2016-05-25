<?php

class IntranetNav{
     function print_nav(){
        echo '
        <nav>
            <div class="navbar-fixed">
                <nav class="indigo">
                    <div class="nav-wrapper container">
                        <a href="?page=intranet" class="brand-logo">Administración</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" required>
                                        <label for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </li>
                            <li><a href="?page=intranet" class="uppercase">Panel</a></li>
                            <li><a href="?page=intranet&action=logout" class="uppercase">Cerrar sesión</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="?page=intranet" class="uppercase">Panel</a></li>
                            <li><a href="?page=intranet&action=logout" class="uppercase">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        ';
    }
}