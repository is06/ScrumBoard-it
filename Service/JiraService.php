<?php

namespace CanalTP\ScrumBoardItBundle\Service;

use CanalTP\ScrumBoardItBundle\Api\JiraSearchConfiguration;
use CanalTP\ScrumBoardItBundle\Api\JiraIssueConfiguration;
use CanalTP\ScrumBoardItBundle\Api\JiraCallBuilder;

/**
 * Description of JiraService
 * @author Johan Rouve <johan.rouve@gmail.com>
 */
class JiraService extends AbstractService {
    public function getIssues($selected = array()) {
        if (empty($selected)) {
            $template = 'Sprint = %d AND status not in (Closed)';
            $jql = sprintf($template, $this->configuration->getSprintId());
        } else {
            $jql = 'issueKey in ('.implode(',', $selected).')';
        }
        $config = new JiraSearchConfiguration();
        $config->setParameters(array(
            'jql' => $jql,
            'maxResults' => -1,
        ));
        $api = new JiraCallBuilder($this->getConfiguration());
        $api->setApiConfiguration($config);
        return $api->call();
    }
    
    public function addFlag($selected = array()) {
        if (!empty($selected)) {
            $config = new JiraIssueConfiguration();
            foreach ($selected as $issueId) {
                $config->setIssueId($issueId);
                $config->setParameters(
                    '{"update":{"labels":[{"add":"'.$this->configuration->getTag().'"}]}}'
                );
                $api = new JiraCallBuilder($this->getConfiguration());
                $api->setApiConfiguration($config);
                $api->call();
            }
        }
    }
}
