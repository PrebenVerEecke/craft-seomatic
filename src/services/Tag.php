<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\services;

use nystudio107\seomatic\Seomatic;
use nystudio107\seomatic\base\MetaService;
use nystudio107\seomatic\base\MetaServiceInterface;
use nystudio107\seomatic\models\MetaTag;
use nystudio107\seomatic\models\MetaTagContainer;

use craft\helpers\ArrayHelper;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class Tag extends MetaService implements MetaServiceInterface
{
    // Constants
    // =========================================================================

    const DEFAULT_TYPE = null;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function get(string $key, string $handle = self::GENERAL_HANDLE): MetaTag
    {
        /** @var  $metaItem MetaTag */
        $metaItem = Seomatic::$plugin->metaContainers->getMetaItemByKey($key, MetaTagContainer::CONTAINER_TYPE);

        return $metaItem;
    }

    /**
     * @inheritdoc
     */
    public function create($config = []): MetaTag
    {
        $type = self::DEFAULT_TYPE;
        if (!empty($config['type'])) {
            $type = ArrayHelper::remove($config, 'type');
        }
        $metaItem = MetaTag::create($type, $config);

        return $metaItem;
    }

    /**
     * @inheritdoc
     */
    public function add($metaItem, string $handle = self::GENERAL_HANDLE)
    {
        $key = MetaTagContainer::CONTAINER_TYPE . $handle;
        Seomatic::$plugin->metaContainers->addToMetaContainer($metaItem, $key);
    }

    /**
     * @inheritdoc
     */
    public function container(string $handle = self::GENERAL_HANDLE): MetaTagContainer
    {
        $key = MetaTagContainer::CONTAINER_TYPE . $handle;
        return Seomatic::$plugin->metaContainers->getMetaContainer($key);
    }
}