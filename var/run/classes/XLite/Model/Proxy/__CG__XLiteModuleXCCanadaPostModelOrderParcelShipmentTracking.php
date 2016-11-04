<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tracking extends \XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'shipment', 'deliveryOptions', 'significantEvents', 'files', 'expiry', 'pin', 'activeExists', 'archiveExists', 'destinationPostalId', 'expectedDeliveryDate', 'changedExpectedDate', 'changedExpectedDeliveryReason', 'mailedByCustomerNumber', 'mailedOnBehalfOfCustomerNumber', 'originalPin', 'serviceName', 'serviceName_2', 'customerRef_1', 'customerRef_2', 'returnPin', 'signatureImageExists', 'suppressSignature');
        }

        return array('__isInitialized__', 'id', 'shipment', 'deliveryOptions', 'significantEvents', 'files', 'expiry', 'pin', 'activeExists', 'archiveExists', 'destinationPostalId', 'expectedDeliveryDate', 'changedExpectedDate', 'changedExpectedDeliveryReason', 'mailedByCustomerNumber', 'mailedOnBehalfOfCustomerNumber', 'originalPin', 'serviceName', 'serviceName_2', 'customerRef_1', 'customerRef_2', 'returnPin', 'signatureImageExists', 'suppressSignature');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tracking $proxy) {
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
    public function addDeliveryOption(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking\DeliveryOption $newDeliveryOption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeliveryOption', array($newDeliveryOption));

        return parent::addDeliveryOption($newDeliveryOption);
    }

    /**
     * {@inheritDoc}
     */
    public function addSignificantEvent(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking\SignificantEvent $newSignificantEvent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSignificantEvent', array($newSignificantEvent));

        return parent::addSignificantEvent($newSignificantEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function setShipment(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment $shipment = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShipment', array($shipment));

        return parent::setShipment($shipment);
    }

    /**
     * {@inheritDoc}
     */
    public function addFile(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking\File $newFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFile', array($newFile));

        return parent::addFile($newFile);
    }

    /**
     * {@inheritDoc}
     */
    public function downloadFiles($flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'downloadFiles', array($flush));

        return parent::downloadFiles($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function hasFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasFiles', array());

        return parent::hasFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function getRealTrackingPin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRealTrackingPin', array());

        return parent::getRealTrackingPin();
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
    public function isExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExpired', array());

        return parent::isExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function getSignatureImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignatureImage', array());

        return parent::getSignatureImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryConfirmationCertificate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryConfirmationCertificate', array());

        return parent::getDeliveryConfirmationCertificate();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileByDocType($docType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileByDocType', array($docType));

        return parent::getFileByDocType($docType);
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
    public function setPin($pin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPin', array($pin));

        return parent::setPin($pin);
    }

    /**
     * {@inheritDoc}
     */
    public function getPin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPin', array());

        return parent::getPin();
    }

    /**
     * {@inheritDoc}
     */
    public function setActiveExists($activeExists)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActiveExists', array($activeExists));

        return parent::setActiveExists($activeExists);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveExists()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiveExists', array());

        return parent::getActiveExists();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchiveExists($archiveExists)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchiveExists', array($archiveExists));

        return parent::setArchiveExists($archiveExists);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchiveExists()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchiveExists', array());

        return parent::getArchiveExists();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationPostalId($destinationPostalId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationPostalId', array($destinationPostalId));

        return parent::setDestinationPostalId($destinationPostalId);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationPostalId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationPostalId', array());

        return parent::getDestinationPostalId();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpectedDeliveryDate', array($expectedDeliveryDate));

        return parent::setExpectedDeliveryDate($expectedDeliveryDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpectedDeliveryDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpectedDeliveryDate', array());

        return parent::getExpectedDeliveryDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setChangedExpectedDate($changedExpectedDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangedExpectedDate', array($changedExpectedDate));

        return parent::setChangedExpectedDate($changedExpectedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getChangedExpectedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangedExpectedDate', array());

        return parent::getChangedExpectedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setChangedExpectedDeliveryReason($changedExpectedDeliveryReason)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangedExpectedDeliveryReason', array($changedExpectedDeliveryReason));

        return parent::setChangedExpectedDeliveryReason($changedExpectedDeliveryReason);
    }

    /**
     * {@inheritDoc}
     */
    public function getChangedExpectedDeliveryReason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangedExpectedDeliveryReason', array());

        return parent::getChangedExpectedDeliveryReason();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailedByCustomerNumber($mailedByCustomerNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailedByCustomerNumber', array($mailedByCustomerNumber));

        return parent::setMailedByCustomerNumber($mailedByCustomerNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailedByCustomerNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailedByCustomerNumber', array());

        return parent::getMailedByCustomerNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailedOnBehalfOfCustomerNumber($mailedOnBehalfOfCustomerNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailedOnBehalfOfCustomerNumber', array($mailedOnBehalfOfCustomerNumber));

        return parent::setMailedOnBehalfOfCustomerNumber($mailedOnBehalfOfCustomerNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailedOnBehalfOfCustomerNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailedOnBehalfOfCustomerNumber', array());

        return parent::getMailedOnBehalfOfCustomerNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalPin($originalPin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalPin', array($originalPin));

        return parent::setOriginalPin($originalPin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalPin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalPin', array());

        return parent::getOriginalPin();
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceName($serviceName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceName', array($serviceName));

        return parent::setServiceName($serviceName);
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServiceName', array());

        return parent::getServiceName();
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceName2($serviceName2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceName2', array($serviceName2));

        return parent::setServiceName2($serviceName2);
    }

    /**
     * {@inheritDoc}
     */
    public function getServiceName2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServiceName2', array());

        return parent::getServiceName2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerRef1($customerRef1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerRef1', array($customerRef1));

        return parent::setCustomerRef1($customerRef1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerRef1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerRef1', array());

        return parent::getCustomerRef1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerRef2($customerRef2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerRef2', array($customerRef2));

        return parent::setCustomerRef2($customerRef2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerRef2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerRef2', array());

        return parent::getCustomerRef2();
    }

    /**
     * {@inheritDoc}
     */
    public function setReturnPin($returnPin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReturnPin', array($returnPin));

        return parent::setReturnPin($returnPin);
    }

    /**
     * {@inheritDoc}
     */
    public function getReturnPin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReturnPin', array());

        return parent::getReturnPin();
    }

    /**
     * {@inheritDoc}
     */
    public function setSignatureImageExists($signatureImageExists)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSignatureImageExists', array($signatureImageExists));

        return parent::setSignatureImageExists($signatureImageExists);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignatureImageExists()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignatureImageExists', array());

        return parent::getSignatureImageExists();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuppressSignature($suppressSignature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuppressSignature', array($suppressSignature));

        return parent::setSuppressSignature($suppressSignature);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuppressSignature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuppressSignature', array());

        return parent::getSuppressSignature();
    }

    /**
     * {@inheritDoc}
     */
    public function getShipment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShipment', array());

        return parent::getShipment();
    }

    /**
     * {@inheritDoc}
     */
    public function addDeliveryOptions(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking\DeliveryOption $deliveryOptions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeliveryOptions', array($deliveryOptions));

        return parent::addDeliveryOptions($deliveryOptions);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryOptions', array());

        return parent::getDeliveryOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addSignificantEvents(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking\SignificantEvent $significantEvents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSignificantEvents', array($significantEvents));

        return parent::addSignificantEvents($significantEvents);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignificantEvents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignificantEvents', array());

        return parent::getSignificantEvents();
    }

    /**
     * {@inheritDoc}
     */
    public function addFiles(\XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Tracking\File $files)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFiles', array($files));

        return parent::addFiles($files);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiles', array());

        return parent::getFiles();
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
