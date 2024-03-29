<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ProductFilter\Model;

/**
 * Category
 *
 */
 class Category extends \XLite\Module\CDev\GoSocial\Model\Category implements \XLite\Base\IDecorator
{
    /**
     * 'Use classes' values
     */
    const USE_CLASSES_NO     = 'N';
    const USE_CLASSES_AUTO   = 'A';
    const USE_CLASSES_DEFINE = 'D';

    /**
     * Category classes
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ManyToMany (targetEntity="XLite\Model\ProductClass", inversedBy="categories")
     * @JoinTable (name="category_class_links",
     *      joinColumns={@JoinColumn (name="category_id", referencedColumnName="category_id", onDelete="CASCADE")},
     *      inverseJoinColumns={@JoinColumn (name="class_id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     * @OrderBy   ({"position" = "ASC"})
     */
    protected $productClasses;

    /**
     * Status code
     *
     * @var string
     *
     * @Column (type="string", options={ "fixed": true }, length=1)
     */
    protected $useClasses = self::USE_CLASSES_AUTO;

    /**
     * Return list of all allowed 'Use classes' value
     *
     * @param string $status Value to get OPTIONAL
     *
     * @return array | string
     */
    public static function getAllowedUseClasses($status = null)
    {
        $list = array(
            self::USE_CLASSES_AUTO    => static::t('All classes from this category'),
            self::USE_CLASSES_NO      => static::t('Do not show the filter'),
            self::USE_CLASSES_DEFINE  => static::t('Choose classes...'),
        );

        return null !== $status
            ? (isset($list[$status]) ? $list[$status] : null)
            : $list;
    }

    /**
     * Constructor
     *
     * @param array $data Entity properties OPTIONAL
     */
    public function __construct(array $data = array())
    {
        $this->productClasses = new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct($data);
    }

    /**
     * Set status
     *
     * @param string $value Status code
     *
     * @return void
     */
    public function setStatus($value)
    {
        $this->oldStatus = $this->status != $value ? $this->status : null;
        $allowedUseClasses = static::getAllowedUseClasses();
        if (isset($allowedUseClasses[$value])) {
            $this->status = $value;
        }
    }


    /**
     * Return attribute options by category
     *
     * @param \XLite\Model\Attribute $attribute Attribute
     *
     * @return array
     */
    public function getAttributeOptionsByAttribute(\XLite\Model\Attribute $attribute)
    {
        $config = \XLite\Core\Config::getInstance()->XC->ProductFilter;

        if ($config->attributes_filter_by_category) {
            $list = null;
            $languageCode = $this->getTranslationCode();

            if ($config->attributes_filter_cache_mode) {
                $data = $this->getAttributeOptionsFromCache();
                if ($data || !is_array($data)) {
                    $data = array($languageCode => array());

                } elseif (!isset($data[$languageCode])) {
                    $data[$languageCode] = array();
                }

                if (isset($data[$languageCode][$attribute->getId()])) {
                    $list = $data[$languageCode][$attribute->getId()];
                }
            }

            if (null === $list) {
                $list = array();

                $options = \XLite\Core\Database::getRepo('XLite\Model\AttributeValue\AttributeValueSelect')
                    ->createQueryBuilder('av')
                    ->linkInner('av.product')
                    ->linkInner('product.categoryProducts')
                    ->andWhere('categoryProducts.category = :category AND av.attribute = :attribute AND product.enabled = true')
                    ->setParameter('category', $this)
                    ->setParameter('attribute', $attribute)
                    ->groupBy('av.attribute_option')
                    ->linkInner('av.attribute_option')
                    ->linkInner('attribute_option.translations', 'option_translations')
                    ->addOrderBy('option_translations.name')
                    ->getResult();

                foreach ($options as $option) {
                    $list[$option->getAttributeOption()->getId()] = $option->getAttributeOption()->getName();
                }

                if ($config->attributes_filter_cache_mode) {
                    $data[$languageCode][$attribute->getId()] = $list;
                    $this->saveAttributeOptionsInCache($data);
                }
            }

        } else {
            $list = array();

            $values = $attribute->getAttributeOptions()->getValues();
            uasort(
                $values,
                function ($a, $b) {
                    return strcasecmp($a->getName(), $b->getName());
                }
            );

            foreach ($values as $option) {
                $list[$option->getId()] = $option->getName();
            }
        }

        return $list;
    }

    // {{{ Cache control methods

    /**
     * Get key hash
     *
     *
     * @return string
     */
    protected function getKeyHash()
    {
        return 'ProductFilter_Category_Attributes_' . $this->getCategoryId();
    }

    /**
     * Get attribute options from cache
     *
     * @return mixed
     */
    protected function getAttributeOptionsFromCache()
    {
        return \XLite\Core\Database::getCacheDriver()->fetch($this->getKeyHash());
    }

    /**
     * Save attribute options into the cache
     *
     * @param mixed   $data Data object for saving in the cache
     * @param integer $lifeTime Cell TTL OPTIONAL
     *
     * @return void
     */
    protected function saveAttributeOptionsInCache($data, $lifeTime = 0)
    {
        \XLite\Core\Database::getCacheDriver()->save($this->getKeyHash(), $data, $lifeTime);
    }

    // }}}

    /**
     * Set useClasses
     *
     * @param string $useClasses
     * @return Category
     */
    public function setUseClasses($useClasses)
    {
        $this->useClasses = $useClasses;
        return $this;
    }

    /**
     * Get useClasses
     *
     * @return string 
     */
    public function getUseClasses()
    {
        return $this->useClasses;
    }

    /**
     * Add productClasses
     *
     * @param \XLite\Model\ProductClass $productClasses
     * @return Category
     */
    public function addProductClasses(\XLite\Model\ProductClass $productClasses)
    {
        $this->productClasses[] = $productClasses;
        return $this;
    }

    /**
     * Get productClasses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductClasses()
    {
        return $this->productClasses;
    }
}
