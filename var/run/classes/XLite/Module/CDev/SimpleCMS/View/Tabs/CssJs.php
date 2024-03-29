<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\SimpleCMS\View\Tabs;

/**
 * Tabs related to look & feel
 */
abstract class CssJs extends \XLite\View\Tabs\CssJsAbstract implements \XLite\Base\IDecorator
{
    /**
     * Returns the list of targets where this widget is available
     *
     * @return string[]
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();
        $list[] = 'logo_favicon';

        return $list;
    }


    /**
     * @return array
     */
    protected function defineTabs()
    {
        $list = parent::defineTabs();
        $list['logo_favicon'] = [
            'weight'   => 100,
            'title'    => static::t('Logo & Favicon'),
            'template' => 'settings/body.twig',
        ];

        return $list;
    }
}
