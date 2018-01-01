<?php
    class Select extends Conn {

        private static $Values;
        private static $Connect;
        private static $PDOClass;
        private static $Query;

        function __construct($Fields, $Table,$Terms = null, $Values = null) {
            self::$Values = (array)$Values;
        self::$Query = ("SELECT {$Fields} FROM {$Table} {$Terms}");
        }

        public function result()
        {
            return self::selectData();
        }

        private static function prepare()
        {
            if (self::$Values != null)
            {
                $i = 0;
                while ($i < count(self::$Values)) 
                {
                    self::$PDOClass->bindValue(":" . key(self::$Values), self::$Values[key(self::$Values)]);
                    next(self::$Values);
                    $i++;
                }
            }
        }

        private static function selectData()
        {
            self::$Connect = parent::getConn();
            try
            {
                self::$PDOClass = self::$Connect->prepare(self::$Query);
                self::prepare();
                self::$PDOClass->execute();
                return self::$PDOClass->fetchAll(PDO::FETCH_ASSOC);

            } catch (PDOException $PDOerror)
            {
                echo '<b>Código : </b>' . $PDOerror->getCode() .
                '<hr><b>Mensagem :</b>' . $PDOerror->getMessage() .
                '<hr><b>Arquivo :</b>' . $PDOerror->getFile() .
                '<hr><b>Linha :</b>' . $PDOerror->getLine();

                die;
            }
        }
    }
?>