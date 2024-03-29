<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Model\Repo;

/**
 * Clean URL repository
 */
class CleanURL extends \XLite\Model\Repo\ARepo
{
    /**
     * Limit of iterations to generate clean URL
     */
    const CLEAN_URL_CHECK_LIMIT = 1000;

    /**
     * Use this char as separator, if the default one is not set in the config
     */
    const CLEAN_URL_DEFAULT_SEPARATOR = '-';

    /**
     * Default extension
     */
    const CLEAN_URL_DEFAULT_EXTENSION = 'html';

    const PLACEHOLDER = '#PLACEHOLDER#';

    /**
     * Returns available entities types
     *
     * @return array
     */
    public static function getEntityTypes()
    {
        return array(
            'XLite\Model\Product' => 'product',
            'XLite\Model\Category' => 'category',
        );
    }

    /**
     * Returns entity type
     *
     * @param \XLite\Model\AEntity|string $entity Entity
     *
     * @return string
     */
    public static function getEntityType($entity)
    {
        $types = static::getEntityTypes();
        $className = is_object($entity)
            ? \Doctrine\Common\Util\ClassUtils::getClass($entity)
            : $entity;

        return isset($types[$className])
            ? $types[$className]
            : null;
    }

    // {{{ Check clean url

    /**
     * Check for format
     *
     * @param \XLite\Model\AEntity|string $entity Entity or class name
     *
     * @return boolean
     */
    public function getPattern($entity)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        return method_exists($this, $method)
            ? $this->{$method}($entity)
            : $this->getCommonPattern($entity);
    }

    /**
     * Returns common url regexp pattern
     *
     * @return string
     */
    protected function getCommonPattern()
    {
        return '[\w_\-]*';
    }

    /**
     * Returns product url regexp pattern
     *
     * @return string
     */
    protected function getPatternProduct()
    {
        return $this->getCommonPattern() . '(\.' . static::CLEAN_URL_DEFAULT_EXTENSION . ')?';
    }

    // }}}

    // {{{ URL Separator

    /**
     * Check for format
     *
     * @param \XLite\Model\AEntity|string $entity Entity or class name
     *
     * @return boolean
     */
    public function getSeparator($entity)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        $result = method_exists($this, $method)
            ? $this->{$method}($entity)
            : $this->getCommonSeparator();

        if (empty($result)
            || !preg_match('/' . $this->getPattern($entity) . '/S', $result)
        ) {
            $result = static::CLEAN_URL_DEFAULT_SEPARATOR;
        }

        return $result;
    }

    /**
     * Returns common separator
     *
     * @return string
     */
    public function getCommonSeparator()
    {
        return \Includes\Utils\ConfigParser::getOptions(array('clean_urls', 'default_separator'));
    }

    // }}}

    // {{{ Capitalize flag

    /**
     * Return true if words included into clean URL should be capitalized
     *
     * @param \XLite\Model\AEntity|string $entity Entity or class name
     *
     * @return boolean
     */
    protected function isCapitalizeWords($entity)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        return method_exists($this, $method)
            ? $this->{$method}($entity)
            : $this->isCommonCapitalizeWords();
    }

    /**
     * Return true if words included into clean URL should be capitalized
     *
     * @return boolean
     */
    protected function isCommonCapitalizeWords()
    {
        return \Includes\Utils\ConfigParser::getOptions(array('clean_urls', 'capitalize_words'));
    }

    // }}}

    // {{{ Generate clean url

    /**
     * Generate clean URL
     *
     * @param \XLite\Model\AEntity $entity         Entity
     * @param string               $base           Base OPTIONAL
     *
     * @return string
     */
    public function generateCleanURL(\XLite\Model\AEntity $entity, $base = null)
    {
        $result = '';

        if (null === $base) {
            $base = $this->getURLBase($entity);
        }

        $base = \XLite\Core\Converter::convertToTranslit($base);

        if ($base) {
            $separator = $this->getSeparator($entity);
            $result .= strtolower(preg_replace('/\W+/S', $separator, $base));

            if ($this->isCapitalizeWords($entity)) {
                $words = explode($separator, $result);
                $words = array_map('ucfirst', $words);
                $result = implode($separator, $words);
            }

            $suffix = '';
            $increment = 1;

            $result = substr(
                $result,
                0,
                255 - strlen($separator . (string) static::CLEAN_URL_CHECK_LIMIT . $this->postProcessURL('', $entity))
            );

            while (!$this->isURLUnique($this->postProcessURL($result . $suffix, $entity), $entity)
                && static::CLEAN_URL_CHECK_LIMIT > $increment
            ) {
                $suffix = $separator . $increment++;
            }

            if (!empty($suffix)) {
                $result .= $suffix;
            }

            $result = $this->postProcessURL($result, $entity);
        }

        return $result;
    }

    // }}}

    // {{{ URL Base

    /**
     * Returns clean url base value field name
     *
     * @param \XLite\Model\AEntity $entity Entity
     *
     * @return string
     */
    public function getBaseFieldName($entity)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        return method_exists($this, $method)
            ? $this->{$method}($entity)
            : 'name';
    }

    /**
     * Returns clean url base value
     *
     * @param \XLite\Model\AEntity $entity Entity
     *
     * @return string
     */
    protected function getURLBase($entity)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        $result = method_exists($this, $method)
            ? $this->{$method}($entity)
            : null;

        return null === $result
            ? $entity->{$this->getBaseFieldName($entity)}
            : $result;
    }

    // }}}

    // {{{ Check for unique

    /**
     * Get conflict object
     *
     * @param string                      $cleanURL Clean url
     * @param \XLite\Model\AEntity|string $entity   Entity or class name
     * @param mixed                       $id       Entity identifier OPTIONAL
     *
     * @return \XLite\Model\AEntity
     */
    public function getConflict($cleanURL, $entity, $id = null)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        if (method_exists($this, $method)) {
            $result = $this->{$method}($cleanURL, $entity, $id);

        } else {
            /** @var \XLite\Model\CleanURL $cleanURLObject */
            $cleanURLObject = $this->findConflictByCleanURL($cleanURL, $entity, $id);
            $tmpEntity = $cleanURLObject
                ? $cleanURLObject->getEntity()
                : null;

            $result = ($tmpEntity /* && $cleanURL == $tmpEntity->getCleanURL() */ )
                ? $tmpEntity
                : null;
        }

        return $result;
    }

    /**
     * Check for unique
     *
     * @param string                      $cleanURL Clean url
     * @param \XLite\Model\AEntity|string $entity   Entity or class name
     * @param mixed                       $id       Entity identifier OPTIONAL
     *
     * @return boolean
     */
    public function isURLUnique($cleanURL, $entity, $id = null)
    {
        $result = null;
        $conflict = $this->getConflict($cleanURL, $entity, $id);

        if (is_object($entity)) {
            $result = empty($conflict) || $conflict->getUniqueIdentifier() == $entity->getUniqueIdentifier();

        } elseif ($id) {
            $result = empty($conflict)
                || (\Doctrine\Common\Util\ClassUtils::getClass($conflict) == $entity
                    && $conflict->getUniqueIdentifier() == $id
                );

        } else {
            $result = empty($conflict);
        }

        return $result;
    }

    /**
     * Check for unique
     *
     * @param string                      $cleanURL Clean url
     * @param \XLite\Model\AEntity|string $entity   Entity or class name
     * @param mixed                       $id       Entity identifier OPTIONAL
     *
     * @return boolean
     */
    protected function getConflictCategory($cleanURL, $entity, $id = null)
    {
        $result = null;

        if (!is_object($entity)) {
            $entity = \XLite\Core\Database::getRepo('XLite\Model\Category')->find($id);
        }

        /** @var \XLite\Model\Category $entity */
        if ($entity) {
            $tmpEntity = $this->findCategoryByURL($cleanURL, $entity->getParent());

            $result = ($tmpEntity /* && $cleanURL == $tmpEntity->getCleanURL() */ )
                ? $tmpEntity
                : null;
        }

        return $result;
    }

    /**
     * Check for unique
     *
     * @param string                      $cleanURL Clean url
     * @param \XLite\Model\AEntity|string $entity   Entity or class name
     * @param mixed                       $id       Entity identifier OPTIONAL
     *
     * @return boolean
     */
    protected function findConflictByCleanURL($cleanURL, $entity, $id = null)
    {
        $entityType = static::getEntityType($entity);

        if (!is_object($entity)) {
            $entity = \XLite\Core\Database::getRepo($entity)->find($id);
        }

        $queryBuilder = $this->createQueryBuilder();

        $queryBuilder->andWhere('c.cleanURL = :cleanURL')
            ->setParameter('cleanURL', $cleanURL)
            ->orderBy('c.id', 'DESC');

        if (is_object($entity) && $entity->isPersistent()) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->isNull('c.' . $entityType),
                    'c.' . $entityType . ' != :entity'
                )
            )
                ->setParameter('entity', $entity);
        }

        return $queryBuilder->getSingleResult();
    }

    // }}}

    // {{{ Post process url

    /**
     * Post process clean URL
     *
     * @param string              $url    URL
     * @param \XLite\Model\AEntity $entity Entity
     *
     * @return string
     */
    protected function postProcessURL($url, $entity)
    {
        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        return method_exists($this, $method)
            ? $this->{$method}($url, $entity)
            : $url;
    }

    /**
     * Post process clean URL
     *
     * @param string               $url    URL
     * @param \XLite\Model\AEntity $entity Entity
     *
     * @return string
     */
    protected function postProcessURLProduct($url, $entity)
    {
        return $url . '.' . static::CLEAN_URL_DEFAULT_EXTENSION;
    }

    // }}}

    // {{{ Parse url

    /**
     * Parse clean URL
     * Return array((string) $target, (array) $params)
     *
     * @param string $url  Main part of a clean URL
     * @param string $last First part before the "url" OPTIONAL
     * @param string $rest Part before the "url" and "last" OPTIONAL
     * @param string $ext  Extension OPTIONAL
     *
     * @return array
     */
    public function parseURL($url, $last = '', $rest = '', $ext = '')
    {
        $target = null;
        $params = array();

        foreach (static::getEntityTypes() as $model => $entityType) {
            $method = $entityType
                ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
                : null;

            $result = method_exists($this, $method)
                ? $this->{$method}($url, $last, $rest, $ext)
                : array();

            if ($result) {
                list($target, $params) = $result;
                break;
            }
        }

        return $this->prepareParseURL($url, $last, $rest, $ext, $target, $params);
    }

    /**
     * Hook for modules
     *
     * @param string $url    Main part of a clean URL
     * @param string $last   First part before the "url"
     * @param string $rest   Part before the "url" and "last"
     * @param string $ext    Extension
     * @param string $target Target
     * @param array  $params Additional params
     *
     * @return array
     */
    protected function prepareParseURL($url, $last, $rest, $ext, $target, $params)
    {
        if ('product' === $target) {
            if (!empty($last) && !$this->isUseCanonicalURL()) {
                $path = explode('/', $rest);
                $path[] = $last;

                $entity = $this->findCategoryByPath($path);

                if ($entity && $entity->hasProduct($params['product_id'])) {
                    $params['category_id'] = $entity->getCategoryId();

                } else {
                    unset($params['product_id']);
                }

            } elseif (!empty(\XLite\Core\Request::getInstance()->category_id)) {
                $params['category_id'] = \XLite\Core\Request::getInstance()->category_id;
            }
        }

        return array($target, $params);
    }

    /**
     * Parse clean URL
     * Return array((string) $target, (array) $params)
     *
     * @param string $url  Main part of a clean URL
     * @param string $last First part before the "url" OPTIONAL
     * @param string $rest Part before the "url" and "last" OPTIONAL
     * @param string $ext  Extension OPTIONAL
     *
     * @return array
     */
    protected function parseURLProduct($url, $last = '', $rest = '', $ext = '')
    {
        $result = null;

        if ($ext) {
            $result = $this->findByURL('product', $url . $ext);
        }

        return $result;
    }

    /**
     * Parse clean URL
     * Return array((string) $target, (array) $params)
     *
     * @param string $url  Main part of a clean URL
     * @param string $last First part before the "url" OPTIONAL
     * @param string $rest Part before the "url" and "last" OPTIONAL
     * @param string $ext  Extension OPTIONAL
     *
     * @return array
     */
    protected function parseURLCategory($url, $last = '', $rest = '', $ext = '')
    {
        $result = null;

        if ($url && !$ext) {
            $path = explode('/', $rest);
            $path[] = $last;
            $path[] = $url;

            $entity = $this->findCategoryByPath($path);

            if ($entity) {
                $target = 'category';
                $params[$entity->getUniqueIdentifierName()] = $entity->getUniqueIdentifier();

                $result = array($target, $params);
            }
        }

        return $result;
    }

    /**
     * Find target and params by url ant entity type
     *
     * @param string $entityType Entity type
     * @param string $url        URL
     *
     * @return array
     */
    protected function findByURL($entityType, $url)
    {
        $target = null;
        $params = array();

        $entity = $this->findEntityByURL($entityType, $url);

        if ($entity) {
            $target = $entityType;
            $params[$entity->getUniqueIdentifierName()] = $entity->getUniqueIdentifier();
        }

        return $target
            ? array($target, $params)
            : null;
    }

    /**
     * Find Entity by clean URL
     *
     * @param string $entityType Entity type
     * @param string $url        URL
     *
     * @return \XLite\Model\Base\Catalog
     */
    protected function findEntityByURL($entityType, $url)
    {
        $entity = $this->defineFindEntityByURL($entityType, $url)->getSingleResult();

        $method = $entityType
            ? 'get' . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        return $entity && method_exists($entity, $method)
            ? $entity->{$method}()
            : null;
    }

    /**
     * Find Entity by clean URL
     *
     * @param string $entityType Entity type
     * @param string $url        URL
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function defineFindEntityByURL($entityType, $url)
    {
        $queryBuilder = $this->createQueryBuilder();

        $queryBuilder->andWhere('c.cleanURL = :url')
            ->setParameter('url', $url)
            ->andWhere($queryBuilder->expr()->isNotNull('c.' . $entityType))
            ->orderBy('c.id', 'DESC');

        return $queryBuilder;
    }

    /**
     * Find category by path
     *
     * @param array $path Path
     *
     * @return \XLite\Model\Category
     */
    protected function findCategoryByPath($path)
    {
        $entity = \XLite\Core\Database::getRepo('\XLite\Model\Category')->getRootCategory();

        foreach (array_filter($path) as $categoryURL) {
            $entity = $this->findCategoryByURL($categoryURL, $entity);

            if (empty($entity)) {
                break;
            }
        }

        return $entity;
    }

    /**
     * Find category by clean URL
     *
     * @param string                $url    URL
     * @param \XLite\Model\Category $parent Parent category
     *
     * @return \XLite\Model\Category
     */
    protected function findCategoryByURL($url, $parent)
    {
        $entity = $this->defineFindCategoryByURL($url, $parent)->getSingleResult();

        return $entity
            ? $entity->getCategory()
            : null;
    }

    /**
     * Find category by clean URL
     *
     * @param string                $url    URL
     * @param \XLite\Model\Category $parent Parent category
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function defineFindCategoryByURL($url, $parent)
    {
        $queryBuilder = $this->defineFindEntityByURL('category', $url);

        $queryBuilder->linkInner('c.category')
            ->andWhere('category.parent = :parent')
            ->setParameter('parent', $parent)
            ->orderBy('c.id', 'DESC');

        return $queryBuilder;
    }

    // }}}

    // {{{ Build URL

    /**
     * Build clean URL
     *
     * @param string  $target         Target
     * @param array   $params         Params OPTIONAL
     *
     * @return string
     */
    public function buildURL($target = '', array $params = array())
    {
        $result = null;

        if (\XLite\Core\Operator::isClassExists($target)) {
            $target = static::getEntityType($target);
        }

        $method = $target
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($target)
            : null;

        $data = method_exists($this, $method)
            ? $this->{$method}($params)
            : array();

        if ($data) {
            list($urlParts, $params) = $data;

            if ($urlParts) {
                list($urlParts, $params) = $this->prepareBuildURL($target, $params, $urlParts);
            }

            if ($urlParts) {
                unset($params['target']);
                $result = implode('/', array_reverse($urlParts));
                if (!empty($params)) {
                    $result .= '?' . http_build_query($params);
                }
            }
        }

        return $result;
    }

    /**
     * Returns 'use_canonical_urls_only' option value
     *
     * @return boolean
     */
    public function isUseCanonicalURL()
    {
        return (bool) \Includes\Utils\ConfigParser::getOptions(array('clean_urls', 'use_canonical_urls_only'));
    }

    /**
     * Analyze current target and request params and get a canonical redirect URL or null if redirect is not needed
     *
     * @param string $target
     *
     * @return string
     */
    public function getRedirectCanonicalURL($target)
    {
        $result = null;

        if ($this->isUseCanonicalURL()) {
            // Option use_canonical_urls_only is enabled: try to get canonical URL to redirect...

            $tmp = \XLite\Core\Request::getInstance();

            if ('product' === $target) {
                if (!empty($tmp->last)) {
                    list($target, $params) = $this->parseURL($tmp->url, $tmp->last, $tmp->rest, $tmp->ext);
                    $result = \XLite\Core\Converter::buildFullURL($target, '', $params);
                }
            }
        }

        return $result;
    }

    /**
     * Hook for modules
     *
     * @param string $target   Target
     * @param array  $params   Params
     * @param array  $urlParts URL parts
     *
     * @return array
     */
    protected function prepareBuildURL($target, $params, $urlParts)
    {
        if ('product' === $target) {
            /** @var \XLite\Model\Repo\Category $repo */
            $repo = \XLite\Core\Database::getRepo('XLite\Model\Category');

            if (!empty($params['category_id'])) {
                if ($repo->hasProduct($params['category_id'], $params['product_id'])) {
                    if (!$this->isUseCanonicalURL()) {
                        $categoryUrlParts = $this->getCategoryURLPath($params['category_id']);

                        if ($categoryUrlParts) {
                            $urlParts = array_merge($urlParts, $categoryUrlParts);

                            unset($params['category_id']);
                        }
                    }

                } else {
                    unset($params['category_id']);
                }
            }

            unset($params['product_id']);
        }

        return array($urlParts, $params);
    }

    /**
     * Build product URL
     *
     * @param array  $params Params
     *
     * @return array
     */
    protected function buildURLProduct($params)
    {
        $urlParts = array();

        if (!empty($params['product_id'])) {
            /** @var \XLite\Model\Product $product */
            $product = \XLite\Core\Database::getRepo('XLite\Model\Product')->find($params['product_id']);

            if (null !== $product && $product->getCleanURL()) {
                $urlParts[] = $product->getCleanURL();
            }
        }

        return array($urlParts, $params);
    }

    /**
     * Build category URL
     *
     * @param array  $params Params
     *
     * @return array
     */
    protected function buildURLCategory($params)
    {
        $urlParts = array();

        $id = isset($params['category_id'])
            ? $params['category_id']
            : (isset($params['id']) ? $params['id'] : null);
        if ($id) {
            $urlParts = $this->getCategoryURLPath($id);

            if ($urlParts) {
                unset($params['category_id']);
                unset($params['id']);
            }
        }

        return array($urlParts, $params);
    }

    /**
     * Returns category url path
     *
     * @param integer $categoryId Category id
     *
     * @return array
     */
    protected function getCategoryURLPath($categoryId)
    {
        $categoryPath = \XLite\Core\Database::getRepo('XLite\Model\Category')->getCategoryPath($categoryId);

        $result = array();
        /** @var \XLite\Model\Category $category */
        foreach ($categoryPath as $category) {
            $result[] = $category->getCleanURL();
        }

        return in_array(null, $result)
            ? null
            : array_reverse($result);
    }

    // }}}

    // {{{ Fake url with placeholder

    /**
     * Build fake url with placeholder
     *
     * @param \XLite\Model\AEntity|string $entity Entity
     * @param array                       $params Params OPTIONAL
     *
     * @return string
     */
    public function buildFakeURL($entity, array $params = array())
    {
        $result = '';

        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        $data = method_exists($this, $method)
            ? $this->{$method}($entity, $params)
            : array();

        if ($data) {
            list($urlParts, $params) = $data;
            list($urlParts, $params) = $this->prepareBuildURL($entityType, $params, $urlParts);

            if ($urlParts) {
                unset($params['target']);
                $result = implode('/', array_reverse($urlParts));
                if (!empty($params)) {
                    $result .= '?' . http_build_query($params);
                }
            }
        }

        return $result;
    }

    /**
     * Build fake url with placeholder
     *
     * @param \XLite\Model\AEntity|string $entity Entity
     * @param array                       $params Params
     *
     * @return string
     */
    protected function buildFakeURLProduct($entity, $params)
    {
        $urlParts = array($this->postProcessURL(static::PLACEHOLDER, $entity));

        /** @var \XLite\Model\Product $entity */
//        if (is_object($entity) && $entity->getCategoryId()) {
//            $params['category_id'] = $entity->getCategoryId();
//        }

        return array($urlParts, $params);
    }

    /**
     * Build fake url with placeholder
     *
     * @param \XLite\Model\AEntity|string $entity Entity
     * @param array                       $params Params
     *
     * @return string
     */
    protected function buildFakeURLCategory($entity, $params)
    {
        $urlParts = array($this->postProcessURL(static::PLACEHOLDER, $entity));

        /** @var \XLite\Model\Category $entity */
        if (is_object($entity) && $entity->getParentId()) {
            $urlParts = array_merge($urlParts, $this->getCategoryURLPath($entity->getParentId()));
        }

        return array($urlParts, $params);
    }

    // }}}

    // {{{ Edit url

    /**
     * Build edit url
     *
     * @param \XLite\Model\AEntity $entity Entity
     *
     * @return string
     */
    public function buildEditURL($entity)
    {
        $result = '';

        $entityType = static::getEntityType($entity);

        $method = $entityType
            ? __FUNCTION__ . \XLite\Core\Converter::convertToCamelCase($entityType)
            : null;

        $data = method_exists($this, $method)
            ? $this->{$method}($entity)
            : array(
                \XLite\Core\Converter::convertFromCamelCase($entityType),
                array($entity->getUniqueIdentifierName() => $entity->getUniqueIdentifier())
            );

        if ($data) {
            list($target, $params) = $data;

            if ($target) {
                $result = \XLite\Core\Converter::buildURL($target, '', $params);
            }
        }

        return $result;
    }

    /**
     * Build edit url
     *
     * @param \XLite\Model\AEntity $entity Entity
     *
     * @return array
     */
    protected function buildEditURLCategory($entity)
    {
        return array('category', array('id' => $entity->getUniqueIdentifier()));
    }

    // }}}
}
