<?php
class Conn {
    private static $HOST = HOST;
    private static $DB = DB;
    private static $USER = USER;
    private static $PASS = PASS;
    private static $Connect = null;
    private static $Error = null;
    private static function Conectar() {
        try {
            if (self::$Connect == null) {
                $dsn = 'mysql:host=' . self::$HOST . ';dbname=' . self::$DB;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                
                self::$Connect = new PDO($dsn, self::$USER, self::$PASS, $options);
            }
        } catch (PDOException $PDOerror) {
            self::$Error = '<b>Código : </b>' . $PDOerror->getCode() .
                           '<hr><b>Mensagem :</b>' . $PDOerror->getMessage() .
                           '<hr><b>Arquivo :</b>' . $PDOerror->getFile() .
                           '<hr><b>Linha :</b>' . $PDOerror->getLine();
            echo self::$Error;
            die;
        }
        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    public static function getConn(){
        return self::Conectar();
    }

}

?>