<?php

class IntranetHead{
    function print_head(){
        echo '
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
            <title>Titulo</title>
            <!-- CSS  -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="components/Materialize/dist/css/materialize.css" type="text/css" rel="stylesheet"  media="screen"/>
            <link href="css/intranet/style.css" type="text/css" rel="stylesheet" media="screen"/>
          
            <link href="css/font/flaticon.css" type="text/css" rel="stylesheet"/>
        
            <!--  Scripts-->
            <script src="components/jquery/dist/jquery.min.js"></script>
            <script src="components/Materialize/dist/js/materialize.js"></script>
            <!--<script src="js/intranet.js"></script>-->
        
        </head>
        ';
    }
}