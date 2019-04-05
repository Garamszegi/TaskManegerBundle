<?php

namespace Garamszegi\Bundle\TaskManegerBundle;

use Garamszegi\Bundle\TaskManagerBundle\DependencyInjection\TaskManegerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of TaskManegerExtension
 *
 * @author Garamszegi Erik
 */
class GaramszegiTaskManegerBundle extends Bundle {
    
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
