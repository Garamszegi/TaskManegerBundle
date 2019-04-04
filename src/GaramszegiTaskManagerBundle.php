<?php

namespace Garamszegi\TaskManegerBundle;

use Garamszegi\TaskBundle\DependencyInjection\GaramszegiTaskExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of GaramszegiTaskBundle
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
        return new GaramszegiTaskExtension();
    }

}
