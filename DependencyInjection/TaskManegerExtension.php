<?php

namespace Garamszegi\Bundle\TaskManagerBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Description of GaramszegiTaskExtension
 *
 * @author Garamszegi Erik
 */
class TaskManegerExtension extends Extension {

    //put your code here
    public function load(array $configs, ContainerBuilder $container) {

        $configuration = new Configuration();
        $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
    
    public function getAlias() {
        return "garamszegi_task_manager";
    }

}
