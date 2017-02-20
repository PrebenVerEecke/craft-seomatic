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

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\WebPage;

/**
 * AboutPage - Web page type: About page.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     1.0.0
 * @see       http://schema.org/AboutPage
 */
class AboutPage extends WebPage
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'AboutPage';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/AboutPage';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'Web page type: About page.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'WebPage';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================

    /**
     * A set of links that can help a user understand and navigate a website
     * hierarchy.
     *
     * @var mixed|BreadcrumbList|string [schema.org types: BreadcrumbList, Text]
     */
    public $breadcrumb;

    /**
     * Date on which the content on this web page was last reviewed for accuracy
     * and/or completeness.
     *
     * @var mixed|Date [schema.org types: Date]
     */
    public $lastReviewed;

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @var mixed|WebPageElement [schema.org types: WebPageElement]
     */
    public $mainContentOfPage;

    /**
     * Indicates the main image on the page.
     *
     * @var mixed|ImageObject [schema.org types: ImageObject]
     */
    public $primaryImageOfPage;

    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @var mixed|string [schema.org types: URL]
     */
    public $relatedLink;

    /**
     * People or organizations that have reviewed the content on this web page for
     * accuracy and/or completeness.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $reviewedBy;

    /**
     * One of the more significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most. Supersedes
     * significantLinks.
     *
     * @var mixed|string [schema.org types: URL]
     */
    public $significantLink;

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @var mixed|Specialty [schema.org types: Specialty]
     */
    public $specialty;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'breadcrumb',
        'lastReviewed',
        'mainContentOfPage',
        'primaryImageOfPage',
        'relatedLink',
        'reviewedBy',
        'significantLink',
        'specialty'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'breadcrumb' => ['BreadcrumbList','Text'],
        'lastReviewed' => ['Date'],
        'mainContentOfPage' => ['WebPageElement'],
        'primaryImageOfPage' => ['ImageObject'],
        'relatedLink' => ['URL'],
        'reviewedBy' => ['Organization','Person'],
        'significantLink' => ['URL'],
        'specialty' => ['Specialty']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'breadcrumb' => 'A set of links that can help a user understand and navigate a website hierarchy.',
        'lastReviewed' => 'Date on which the content on this web page was last reviewed for accuracy and/or completeness.',
        'mainContentOfPage' => 'Indicates if this web page element is the main subject of the page.',
        'primaryImageOfPage' => 'Indicates the main image on the page.',
        'relatedLink' => 'A link related to this web page, for example to other related web pages.',
        'reviewedBy' => 'People or organizations that have reviewed the content on this web page for accuracy and/or completeness.',
        'significantLink' => 'One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most. Supersedes significantLinks.',
        'specialty' => 'One of the domain specialities to which this web page\'s content applies.'
    ];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$_schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$_schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$_schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$_googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$_googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['breadcrumb','lastReviewed','mainContentOfPage','primaryImageOfPage','relatedLink','reviewedBy','significantLink','specialty'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
