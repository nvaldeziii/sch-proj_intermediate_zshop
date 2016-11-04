<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Bestsellers\View;

use XLite\View\CacheableTrait;

/**
 * abstract Bestsellers view
 *
 */
abstract class ABestsellers extends \XLite\View\ItemsList\Product\Customer\ACustomer
{
    use CacheableTrait;

    /**
     * Widget parameter names
     */

    const PARAM_ROOT_ID     = 'rootId';
    const PARAM_USE_NODE    = 'useNode';
    const PARAM_CATEGORY_ID = 'category_id';

    /**
     * Category id
     *
     * @var mixed
     */
    protected $rootCategoryId = null;

    /**
     * Bestsellers products
     *
     * @var mixed
     */
    protected $bestsellProducts = null;

    /**
     * Define and set widget attributes; initialize widget
     *
     * @param array $params Widget params OPTIONAL
     *
     * @return void
     */
    public function __construct(array $params = array())
    {
        parent::__construct($params);

        unset($this->sortByModes[static::SORT_BY_MODE_AMOUNT]);
    }

    /**
     * Get title
     *
     * @return string
     */
    protected function getHead()
    {
        return 'Bestsellers';
    }

    /**
     * Return class name for the list pager
     *
     * @return string
     */
    protected function getPagerClass()
    {
        return '\XLite\Module\CDev\Bestsellers\View\Pager\Pager';
    }

    /**
     * Define widget parameters
     *
     * @return void
     */
    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += array(
            static::PARAM_USE_NODE => new \XLite\Model\WidgetParam\TypeCheckbox(
                'Show products only for current category', true, true
            ),
            static::PARAM_ROOT_ID => new \XLite\Model\WidgetParam\ObjectId\Category(
                'Root category Id', 0, true, true
            ),
            static::PARAM_CATEGORY_ID => new \XLite\Model\WidgetParam\ObjectId\Category(
                'Category ID', 0, false
            ),
        );

        unset($this->widgetParams[static::PARAM_SHOW_SORT_BY_SELECTOR]);
    }

    /**
     * Define so called "request" parameters
     *
     * @return void
     */
    protected function defineRequestParams()
    {
        parent::defineRequestParams();

        $this->requestParams[] = static::PARAM_CATEGORY_ID;
    }

    /**
     * Return category Id to use
     *
     * @return integer
     */
    protected function getRootId()
    {
        if (!isset($this->rootCategoryId)) {
            $this->rootCategoryId = $this->getParam(static::PARAM_USE_NODE)
                ? intval(\XLite\Core\Request::getInstance()->category_id)
                : $this->getParam(static::PARAM_ROOT_ID);

        }

        return $this->rootCategoryId;
    }

    /**
     * Register the CSS classes for this block
     *
     * @return string
     */
    protected function getBlockClasses()
    {
        return parent::getBlockClasses() . ' block-bestsellers';
    }
}
