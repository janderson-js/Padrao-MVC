<?php

    class Postagem
    {
        public static function selecionaTodos()
        {
            $con = Connection::getCon();
            
            $sql = "SELECT * FROM postagem ORDER BY id DESC";
            $sql = $con->prepare($sql);
            $sql->execute();

            while($row = $sql->fetchObject('Postagem')){
                $result[] = $row;
            }
            if(@!$result){
                throw new Exception("Não foi encontrado!!");
            }
            return $result;
        }
    }