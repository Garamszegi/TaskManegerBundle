<?php

namespace Garamszegi\Bundle\TaskManagerBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Description of TaskManagerExtension
 *
 * @author Garamszegi Erik
 */
class TaskManagerExtension extends Extension {

    //put your code here
    public function load(array $configs, ContainerBuilder $container) {

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        foreach ($config as $key => $value) {
            $container->setParameter('garamszegi_task_manager.' . $key, $value);
        }
    }

    public function getAlias() {
        return "garamszegi_task_manager";
    }

}
