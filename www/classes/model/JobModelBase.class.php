<?php

namespace ProcessControl\model;

use DateTime;
use ProcessControl\dao\JobDao;
class JobModelBase
{
    private $_id=null;
    private $_name=null;
    private $_overview=null;
    private $_dead_line=null;
    private $_rep_id=null;
    private $_is_finished=null;
    private $_createdat=null;

    protected function setProperty(array $arrDao)
    {
        $this->setId($arrDao['id'])
        ->setName($arrDao['name'])
        ->setOverview($arrDao['overview'])
        ->setDead_line($arrDao['dead_line'])
        ->setRep_id($arrDao['rep_id'])
        ->setIs_finished($arrDao['is_finished'])
        ->setCreatedat($arrDao['createdat']);
        return $this;
    }

    public function create()
    {
        return JobDao::insert($this);
    }

    
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }
    public function setOverview($overview)
    {
        $this->_overview = $overview;
        return $this;
    }
    public function setDead_line($dead_line)
    {
        $this->_dead_line = $dead_line;
        return $this;
    }
    public function setRep_id($rep_id)
    {
        $this->_rep_id = $rep_id;
        return $this;
    }
    public function setIs_finished($is_finished)
    {
        $this->_is_finished = $is_finished;
        return $this;
    }
    public function setCreatedat($createdat)
    {
        $this->_createdat = $createdat;
        return $this;
    }


    public function getId()
    {
        return $this->_id;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getOverview()
    {
        return $this->_overview;
    }
    public function getDead_line()
    {
        return $this->_dead_line;
    }
    public function getRep_id()
    {
        return $this->_rep_id;
    }
    public function getIs_finished()
    {
        return $this->_is_finished;
    }
    public function getCreatedat()
    {
        return $this->_createdat;
    }



}
?>
