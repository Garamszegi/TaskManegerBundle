<?php

namespace Garamszegi\Bundle\TaskManagerBundle\Model;

use Garamszegi\Bundle\TaskManagerBundle\Model\TaskManegerInterface;

/**
 * Description of TaskManeger
 *
 * @author Garamszegi Erik
 */
abstract class TaskManeger implements TaskManegerInterface {

    /**
     *
     * @var int
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $command;

    /**
     *
     * @var string
     */
    protected $params;

    /**
     *
     * @var string
     */
    protected $croneExpression;

    /**
     *
     * @var int
     */
    protected $priority;

    /**
     *
     * @var \DateTime
     */
    protected $lastExecTime;

    /**
     *
     * @var bool
     */
    protected $locked;

    /**
     *
     * @var bool
     */
    protected $active;

    /**
     *
     * @var string
     */
    protected $logFile;

    public function getActive(): bool {
        return $this->active;
    }

    public function getCommand(): ?string {
        return $this->command;
    }

    public function getCroneExpression(): ?string {
        return $this->croneExpression;
    }

    public function getLastExecTime(): \DateTimeInterface {
        return $this->lastExecTime;
    }

    public function getLocked(): bool {
        return $this->locked;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getParams(): ?string {
        return $this->params;
    }

    public function getPriority(): ?int {
        return $this->priority;
    }

    public function setActive(bool $active) {
        $this->active = $active;
    }

    public function setCommand(mixed $command) {
        $this->command = $command;
    }

    public function setCroneExpression(mixed $croneExpression) {
        $this->croneExpression = $croneExpression;
    }

    public function setLastExecTime(\DateTimeInterface $lastExecTime) {
        $this->lastExecTime = $lastExecTime;
    }

    public function setLocked(bool $locked) {
        $this->locked = $locked;
    }

    public function setName(mixed $name) {
        $this->name = $name;
    }

    public function setParams(mixed $params) {
        $this->params = $params;
    }

    public function setPriority(mixed $priority) {
        $this->priority = $priority;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getLogFile(): ?string {
        return $this->logFile;
    }

    public function setLogFile(mixed $logFile) {
        $this->logFile = $logFile;
    }

}
