<?php
// require_once PROJECT_ROOT_PATH . "/Model/Database.php";
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
 
class MaquinasModel extends Database
{
    public function getDataGPS()
    {
        return $this->select("SELECT * FROM registrosmaquinarias");
    }

    public function getAcumuladoDiesel()
    {
        return $this->select("SELECT * FROM registrosmaquinarias");
    }

    public function getAcumuladoKilometers()
    {
        return $this->select("SELECT * FROM registrosmaquinarias");
    }
    
    public function getAVGDiesel()
    {
        return $this->select("SELECT * FROM registrosmaquinarias");
    }

    public function getAVGKilometers()
    {
        return $this->select("SELECT * FROM registrosmaquinarias");
    }
    
    public function getRegistroNotificacion()
    {
        return $this->select("SELECT * FROM registrosmaquinarias");
    }
    
    public function setRegistroNotificacion()
    {
        return $this->select("INSERT INTO alarmsLogs() VALUES()");
    }
}