<?php

namespace Garamszegi\Bundle\TaskManagerBundle;

use Garamszegi\Bundle\TaskManagerBundle\DependencyInjection\TaskManagerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of GaramszegiTaskManagerBundle
 *
 * @author Garamszegi Erik
 */
class TaskManagerBundle extends Bundle {
    
    /**
     * 
     * @return TaskManagerExtension
     */
    public function getContainerExtension() {
        $class = $this->getContainerExtensionClass();

        return $class;
    }

    public function getContainerExtensionClass() {
        return new TaskManagerExtension();
    }

}
