<?php

    class ImgController
    {
        public function index()
        {
            $loader = new \Twig\Loader\FilesystemLoader("App/View");
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('imagens.html');
            
            $parametros = array();
            $conteudo = $template->render($parametros);

            echo $conteudo;
        }
    }