<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Sitemap\View\Sitemap;

/**
 *  This widget draws a tree's branch
 *
 * @Decorator\Depend ("CDev\Sale")
 */
 class BranchSale extends \XLite\Module\XC\Sitemap\View\Sitemap\BranchSimpleCMS implements \XLite\Base\IDecorator
{

    /**
     * Get children
     * 
     * @param string  $type Page type
     * @param integer $id   Page ID
     *  
     * @return array
     */
    protected function getChildren($type, $id)
    {
        $result = parent::getChildren($type, $id);

        if ($type == static::PAGE_CATEGORY && $id == \XLite\Core\Database::getRepo('XLite\Model\Category')->getRootCategoryId()) {
            array_unshift($result, array(
                'type' => static::PAGE_STATIC,
                'id'   => '997',
                'name' => static::t('Sale'),
                'url'  => static::buildURL('sale_products'),
            ));        
        }

        return $result;
    }

}
