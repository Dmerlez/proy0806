<?php
class conexion{
    var $objconn;
    
    /*Metodo de conexion*/
    var $dbusr="root";
    var $dbpwd="avaras08";
    var $dbhost="localhost";
    var $dbname="exportaciones";
    public function conectar(){
                $this->objconn = new mysqli($this->dbhost,
                                             $this->dbusr,
                                             $this->dbpwd,
                                             $this->dbname);
            if ($this->objconn->connect_errno) {
                return "Fallo al conectar a MySQL: (" . $this->objconn->connect_errno . ") " . $this->objconn->connect_error;
        }
        return true;
    }
}