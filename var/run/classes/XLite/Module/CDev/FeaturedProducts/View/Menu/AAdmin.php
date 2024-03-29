<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\FeaturedProducts\View\Menu;

/**
 * Abstract admin menu
 */
abstract class AAdmin extends \XLite\View\Menu\Admin\AAdminAbstract implements \XLite\Base\IDecorator
{
    /**
     * Initialize handler
     *
     * @return void
     */
    public function init()
    {
        parent::init();

        $this->relatedTargets[\XLite\Core\Request::getInstance()->id ? 'categories' : 'front_page'][] = 'featured_products';
    }
}
