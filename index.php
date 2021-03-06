<?php

    require_once "App/Core/core.php";

    require_once "App/Controller/HomeController.php";
    require_once "App/Controller/ErroController.php";
    require_once "App/Controller/PostController.php";
    require_once "App/Controller/SobreController.php";
    require_once "App/Controller/ImgController.php";

    require_once "lib/DataBase/Connection.php";

    require_once "App/Model/postagem.php";
    require_once "App/Model/comentarios.php";

    require_once "vendor/autoload.php";

    $template = file_get_contents('http://localhost/mini-blog/App/templete/estrutura.html');

    ob_start();
        $core = new Core;
        $core ->start($_GET);
        
        $saida = ob_get_contents();
    ob_end_clean();

    $tplPronto = str_replace('{{conteudo}}',$saida,$template);
    echo $tplPronto;