<?php

namespace CanalTP\ScrumBoardItBundle\Service;

use CanalTP\ScrumBoardItBundle\Entitie\Configuration;

/**
 * @author Johan Rouve <johan.rouve@gmail.com>
 */
interface ServiceInterface {
    public function getIssues($selected = array());
    public function addFlag($selected = array());
    public function getConfiguration();
    public function setConfiguration(Configuration $configuration);
}
