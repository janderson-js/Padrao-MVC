<?php
    class Comentario
    {
        public static function selecionarComentario($idPost)
        {
            $con = Connection::getCon();

            $slq = "SELECT * FROM comentario WHERE id_postagem = :id";
            $slq = $con->prepare($slq);
            $slq->bindValue(":id",$idPost, PDO::PARAM_INT);
            $slq->execute();

            $resultado = array();

            while($row = $slq->fetchObject("Comentario")){
                $resultado[] = $row;
            }

            return $resultado;
        }
    }