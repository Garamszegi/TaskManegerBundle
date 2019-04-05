<?php

namespace Garamszegi\TaskManegerBundle;

use Garamszegi\TaskManagerBundle\DependencyInjection\TaskManegerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of GaramszegiTaskBundle
 *
 * @author Garamszegi Erik
 */
class TaskManegerBundle extends Bundle {
    
    /**
     * 
     * @return GaramszegiTaskExtension
     */
    public function getContainerExtension() {
        $class = $this->getContainerExtensionClass();

        return $class;
    }

    public function getContainerExtensionClass() {
        return new TaskManegerExtension();
    }

}
