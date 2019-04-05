<?php

namespace Garamszegi\Bundle\TaskManagerBundle;

use Garamszegi\Bundle\TaskManagerBundle\DependencyInjection\GaramszegiTaskManagerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of GaramszegiTaskManagerBundle
 *
 * @author Garamszegi Erik
 */
class GaramszegiTaskManagerBundle extends Bundle {
    
    /**
     * 
     * @return GaramszegiTaskManagerExtension
     */
    public function getContainerExtension() {
        $class = $this->getContainerExtensionClass();

        return $class;
    }

    public function getContainerExtensionClass() {
        return new GaramszegiTaskManagerExtension();
    }

}
