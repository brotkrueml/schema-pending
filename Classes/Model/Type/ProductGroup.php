<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A ProductGroup represents a group of Products that vary only in certain well-described ways, such as by size, color, material etc.
 *
 * While a ProductGroup itself is not directly offered for sale, the various varying products that it represents can be. The ProductGroup serves as a prototype or template, standing in for all of the products who have an isVariantOf relationship to it. As such, properties (including additional types) can be applied to the ProductGroup to represent characteristics shared by each of the (possibly very many) variants. Properties that reference a ProductGroup are not included in this mechanism; neither are the following specific properties variesBy, hasVariant, url.
 */
final class ProductGroup extends AbstractType
{
    protected static $propertyNames = [
        'additionalProperty',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'audience',
        'award',
        'brand',
        'category',
        'color',
        'countryOfAssembly',
        'countryOfLastProcessing',
        'countryOfOrigin',
        'depth',
        'description',
        'disambiguatingDescription',
        'gtin',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'hasEnergyConsumptionDetails',
        'hasMeasurement',
        'hasMerchantReturnPolicy',
        'hasVariant',
        'height',
        'identifier',
        'image',
        'inProductGroupWithID',
        'isAccessoryOrSparePartFor',
        'isConsumableFor',
        'isRelatedTo',
        'isSimilarTo',
        'isVariantOf',
        'itemCondition',
        'logo',
        'mainEntityOfPage',
        'manufacturer',
        'material',
        'model',
        'mpn',
        'name',
        'nsn',
        'offers',
        'pattern',
        'potentialAction',
        'productGroupID',
        'productID',
        'productionDate',
        'purchaseDate',
        'releaseDate',
        'review',
        'sameAs',
        'size',
        'sku',
        'slogan',
        'subjectOf',
        'url',
        'variesBy',
        'weight',
        'width',
    ];
}
