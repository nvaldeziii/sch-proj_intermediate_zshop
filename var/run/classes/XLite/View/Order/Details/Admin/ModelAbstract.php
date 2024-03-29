<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Order\Details\Admin;

/**
 * Model
 */
abstract class ModelAbstract extends \XLite\View\Order\Details\Base\AModel
{
    /**
     * Main order info
     *
     * @var array
     */
    protected $schemaMain = array(
        'order_id' => array(
            self::SCHEMA_CLASS => '\XLite\View\FormField\Label',
            self::SCHEMA_LABEL => 'Order ID',
        ),
        'date' => array(
            self::SCHEMA_CLASS => '\XLite\View\FormField\Label',
            self::SCHEMA_LABEL => 'Order date',
        ),
        'paymentStatus' => array(
            self::SCHEMA_CLASS => '\XLite\View\FormField\Select\OrderStatus\Payment',
            self::SCHEMA_LABEL => 'Payment order status',
        ),
        'shippingStatus' => array(
            self::SCHEMA_CLASS => '\XLite\View\FormField\Select\OrderStatus\Shipping',
            self::SCHEMA_LABEL => 'Shipping order status',
        ),
    );

    /**
     * Inline widgets storage
     *
     * @var   array
     */
    protected $widgets = array();

    /**
     * Remove order_id field from mapping
     *
     * @var array
     */
    protected $excludedFields = array('order_id', 'shippingStatus', 'paymentStatus', 'adminNotes', 'notes');

    /**
     * Modifiers
     *
     * @var   array
     */
    protected $modifiers;

    /**
     * Save current form reference and sections list, and initialize the cache
     *
     * @param array $params   Widget params OPTIONAL
     * @param array $sections Sections list OPTIONAL
     */
    public function __construct(array $params = array(), array $sections = array())
    {
        $this->sections['main'] = 'Info';

        parent::__construct($params, $sections);
    }

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'order/invoice/style.css';

