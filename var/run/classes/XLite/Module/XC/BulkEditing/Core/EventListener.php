<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\BulkEditing\Core;

/**
 * Event listener (common)
 */
 class EventListener extends \XLite\Core\EventListenerAbstract implements \XLite\Base\IDecorator
{
    /**
     * Get listeners
     *
     * @return array
     */
    protected function getListeners()
    {
        return array_replace(
            parent::getListeners(),
            [
                'bulkEdit' => ['XLite\Module\XC\BulkEditing\Core\EventListener\BulkEdit'],
            ]
        );
    }
}