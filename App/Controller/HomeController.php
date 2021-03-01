<?php

    class HomeController
    {
        public function index()
        {
           try{
                $teste = Postagem::selecionaTodos();
                var_dump($teste);
           }catch(Exception $e){
               echo $e->getMessage();
           }
        }
    }