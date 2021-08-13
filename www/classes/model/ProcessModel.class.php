<?php

namespace ProcessControl\model;

use DateTime;
use ProcessControl\dao\JobDao;
final class ProcessModel extends ProcessModelBase
{
    public function getModel()
    {
        $dao = JobDao::getDao();
        return $dao;
    }

    public function getTaskModel($repid)
    {
        $dao = JobDao::getTaskDao($repid);
        return $dao;
    }
}
?>
