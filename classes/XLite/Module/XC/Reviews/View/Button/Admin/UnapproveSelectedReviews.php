<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Reviews\View\Button\Admin;

/**
 * 'Unapprove selected reviews' button
 */
class UnapproveSelectedReviews extends \XLite\View\Button\Regular
{
    /**
     * getDefaultLabel
     *
     * @return string
     */
    protected function getDefaultLabel()
    {
        return 'Unapprove selected';
    }

    /**
     * getDefaultAction
     *
     * @return string
     */
    protected function getDefaultAction()
    {
        return 'unapprove';
    }

    /**
     * Return CSS classes
     *
     * @return string
     */
    protected function getClass()
    {
        return parent::getClass() . ' action link list-action';
    }
}
