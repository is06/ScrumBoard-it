<?php

namespace CanalTP\ScrumBoardItBundle\Entitie;

/**
 * Description of Configuration
 *
 * @author Johan Rouve <johan.rouve@gmail.com>
 */
class Configuration {
    protected $host;
    protected $login;
    protected $password;
    protected $sprint_id;
    protected $tag;
    
    public function getHost() {
        return $this->host;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSprintId() {
        return $this->sprint_id;
    }

    public function getTag() {
        return $this->tag;
    }

    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setSprintId($sprint_id) {
        $this->sprint_id = $sprint_id;
        return $this;
    }

    public function setTag($tag) {
        $this->tag = $tag;
        return $this;
    }
}
