<?php
class usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;
    
    /*Valida la existencia del usuario*/
    function __Construct($usu="",$clave="") {
        $this->nombre=$usu;
        $this->clave=$clave;       
    }
    function VerificaUsuario(){
        $oConn=new conexion();
        
        if ($oConn->conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre'";
        
        $resultado=$db->query($sql);
        
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
              
    }
    
    function VerificaUsuarioClave(){
        $oConn=new conexion();
        
        if ($oConn->conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $clavemd5=md5($this->clave);
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre' and pwdusuario='$clavemd5'";
        
        echo $sql;
               
        $resultado=$db->query($sql);
        
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
              
    }
    
    function VerificaLocal(){
        $usu="dmerlez";
        $key="12345";
        
        if($this->nombre==$usu && $this->clave==$key)
            return true;
        else
            return false;
    }
    
}
