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

use nystudio107\seomatic\models\jsonld\Place;

/**
 * AdministrativeArea - A geographical region, typically under the
 * jurisdiction of a particular government.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     1.0.0
 * @see       http://schema.org/AdministrativeArea
 */
class AdministrativeArea extends Place
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'AdministrativeArea';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/AdministrativeArea';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A geographical region, typically under the jurisdiction of a particular government.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Place';

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
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which there
     * is no matching property in schema.org. Note: Publishers should be aware
     * that applications designed to use specific schema.org properties (e.g.
     * http://schema.org/width, http://schema.org/color, http://schema.org/gtin13,
     * ...) will typically expect such data to be provided using those properties,
     * rather than using the generic property/value mechanism.
     *
     * @var PropertyValue [schema.org types: PropertyValue]
     */
    public $additionalProperty;

    /**
     * Physical address of the item.
     *
     * @var mixed|PostalAddress|string [schema.org types: PostalAddress, Text]
     */
    public $address;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var mixed|AggregateRating [schema.org types: AggregateRating]
     */
    public $aggregateRating;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation.
     * This generic property does not make a statement about whether the feature
     * is included in an offer for the main accommodation or available at extra
     * costs.
     *
     * @var mixed|LocationFeatureSpecification [schema.org types: LocationFeatureSpecification]
     */
    public $amenityFeature;

    /**
     * A short textual code (also called "store code") that uniquely identifies a
     * place of business. The code is typically assigned by the parentOrganization
     * and used in structured URLs. For example, in the URL
     * http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is
     * a branchCode for a particular branch.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $branchCode;

    /**
     * The basic containment relation between a place and one that contains it.
     * Supersedes containedIn. Inverse property: containsPlace.
     *
     * @var mixed|Place [schema.org types: Place]
     */
    public $containedInPlace;

    /**
     * The basic containment relation between a place and another that it
     * contains. Inverse property: containedInPlace.
     *
     * @var mixed|Place [schema.org types: Place]
     */
    public $containsPlace;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * Supersedes events.
     *
     * @var mixed|Event [schema.org types: Event]
     */
    public $event;

    /**
     * The fax number.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $faxNumber;

    /**
     * The geo coordinates of the place.
     *
     * @var mixed|GeoCoordinates|GeoShape [schema.org types: GeoCoordinates, GeoShape]
     */
    public $geo;

    /**
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify parties and
     * physical locations.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $globalLocationNumber;

    /**
     * A URL to a map of the place. Supersedes map, maps.
     *
     * @var mixed|Map|string [schema.org types: Map, URL]
     */
    public $hasMap;

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $isicV4;

    /**
     * An associated logo.
     *
     * @var mixed|ImageObject|string [schema.org types: ImageObject, URL]
     */
    public $logo;

    /**
     * The opening hours of a certain place.
     *
     * @var mixed|OpeningHoursSpecification [schema.org types: OpeningHoursSpecification]
     */
    public $openingHoursSpecification;

    /**
     * A photograph of this place. Supersedes photos.
     *
     * @var mixed|ImageObject|Photograph [schema.org types: ImageObject, Photograph]
     */
    public $photo;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var mixed|Review [schema.org types: Review]
     */
    public $review;

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the
     * restaurant, hotel or hotel room.
     *
     * @var mixed|bool [schema.org types: Boolean]
     */
    public $smokingAllowed;

    /**
     * The special opening hours of a certain place. Use this to explicitly
     * override general opening hours brought in scope by
     * openingHoursSpecification or openingHours.
     *
     * @var mixed|OpeningHoursSpecification [schema.org types: OpeningHoursSpecification]
     */
    public $specialOpeningHoursSpecification;

    /**
     * The telephone number.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $telephone;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'additionalProperty',
        'address',
        'aggregateRating',
        'amenityFeature',
        'branchCode',
        'containedInPlace',
        'containsPlace',
        'event',
        'faxNumber',
        'geo',
        'globalLocationNumber',
        'hasMap',
        'isicV4',
        'logo',
        'openingHoursSpecification',
        'photo',
        'review',
        'smokingAllowed',
        'specialOpeningHoursSpecification',
        'telephone'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'additionalProperty' => ['PropertyValue'],
        'address' => ['PostalAddress','Text'],
        'aggregateRating' => ['AggregateRating'],
        'amenityFeature' => ['LocationFeatureSpecification'],
        'branchCode' => ['Text'],
        'containedInPlace' => ['Place'],
        'containsPlace' => ['Place'],
        'event' => ['Event'],
        'faxNumber' => ['Text'],
        'geo' => ['GeoCoordinates','GeoShape'],
        'globalLocationNumber' => ['Text'],
        'hasMap' => ['Map','URL'],
        'isicV4' => ['Text'],
        'logo' => ['ImageObject','URL'],
        'openingHoursSpecification' => ['OpeningHoursSpecification'],
        'photo' => ['ImageObject','Photograph'],
        'review' => ['Review'],
        'smokingAllowed' => ['Boolean'],
        'specialOpeningHoursSpecification' => ['OpeningHoursSpecification'],
        'telephone' => ['Text']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'additionalProperty' => 'A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org. Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.',
        'address' => 'Physical address of the item.',
        'aggregateRating' => 'The overall rating, based on a collection of reviews or ratings, of the item.',
        'amenityFeature' => 'An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.',
        'branchCode' => 'A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs. For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.',
        'containedInPlace' => 'The basic containment relation between a place and one that contains it. Supersedes containedIn. Inverse property: containsPlace.',
        'containsPlace' => 'The basic containment relation between a place and another that it contains. Inverse property: containedInPlace.',
        'event' => 'Upcoming or past event associated with this place, organization, or action. Supersedes events.',
        'faxNumber' => 'The fax number.',
        'geo' => 'The geo coordinates of the place.',
        'globalLocationNumber' => 'The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.',
        'hasMap' => 'A URL to a map of the place. Supersedes map, maps.',
        'isicV4' => 'The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.',
        'logo' => 'An associated logo.',
        'openingHoursSpecification' => 'The opening hours of a certain place.',
        'photo' => 'A photograph of this place. Supersedes photos.',
        'review' => 'A review of the item. Supersedes reviews.',
        'smokingAllowed' => 'Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.',
        'specialOpeningHoursSpecification' => 'The special opening hours of a certain place. Use this to explicitly override general opening hours brought in scope by openingHoursSpecification or openingHours.',
        'telephone' => 'The telephone number.'
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
            [['additionalProperty','address','aggregateRating','amenityFeature','branchCode','containedInPlace','containsPlace','event','faxNumber','geo','globalLocationNumber','hasMap','isicV4','logo','openingHoursSpecification','photo','review','smokingAllowed','specialOpeningHoursSpecification','telephone'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
