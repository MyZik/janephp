<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody extends \ArrayObject
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
     * @var string[]
     */
    protected $portfolios;
    /**
     * 
     *
     * @var MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem[]
     */
    protected $companies;
    /**
     * 
     *
     * @return string[]
     */
    public function getPortfolios() : array
    {
        return $this->portfolios;
    }
    /**
     * 
     *
     * @param string[] $portfolios
     *
     * @return self
     */
    public function setPortfolios(array $portfolios) : self
    {
        $this->initialized['portfolios'] = true;
        $this->portfolios = $portfolios;
        return $this;
    }
    /**
     * 
     *
     * @return MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
}