<?php

namespace Garamszegi\Bundle\TaskManagerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Description of Configuration
 *
 * @author Garamszegi Erik
 */
class Configuration implements ConfigurationInterface {

    /**
     * 
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder() {

        $treeBuilder = new TreeBuilder('task_manager');
        
        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('task_manager');
        }
        
        
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
                ->children()
                ->scalarNode('log_path')->defaultValue('%kernel.logs_dir%')->end()
                ->end();

        return $treeBuilder;
    }

}
