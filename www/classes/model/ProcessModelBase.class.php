<?php

namespace ProcessControl\model;

use DateTime;
use ProcessControl\dao\ProcessDao;
class ProcessModelBase
{
    private $_id=null;
    private $_start_time=null;
    private $_end_time=null;
    private $_process_id=null;
    private $_job_id=null;

    protected function setProperty(array $arrDao)
    {
        $this->setId($arrDao['id'])
        ->setStart_time($arrDao['start_time'])
        ->setEnd_time($arrDao['end_time'])
        ->setProcess_id($arrDao['process_id'])
        ->setJob_id($arrDao['job_id']);
        return $this;
    }

    public function save()
    {
        return ProcessDao::save($this);
    }

    public function create()
    {
        return ProcessDao::insert($this);
    }

    
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }
    public function setStart_time($start_time)
    {
        $this->_start_time = $start_time;
        return $this;
    }
    public function setEnd_time($end_time)
    {
        $this->_end_time = $end_time;
        return $this;
    }
    public function setProcess_id($process_id)
    {
        $this->_process_id = $process_id;
        return $this;
    }
    public function setJob_id($job_id)
    {
        $this->_job_id = $job_id;
        return $this;
    }


    public function getId()
    {
        return $this->_id;
    }
    public function getStart_time()
    {
        return $this->_start_time;
    }
    public function getEnd_time()
    {
        return $this->_end_time;
    }
    public function getProcess_id()
    {
        return $this->_process_id;
    }
    public function getJob_id()
    {
        return $this->_job_id;
    }



}
?>
