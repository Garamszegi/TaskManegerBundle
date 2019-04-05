<?php

namespace Garamszegi\Bundle\TaskManagerBundle;

use Garamszegi\Bundle\TaskManagerBundle\DependencyInjection\TaskManegerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of TaskManegerExtension
 *
 * @author Garamszegi Erik
 */
class GaramszegiTaskManagerBundle extends Bundle {
    
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
