<?php

namespace ProcessControl\model;

use DateTime;
use ProcessControl\dao\JobDao;
final class JobModel extends JobModelBase
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

    public function getProcessTotalTimeModel($repid)
    {
        $dao = JobDao::getProcessTotalTimeDao($repid);
        foreach($dao as &$task){
            foreach($task as &$process){
                $process['process_time']=str_replace(':', '', $process['process_time']);
            }
            $totalTime = array_sum(array_column($task,'process_time'));
            $task[]=array($totalTime);
        }
        return $dao;

    }
}
?>
