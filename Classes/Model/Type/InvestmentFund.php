<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A company or fund that gathers capital from a number of investors to create a pool of money that is then re-invested into stocks, bonds and other assets.
 */
#[Type('InvestmentFund')]
final class InvestmentFund extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'aggregateRating',
        'alternateName',
        'amount',
        'annualPercentageRate',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'broker',
        'category',
        'description',
        'disambiguatingDescription',
        'feesAndCommissionsSpecification',
        'hasOfferCatalog',
        'hoursAvailable',
        'identifier',
        'image',
        'interestRate',
        'isRelatedTo',
        'isSimilarTo',
        'logo',
        'mainEntityOfPage',
        'name',
        'offers',
        'potentialAction',
        'provider',
        'providerMobility',
        'review',
        'sameAs',
        'serviceOutput',
        'serviceType',
        'slogan',
        'subjectOf',
        'termsOfService',
        'url',
    ];
}
