<?php

namespace CanalTP\ScrumBoardItBundle\Service;

use CanalTP\ScrumBoardItBundle\Service\ServiceInterface;
use CanalTP\ScrumBoardItBundle\Entitie\Configuration;

/**
 * Description of AbstractService
 * @author Johan Rouve <johan.rouve@gmail.com>
 */
abstract class AbstractService implements ServiceInterface {
    protected $configuration;

    public function getConfiguration() {
        return $this->configuration;
    }
    
    public function setConfiguration(Configuration $configuration) {
        $this->configuration = $configuration;
        return $this;
    }
}
