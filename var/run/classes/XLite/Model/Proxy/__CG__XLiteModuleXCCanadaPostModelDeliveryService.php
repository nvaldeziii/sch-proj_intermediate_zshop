<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\XC\CanadaPost\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DeliveryService extends \XLite\Module\XC\CanadaPost\Model\DeliveryService implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'code', 'countryCode', 'name', 'expiry', 'maxWeight', 'minWeight', 'maxLength', 'minLength', 'maxWidth', 'minWidth', 'maxHeight', 'minHeight', 'lengthPlusGirthMax', 'lengthHeightWidthSumMax', 'oversizeLimit', 'densityFactor', 'canShipInMailingTube', 'canShipUnpackaged', 'allowedAsReturnService', 'options');
        }

        return array('__isInitialized__', 'id', 'code', 'countryCode', 'name', 'expiry', 'maxWeight', 'minWeight', 'maxLength', 'minLength', 'maxWidth', 'minWidth', 'maxHeight', 'minHeight', 'lengthPlusGirthMax', 'lengthHeightWidthSumMax', 'oversizeLimit', 'densityFactor', 'canShipInMailingTube', 'canShipUnpackaged', 'allowedAsReturnService', 'options');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DeliveryService $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function addOption(\XLite\Module\XC\CanadaPost\Model\DeliveryService\Option $newOption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOption', array($newOption));

        return parent::addOption($newOption);
    }

    /**
     * {@inheritDoc}
     */
    public function isExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExpired', array());

        return parent::isExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function updateExpiry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateExpiry', array());

        return parent::updateExpiry();
    }

    /**
     * {@inheritDoc}
     */
    public function prepareBeforeSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareBeforeSave', array());

        return parent::prepareBeforeSave();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountryCode($countryCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountryCode', array($countryCode));

        return parent::setCountryCode($countryCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryCode', array());

        return parent::getCountryCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiry($expiry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiry', array($expiry));

        return parent::setExpiry($expiry);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpiry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpiry', array());

        return parent::getExpiry();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxWeight($maxWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxWeight', array($maxWeight));

        return parent::setMaxWeight($maxWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxWeight', array());

        return parent::getMaxWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinWeight($minWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinWeight', array($minWeight));

        return parent::setMinWeight($minWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinWeight', array());

        return parent::getMinWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxLength($maxLength)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxLength', array($maxLength));

        return parent::setMaxLength($maxLength);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxLength()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxLength', array());

        return parent::getMaxLength();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinLength($minLength)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinLength', array($minLength));

        return parent::setMinLength($minLength);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinLength()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinLength', array());

        return parent::getMinLength();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxWidth($maxWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxWidth', array($maxWidth));

        return parent::setMaxWidth($maxWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxWidth', array());

        return parent::getMaxWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinWidth($minWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinWidth', array($minWidth));

        return parent::setMinWidth($minWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinWidth', array());

        return parent::getMinWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxHeight($maxHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxHeight', array($maxHeight));

        return parent::setMaxHeight($maxHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxHeight', array());

        return parent::getMaxHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinHeight($minHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinHeight', array($minHeight));

        return parent::setMinHeight($minHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinHeight', array());

        return parent::getMinHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setLengthPlusGirthMax($lengthPlusGirthMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLengthPlusGirthMax', array($lengthPlusGirthMax));

        return parent::setLengthPlusGirthMax($lengthPlusGirthMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getLengthPlusGirthMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLengthPlusGirthMax', array());

        return parent::getLengthPlusGirthMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setLengthHeightWidthSumMax($lengthHeightWidthSumMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLengthHeightWidthSumMax', array($lengthHeightWidthSumMax));

        return parent::setLengthHeightWidthSumMax($lengthHeightWidthSumMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getLengthHeightWidthSumMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLengthHeightWidthSumMax', array());

        return parent::getLengthHeightWidthSumMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setOversizeLimit($oversizeLimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOversizeLimit', array($oversizeLimit));

        return parent::setOversizeLimit($oversizeLimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getOversizeLimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOversizeLimit', array());

        return parent::getOversizeLimit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDensityFactor($densityFactor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDensityFactor', array($densityFactor));

        return parent::setDensityFactor($densityFactor);
    }

    /**
     * {@inheritDoc}
     */
    public function getDensityFactor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDensityFactor', array());

        return parent::getDensityFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanShipInMailingTube($canShipInMailingTube)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanShipInMailingTube', array($canShipInMailingTube));

        return parent::setCanShipInMailingTube($canShipInMailingTube);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanShipInMailingTube()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanShipInMailingTube', array());

        return parent::getCanShipInMailingTube();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanShipUnpackaged($canShipUnpackaged)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanShipUnpackaged', array($canShipUnpackaged));

        return parent::setCanShipUnpackaged($canShipUnpackaged);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanShipUnpackaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanShipUnpackaged', array());

        return parent::getCanShipUnpackaged();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllowedAsReturnService($allowedAsReturnService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllowedAsReturnService', array($allowedAsReturnService));

        return parent::setAllowedAsReturnService($allowedAsReturnService);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowedAsReturnService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllowedAsReturnService', array());

        return parent::getAllowedAsReturnService();
    }

    /**
     * {@inheritDoc}
     */
    public function addOptions(\XLite\Module\XC\CanadaPost\Model\DeliveryService\Option $options)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOptions', array($options));

        return parent::addOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', array());

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', array($data));

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', array($name));

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', array());

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', array());

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', array());

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $args = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($method, $args));

        return parent::__call($method, $args);
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', array($name));

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', array($property, $value));

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', array($property));

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', array());

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', array());

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', array());

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', array());

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', array());

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', array());

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', array());

        return parent::create();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', array());

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', array($field, $data));

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', array());

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', array($class));

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', array($type));

        return parent::prepareEntityBeforeCommit($type);
    }

}
