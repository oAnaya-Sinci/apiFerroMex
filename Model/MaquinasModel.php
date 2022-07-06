<?php
require_once PROJECT_ROOT_PATH . "/Model/DataBase.php";
 
class MaquinasModel extends DataBase
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