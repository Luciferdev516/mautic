<?php

namespace Proxies\__CG__\Mautic\ReportBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Report extends \Mautic\ReportBundle\Entity\Report implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'id', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'name', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'description', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'system', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'source', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'columns', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'filters', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'tableOrder', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'graphs', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'groupBy', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'aggregators', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'settings', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'isScheduled', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'toAddress', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'scheduleUnit', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'scheduleDay', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'scheduleMonthFrequency', 'changes', 'new', 'deletedId', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'id', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'name', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'description', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'system', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'source', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'columns', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'filters', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'tableOrder', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'graphs', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'groupBy', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'aggregators', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'settings', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'isScheduled', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'toAddress', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'scheduleUnit', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'scheduleDay', '' . "\0" . 'Mautic\\ReportBundle\\Entity\\Report' . "\0" . 'scheduleMonthFrequency', 'changes', 'new', 'deletedId', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Report $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(?int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystem($system)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystem', [$system]);

        return parent::setSystem($system);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystem', []);

        return parent::getSystem();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setColumns($columns)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColumns', [$columns]);

        return parent::setColumns($columns);
    }

    /**
     * {@inheritDoc}
     */
    public function getColumns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColumns', []);

        return parent::getColumns();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilters($filters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilters', [$filters]);

        return parent::setFilters($filters);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilters', []);

        return parent::getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function getFilterValue($column)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilterValue', [$column]);

        return parent::getFilterValue($column);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilterValues($column)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilterValues', [$column]);

        return parent::getFilterValues($column);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getTableOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTableOrder', []);

        return parent::getTableOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setTableOrder(array $tableOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTableOrder', [$tableOrder]);

        return parent::setTableOrder($tableOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getGraphs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGraphs', []);

        return parent::getGraphs();
    }

    /**
     * {@inheritDoc}
     */
    public function setGraphs(array $graphs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGraphs', [$graphs]);

        return parent::setGraphs($graphs);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupBy', []);

        return parent::getGroupBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupBy(array $groupBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupBy', [$groupBy]);

        return parent::setGroupBy($groupBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getAggregators()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAggregators', []);

        return parent::getAggregators();
    }

    /**
     * {@inheritDoc}
     */
    public function getAggregatorColumns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAggregatorColumns', []);

        return parent::getAggregatorColumns();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderColumns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderColumns', []);

        return parent::getOrderColumns();
    }

    /**
     * {@inheritDoc}
     */
    public function getSelectAndAggregatorAndOrderAndGroupByColumns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSelectAndAggregatorAndOrderAndGroupByColumns', []);

        return parent::getSelectAndAggregatorAndOrderAndGroupByColumns();
    }

    /**
     * {@inheritDoc}
     */
    public function getSelectAndAggregatorColumns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSelectAndAggregatorColumns', []);

        return parent::getSelectAndAggregatorColumns();
    }

    /**
     * {@inheritDoc}
     */
    public function setAggregators(array $aggregators)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAggregators', [$aggregators]);

        return parent::setAggregators($aggregators);
    }

    /**
     * {@inheritDoc}
     */
    public function setSettings(array $settings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSettings', [$settings]);

        return parent::setSettings($settings);
    }

    /**
     * {@inheritDoc}
     */
    public function getSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSettings', []);

        return parent::getSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function isScheduled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isScheduled', []);

        return parent::isScheduled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsScheduled($isScheduled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsScheduled', [$isScheduled]);

        return parent::setIsScheduled($isScheduled);
    }

    /**
     * {@inheritDoc}
     */
    public function getToAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToAddress', []);

        return parent::getToAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setToAddress($toAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToAddress', [$toAddress]);

        return parent::setToAddress($toAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getScheduleUnit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScheduleUnit', []);

        return parent::getScheduleUnit();
    }

    /**
     * {@inheritDoc}
     */
    public function setScheduleUnit($scheduleUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScheduleUnit', [$scheduleUnit]);

        return parent::setScheduleUnit($scheduleUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getScheduleDay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScheduleDay', []);

        return parent::getScheduleDay();
    }

    /**
     * {@inheritDoc}
     */
    public function setScheduleDay($scheduleDay)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScheduleDay', [$scheduleDay]);

        return parent::setScheduleDay($scheduleDay);
    }

    /**
     * {@inheritDoc}
     */
    public function getScheduleMonthFrequency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScheduleMonthFrequency', []);

        return parent::getScheduleMonthFrequency();
    }

    /**
     * {@inheritDoc}
     */
    public function setScheduleMonthFrequency($scheduleMonthFrequency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScheduleMonthFrequency', [$scheduleMonthFrequency]);

        return parent::setScheduleMonthFrequency($scheduleMonthFrequency);
    }

    /**
     * {@inheritDoc}
     */
    public function setAsNotScheduled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsNotScheduled', []);

        return parent::setAsNotScheduled();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsScheduledNow(string $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsScheduledNow', [$email]);

        parent::setAsScheduledNow($email);
    }

    /**
     * {@inheritDoc}
     */
    public function ensureIsDailyScheduled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'ensureIsDailyScheduled', []);

        return parent::ensureIsDailyScheduled();
    }

    /**
     * {@inheritDoc}
     */
    public function ensureIsMonthlyScheduled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'ensureIsMonthlyScheduled', []);

        return parent::ensureIsMonthlyScheduled();
    }

    /**
     * {@inheritDoc}
     */
    public function ensureIsWeeklyScheduled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'ensureIsWeeklyScheduled', []);

        return parent::ensureIsWeeklyScheduled();
    }

    /**
     * {@inheritDoc}
     */
    public function isScheduledNow(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isScheduledNow', []);

        return parent::isScheduledNow();
    }

    /**
     * {@inheritDoc}
     */
    public function isScheduledDaily()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isScheduledDaily', []);

        return parent::isScheduledDaily();
    }

    /**
     * {@inheritDoc}
     */
    public function isScheduledWeekly()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isScheduledWeekly', []);

        return parent::isScheduledWeekly();
    }

    /**
     * {@inheritDoc}
     */
    public function isScheduledMonthly()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isScheduledMonthly', []);

        return parent::isScheduledMonthly();
    }

    /**
     * {@inheritDoc}
     */
    public function isScheduledWeekDays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isScheduledWeekDays', []);

        return parent::isScheduledWeekDays();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        return parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        return parent::setChanges($changes);
    }

}