        return $list;
    }

    /**
     * Return model object to use: temporary
     *
     * @return \XLite\Model\Order
     */
    public function getModelObject()
    {
        $object = parent::getModelObject();

        if ('recalculate' === $this->currentAction) {
            // Get temporary order (force to create this)
            $object = \XLite\Controller\Admin\Order::getTemporaryOrder($object->getOrderId(), true);

        } else {
            // Get temporary order if exists otherwise get current object
            $object = \XLite\Controller\Admin\Order::getTemporaryOrder($object->getOrderId(), false) ?: $object;
        }

        return $object;
    }

    /**
     * Return true if form is editable
     *
     * @return boolean
     */
    protected function isOrderEditable()
    {
        return \XLite::getController()->isOrderEditable();
    }

    /**
     * Alias
     *
     * @return \XLite\Model\Order
     */
    protected function getOrder()
    {
        return $this->getModelObject();
    }

    /**
     * Get original order object
     *
     * @return \XLite\Model\Order
     */
    protected function getOriginalOrder()
    {
        return $this->getParam(self::PARAM_MODEL_OBJECT);
    }

    /**
     * Format order date
     *
     * @param array $data Widget params
     *
     * @return array
     */
    protected function prepareFieldParamsDate(array $data)
    {
        $data[self::SCHEMA_VALUE] = $this->formatDayTime($this->getModelObject()->getDate());

        return $data;
    }

    // {{{ Inline complex fields

    /**
     * Get complex field
     *
     * @param string $name Field or fieldset name
     *
     * @return mixed
     */
    public function getComplexField($name)
    {
        if (!isset($this->widgets[$name])) {
            $method = 'define' . ucfirst($name);

            if (method_exists($this, $method)) {
                $this->widgets[$name] = $this->$method();
            }
        }

        return isset($this->widgets[$name]) ? $this->widgets[$name] : null;
    }

    /**
     * Get complex field
     *
     * @param string $name Field or fieldset name
     *
     * @return mixed
     */
    public function displayComplexField($name)
    {
        $widgets = $this->getComplexField($name);

        if (!is_array($widgets)) {
            $widgets = array($widgets);
        }

        foreach ($widgets as $widget) {
            $widget->display();
        }
    }

    /**
     * Get complex fields
     *
     * @return array
     */
    protected function getComplexFields()
    {
        $list = array();

        foreach ($this->defineComplexFieldNames() as $name) {
            $widgets = $this->getComplexField($name);
            if ($widgets) {
                if (!is_array($widgets)) {
                    $widgets = array($widgets);
                }

                $list[$name] = $widgets;
            }
        }

        return $list;
    }

    /**
     * Get writable complex fields
     *
     * @return array
     */
    protected function getWritableComplexFields()
    {
        $list = $this->getComplexFields();

        $result = array();
        foreach ($this->defineWritableComplexFieldNames() as $name) {
            if (isset($list[$name])) {
                $result[$name] = $list[$name];
            }
        }

        return $result;
    }

    /**
     * Define payment methods
     *
     * @return array
     */
    protected function definePaymentMethods()
    {
        $order = $this->getOrder();

        $transactions = $order->getActivePaymentTransactions();
        if (!$transactions && count($order->getPaymentTransactions()) > 0) {
            $transactions = array($order->getPaymentTransactions()->last());
        }

        $widgets = array();
        if (count($transactions) > 1) {
            foreach ($transactions as $transaction) {
                $widgets[] = $this->getWidget(
                    array(
                        \XLite\View\FormField\Inline\AInline::PARAM_ENTITY          => $transaction,
                        \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME      => 'paymentMethod',
                        \XLite\View\FormField\Inline\AInline::FIELD_NAME            => 'paymentMethods',
                        \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'paymentMethods',
                        \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY       => !$this->isPaymentMethodEditable($transaction),
                    ),
                    'XLite\View\FormField\Inline\Select\PaymentMethod'
                );
            }
        } else {
            foreach ($transactions as $transaction) {
                $widgets[] = $this->getWidget(
                    array(
                        \XLite\View\FormField\Inline\AInline::PARAM_ENTITY          => $transaction,
                        \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME      => 'paymentMethod',
                        \XLite\View\FormField\Inline\AInline::FIELD_NAME            => 'paymentMethod',
                        \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'paymentMethod',
                        \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY       => !$this->isPaymentMethodEditable($transaction),
                    ),
                    'XLite\View\FormField\Inline\Select\PaymentMethod'
                );
            }
        }

        return $widgets;
    }

    /**
     * Define payment data
     *
     * @return array
     */
    protected function definePaymentData()
    {
        $order = $this->getOrder();

        $transactions = $order->getActivePaymentTransactions();
        if (!$transactions && count($order->getPaymentTransactions()) > 0) {
            $transactions = array($order->getPaymentTransactions()->last());
        }

        $widgets = array();
        foreach ($transactions as $transaction) {
            $isEditable = $this->isPaymentMethodEditable($transaction);
            $widgets[] = $this->getWidget(
                array(
                    \XLite\View\FormField\Inline\AInline::PARAM_ENTITY          => $transaction,
                    \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME      => 'transaction-' . $transaction->getTransactionId(),
                    \XLite\View\FormField\Inline\AInline::FIELD_NAME            => 'paymentData',
                    \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'paymentData',
                    \XLite\View\FormField\Inline\AInline::PARAM_VIEW_TIP        => $isEditable ? 'Edit payment method data' : null,
                    \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY       => !$isEditable,
                ),
                'XLite\View\FormField\Inline\Popup\PaymentData'
            );
        }

        return $widgets;
    }

    /**
     * Define payment methods
     *
     * @return \XLite\View\FormField\Inline\Select\ShippingMethod
     */
    protected function defineShippingMethod()
    {
        $widget = null;

        $modifier = $this->getOrder()->getModifier(\XLite\Model\Base\Surcharge::TYPE_SHIPPING, 'SHIPPING');
        if ($modifier) {
            $widget = $this->getWidget(
                array(
                    \XLite\View\FormField\Inline\AInline::PARAM_ENTITY    => $this->getOrder(),
                    \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME => 'shippingId',
                    \XLite\View\FormField\Inline\AInline::FIELD_NAME     => 'shippingId',
                    \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'shippingId',
                    \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY  => !$this->isOrderEditable(),
                ),
                'XLite\View\FormField\Inline\Select\ShippingMethod'
            );
        }

        return $widget;
    }

    /**
     * Define billing address
     *
     * @return array
     */
    protected function defineBillingAddress()
    {
        return $this->getWidget(
            array(
                \XLite\View\FormField\Inline\AInline::PARAM_ENTITY    => $this->getOrder()->getProfile(),
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME => 'billingAddress',
                \XLite\View\FormField\Inline\AInline::FIELD_NAME     => 'billingAddress',
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'billingAddress',
                \XLite\View\FormField\Inline\AInline::PARAM_VIEW_TIP   => 'Edit billing address',
                \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY  => !$this->isOrderEditable(),
            ),
            'XLite\View\FormField\Inline\Popup\Address\Order'
        );
    }

    /**
     * Define shipping address
     *
     * @return array
     */
    protected function defineShippingAddress()
    {
        return $this->getWidget(
            array(
                \XLite\View\FormField\Inline\AInline::PARAM_ENTITY    => $this->getOrder()->getProfile(),
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME => 'shippingAddress',
                \XLite\View\FormField\Inline\AInline::FIELD_NAME     => 'shippingAddress',
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'shippingAddress',
                \XLite\View\FormField\Inline\AInline::PARAM_VIEW_TIP   => 'Edit shipping address',
                \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY  => !$this->isOrderEditable(),
            ),
            'XLite\View\FormField\Inline\Popup\Address\Order'
        );
    }

    /**
     * Define order staff note
     *
     * @return array
     */
    protected function defineStaffNote()
    {
        return $this->getWidget(
            array(
                \XLite\View\FormField\Inline\AInline::PARAM_ENTITY    => $this->getOrder(),
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME => 'adminNotes',
                \XLite\View\FormField\Inline\AInline::FIELD_NAME     => 'adminNotes',
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'adminNotes',
            ),
            'XLite\View\FormField\Inline\Textarea\OrderStaffNote'
        );
    }

    /**
     * Define order customer note
     *
     * @return array
     */
    protected function defineCustomerNote()
    {
        return $this->getWidget(
            array(
                \XLite\View\FormField\Inline\AInline::PARAM_ENTITY    => $this->getOrder(),
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME => 'notes',
                \XLite\View\FormField\Inline\AInline::FIELD_NAME     => 'notes',
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'notes',
            ),
            'XLite\View\FormField\Inline\Textarea\OrderCustomerNote'
        );
    }

    /**
     * Define modifiers totals
     *
     * @return array
     */
    protected function defineModifiersTotals()
    {
        $list = array();
        foreach ($this->getSurchargeTotals() as $modifier) {
            if (!empty($modifier['formField'])) {
                $list[] = $modifier['formField'];
            }
        }

        return $list;
    }

    /**
     * Check - payment method is editable or not
     *
     * @param \XLite\Model\Payment\Transaction $transaction Payment transaction
     *
     * @return boolean
     */
    protected function isPaymentMethodEditable(\XLite\Model\Payment\Transaction $transaction)
    {
        return $this->isOrderEditable()
            && $transaction->getPaymentMethod()
            && $transaction->getPaymentMethod()->getType() === \XLite\Model\Payment\Method::TYPE_OFFLINE;
    }

    // }}}

    // {{{ Order modifiers

    /**
     * Get order surcharge totals
     *
     * @return array
     */
    public function getSurchargeTotals()
    {
        if (null === $this->modifiers) {
            $this->modifiers = $this->defineSurchargeTotals();
        }

        return $this->modifiers;
    }

    /**
     * Define surcharge totals
     *
     * @return array
     */
    protected function defineSurchargeTotals()
    {
        $list = \XLite::getController()->getSurchargeTotals();

        foreach ($list as $code => $modifier) {
            $method = 'define' . ucfirst(strtolower($code)) . 'ModifierWidget';
            if (method_exists($this, $method)) {
                $list[$code]['formField'] = $this->$method($modifier);

            } else {
                $list[$code]['formField'] = $this->defineDefaultModifierWidget($modifier);
            }
        }

        return $list;
    }

    /**
     * Define default modifier form field widget
     *
     * @param array $modifier Modifier
     *
     * @return \XLite\View\FormField\Inline\AInline
     */
    protected function defineDefaultModifierWidget(array $modifier)
    {
        return $this->getWidget(
            array(
                \XLite\View\FormField\Inline\AInline::PARAM_ENTITY    => $modifier['object'],
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAME => $modifier['object']->getCode(),
                \XLite\View\FormField\Inline\AInline::FIELD_NAME     => $modifier['object']->getCode(),
                \XLite\View\FormField\Inline\AInline::PARAM_FIELD_NAMESPACE => 'modifiersTotals',
                \XLite\View\FormField\Inline\AInline::PARAM_VIEW_ONLY  => !$this->isOrderEditable(),
            ),
            'XLite\View\FormField\Inline\Input\Text\Price\OrderModifierTotal'
        );
    }

    // }}}

    // {{{ Additional complex data

    /**
     * Populate model object properties by the passed data
     *
     * @param array $data Data to set
     *
     * @return void
     */
    protected function setModelProperties(array $data)
    {
        parent::setModelProperties($data);

        if ($this->prepareInlineWidgets()) {
            $this->saveInlineWidgets();
        }
    }

    /**
     * Prepare inline widgets
     *
     * @return array
     */
    protected function prepareInlineWidgets()
    {
        $flag = true;
        foreach ($this->getWritableComplexFields() as $widgets) {
            foreach ($widgets as $widget) {
                $flag = $this->prepareInlineWidget($widget) && $flag;
            }
        }

        return $flag;
    }

    /**
     * Prepare and validate inline widget
     *
     * @param \XLite\View\FormField\Inline\AInline $widget Widget
     *
     * @return boolean
     */
    protected function prepareInlineWidget(\XLite\View\FormField\Inline\AInline $widget)
    {
        $widget->setValueFromRequest();
        list($flag, $message) = $widget->validate();
        if (!$flag) {
            \XLite\Core\TopMessage::getInstance()->addError($message);
        }

        return $flag;
    }

    /**
     * Save inline widgets
     *
     * @return void
     */
    protected function saveInlineWidgets()
    {
        $this->preprocessAddresses();

        $this->processAddresses();

        foreach ($this->getWritableComplexFields() as $widgets) {
            foreach ($widgets as $widget) {
                $widget->saveValue();
            }
        }
    }

    /**
     * Preprocess addresses
     * TODO: Need to be refactored
     *
     * @return void
     */
    protected function preprocessAddresses()
    {
        $origOrder = $this->getOriginalOrder();

        if ($origOrder->getOrderId() != $this->getOrder()->getOrderId()) {
            // Correct addresses IDs if order is temporary

            $request = \XLite\Core\Request::getInstance();
            $billingAddress = $request->billingAddress;
            $shippingAddress = $request->shippingAddress;

            $profile = $this->getOrder()->getProfile();

            if (!empty($billingAddress['id'])) {
                // Set billing address by ID
                $id = (int) $billingAddress['id'];

                $billAddressObj = \XLite\Core\Database::getRepo('XLite\Model\Address')->find($id);

                if ($billAddressObj
                    && $billAddressObj->getProfile()->getProfileId() == $origOrder->getProfile()->getProfileId()
                ) {
                    foreach ($profile->getAddresses() as $address) {
                        if ($address->isEqualAddress($billAddressObj)) {
                            $newBillingAddressId = $address->getAddressId();
                            $billingAddress['id'] = $newBillingAddressId;
                            $request->billingAddress = $billingAddress;
                            break;
                        }
                    }
                }
            }

            if (!empty($shippingAddress['id'])) {
                // Set shipping address by ID
                $id = (int) $shippingAddress['id'];

                if ($shippingAddress['id'] == $billingAddress['id'] && !empty($newBillingAddressId)) {
                    $newShippingAddressId = $newBillingAddressId;

                } else {
                    $shipAddressObj = \XLite\Core\Database::getRepo('XLite\Model\Address')->find($id);

                    if ($shipAddressObj
                        && $shipAddressObj->getProfile()->getProfileId() == $origOrder->getProfile()->getProfileId()
                    ) {
                        foreach ($profile->getAddresses() as $address) {
                            if ($address->isEqualAddress($shipAddressObj)) {
                                $shippingAddress['id'] = $address->getAddressId();
                                $request->shippingAddress = $shippingAddress;
                                break;
                            }
                        }
                    }
                }
            } // if (!empty($shippingAddress['id']))
        }
    }

    /**
     * Process addresses
     * TODO: Need to be refactored
     *
     * @return void
     */
    protected function processAddresses()
    {
        $request = \XLite\Core\Request::getInstance();

        $billingAddress = $request->billingAddress;
        $shippingAddress = $request->shippingAddress;

        $profile = $this->getOrder()->getProfile();
        if (!empty($billingAddress['id'])) {
            // Set billing address by ID
            $id = (int) $billingAddress['id'];
            if ($id != $profile->getBillingAddress()->getAddressId()) {
                foreach ($profile->getAddresses() as $address) {
                    $address->setIsBilling($address->getAddressId() == $id);
                }

                // Address from original profile
                if (!$profile->getBillingAddress()) {
                    foreach ($this->getOrder()->getOrigProfile()->getAddresses() as $address) {
                        if ($id == $address->getAddressId()) {
                            $address = $address->cloneEntity();
                            $profile->addAddresses($address);
                            $address->setProfile($profile);
                            $address->setIsBilling(true);
                            $address->setIsShipping(false);
                            break;
                        }
                    }
                }

                // Address not found - set first
                if (!$profile->getBillingAddress() && $profile->getAddresses()->first()) {
                    $profile->getAddresses()->first()->setIsBilling(true);
                }

            }
        }

        if (!empty($shippingAddress['id'])
            && $shippingAddress['id'] == $billingAddress['id']
        ) {
            $shippingAddress['same_as_billing'] = true;
        }

        if (!empty($shippingAddress['same_as_billing'])) {
            // Set shipping address as same-as-billing
            if (!$profile->getBillingAddress()
                || !$profile->getBillingAddress()->getIsShipping()
            ) {
                foreach ($profile->getAddresses() as $address) {
                    $address->setIsShipping(false);
                }
                $profile->getBillingAddress()->setIsShipping(true);
            }

        } elseif (!empty($shippingAddress['id'])) {
            // Set shipping address by ID
            $id = (int) $shippingAddress['id'];
            if ($id != $profile->getShippingAddress()->getAddressId()) {
                foreach ($profile->getAddresses() as $address) {
                    $address->setIsShipping($address->getAddressId() == $id);
                }

                // Address from original profile
                if (!$profile->getShippingAddress()) {
                    foreach ($this->getOrder()->getOrigProfile()->getAddresses() as $address) {
                        if ($id == $address->getAddressId()) {
                            $address = $address->cloneEntity();
                            $profile->addAddresses($address);
                            $address->setProfile($profile);
                            $address->setIsBilling(false);
                            $address->setIsShipping(true);
                            break;
                        }
                    }
                }

                // Address not found - set first
                if (!$profile->getShippingAddress() && $profile->getAddresses()->first()) {
                    $profile->getAddresses()->first()->setIsShipping(true);
                }
            }

        } else {
            // Clone billing address as shipping
            if ($profile->getShippingAddress() && $profile->getShippingAddress()->getIsBilling()) {
                $address = $profile->getShippingAddress()->cloneEntity();
                $address->setIsBilling(false);
                $profile->getShippingAddress()->setIsShipping(false);

                $profile->addAddresses($address);
                $address->setProfile($profile);

            } elseif ($this->getOrder()->isShippable() && !$profile->getShippingAddress() ) {
                // Order is shippable but shipping address is not defined
                // Set billing address as shipping
                $profile->getBillingAddress()->setIsShipping(true);
                $shippingAddress['same_as_billing'] = true;
            }
        }

        $request->billingAddress = $billingAddress;
        $request->shippingAddress = $shippingAddress;
    }

    /**
     * Define complex field names
     *
     * @return array
     */
    protected function defineComplexFieldNames()
    {
        return array(
            'paymentMethods',
            'paymentData',
            'shippingMethod',
            'billingAddress',
            'shippingAddress',
            'staffNote',
            'customerNote',
            'modifiersTotals',
        );
    }

    /**
     * Define writable complex field names
     *
     * @return array
     */
    protected function defineWritableComplexFieldNames()
    {
        return array(
            'paymentMethods',
            'paymentData',
            'shippingMethod',
            'billingAddress',
            'shippingAddress',
            'modifiersTotals',
        );
    }
    // }}}

    // {{{ Actions

    /**
     * Perform certain action for the model object
     *
     * @return boolean
     */
    protected function performActionRecalculate()
    {
        $this->performActionModify();

        $this->getModelObject()->recalculate();

        \XLite\Core\Database::getEM()->flush();

        return true;
    }

    /**
     * Perform certain action for the model object
     *
     * @return boolean
     */
    protected function performActionSave()
    {
        return $this->performActionRecalculate();
    }

    // }}}
}
