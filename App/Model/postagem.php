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

        public static function selecionaId($idPost)
        {
            $con = Connection::getCon();

            $sql = "SELECT * FROM postagem WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(":id",$idPost, PDO::PARAM_INT);
            $sql->execute();

            $result = $sql->fetchObject("Postagem");

            if(!$result){
                throw new Exception("Não foi encontrado!!");
            }

            return $result;
        }
    }