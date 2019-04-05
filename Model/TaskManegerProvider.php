<?php

namespace Garamszegi\Bundle\TaskManagerBundle\Model;

use Garamszegi\Bundle\TaskManagerBundle\Model\TaskManegerInterface;

/**
 * Description of TaskManegerProvider
 *
 * @author Garamszegi Erik
 */
class TaskManegerProvider {

    private $taskManeger;

    public function __construct(TaskManegerInterface $taskManeger) {
        $this->taskManeger = $taskManeger;
    }
    
    public function getNotLockedTaskByCommand($command) {
       
    }

}
