<?php

namespace Garamszegi\Bundle\TaskManagerBundle\Model;

/**
 *
 * @author Garamszegi Erik
 */
interface TaskManegerInterface {

    /**
     * 
     * @return int
     */
    public function getId(): int;

    /**
     * 
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * 
     * @param string|null $name
     */
    public function setName(?string $name);

    /**
     * 
     * @return string|null
     */
    public function getCommand(): ?string;

    /**
     * 
     * @param string|null $command
     */
    public function setCommand(?string $command);

    /**
     * 
     * @return string|null
     */
    public function getParams(): ?string;

    /**
     * 
     * @param string|null $params
     */
    public function setParams(?string $params);

    /**
     * 
     * @return string|null
     */
    public function getCroneExpression(): ?string;

    /**
     * 
     * @param string|null $croneExpression
     */
    public function setCroneExpression(?string $croneExpression);

   /**
    * 
    * @param bool $locked
    */
    public function setLocked(bool $locked);

   /**
    * 
    * @return bool
    */
    public function getLocked(): bool;

    /**
     * 
     * @return \DateTimeInterface
     */
    public function getLastExecTime(): \DateTimeInterface;

    /**
     * 
     * @param \DateTimeInterface $lastExecTime
     */
    public function setLastExecTime(\DateTimeInterface $lastExecTime);

    /**
     * 
     * @return int|null
     */
    public function getPriority(): ?int;

    /**
     * 
     * @param int|null $priority
     */
    public function setPriority(?int $priority);

    /**
     * 
     * @return bool
     */
    public function getActive(): bool;

    /**
     * 
     * @param bool $active
     */
    public function setActive(bool $active);

    /**
     * 
     * @return string|null
     */
    public function getLogFile(): ?string;

    /**
     * 
     * @param string|null $logFile
     */
    public function setLogFile(?string $logFile);
}
