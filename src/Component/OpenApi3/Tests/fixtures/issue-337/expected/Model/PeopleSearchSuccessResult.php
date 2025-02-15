<?php

namespace CreditSafe\API\Model;

class PeopleSearchSuccessResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $totalSize;
    /**
     * 
     *
     * @var PeopleSearchSuccessResultDirectorsItem[]
     */
    protected $directors;
    /**
     * 
     *
     * @return int
     */
    public function getTotalSize() : int
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize) : self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return PeopleSearchSuccessResultDirectorsItem[]
     */
    public function getDirectors() : array
    {
        return $this->directors;
    }
    /**
     * 
     *
     * @param PeopleSearchSuccessResultDirectorsItem[] $directors
     *
     * @return self
     */
    public function setDirectors(array $directors) : self
    {
        $this->initialized['directors'] = true;
        $this->directors = $directors;
        return $this;
    }
}