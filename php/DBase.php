<?php
class DBase extends PDO {

    private static $engine = 'mysql';

    // NOM DATABASE
    private static $dbName = 'HOTELSKYRANK' ;
    
    // NOM HOTE
    private static $dbHost = 'localhost' ;
    
    // UTILISATEUR
    private static $dbUsername = 'root';
    
    // MOT DE PASSE
    private static $dbUserPassword = 'mysql';

    public function __construct(){
        $dns = self::$engine.':dbname='.self::$dbName.";host=".self::$dbHost;
        parent::__construct( $dns, self::$dbUsername, self::$dbUserPassword );
    }

}
?>
