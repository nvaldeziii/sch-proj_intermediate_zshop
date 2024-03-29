<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Upselling\View\SearchPanel;

/**
 * Main admin orders list search panel
 */
class Main extends \XLite\View\SearchPanel\ProductSelections\Admin\Main
{
    /**
     * Get form class
     *
     * @return string
     */
    protected function getFormClass()
    {
        return '\XLite\Module\XC\Upselling\View\Form\ItemsList\ProductSelection\Search';
    }

    /**
     * Prepare the value of the condition
     *
     * @param array $condition Condition data
     *
     * @return mixed
     */
    protected function prepareConditionValue($condition)
    {
        $result = parent::prepareConditionValue($condition);
        switch ($condition[static::CONDITION_CELL]) {
            case 'substring':
            case 'categoryId':
                $result = '';
                break;

            default:
                break;
        }

        return $result;
    }
}
