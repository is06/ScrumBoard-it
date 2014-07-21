<?php

namespace CanalTP\ScrumBoardItBundle\Api;

use CanalTP\ScrumBoardItBundle\Entitie\Configuration;

/**
 * @author Johan Rouve <johan.rouve@gmail.com>
 */
interface ApiCallBuilderInterface {
    public function __construct(array $options = array());
    public function setApiConfiguration(ApiCallConfigurationInterface $apiConfiguration);
    public function getConfiguration();
    public function setConfiguration(Configuration $configuration);
    public function getResult();
    public function setResult($result);
    public function call();
}
