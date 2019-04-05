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
        
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('garamszegi_task_manager');
        
        return $treeBuilder;
    }

}
