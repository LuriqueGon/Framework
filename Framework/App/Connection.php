<?php 

    namespace App;
    use PDO;
    use PDOException;

    class Connection
    {

        const DATABASE_NAME = "estoque";

        public static function getDB()
        {
            try
            {
                $conn = new PDO(
                    "mysql:host=localhost;". // Host do banco
                    "dbname=".Connection::DATABASE_NAME.";". //Nome do banco
                    "charset=utf8", //Tipo de char
                    "root", //Usuario
                    "" //Senha
                );
                return $conn;
                
            }catch(PDOException $e)
            {
                // Tratativa de Erros
            }
        }
    }

?>