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
 * Instances of the class Observation are used to specify observations about an entity at a particular time. The principal properties of an Observation are observationAbout, measuredProperty, statType, value] and observationDate  and measuredProperty. Some but not all Observations represent a QuantitativeValue. Quantitative observations can be about a StatisticalVariable, which is an abstract specification about which we can make observations that are grounded at a particular location and time.
 *
 * Observations can also encode a subset of simple RDF-like statements (its observationAbout, a StatisticalVariable, defining the measuredPoperty; its observationAbout property indicating the entity the statement is about, and value )
 *
 * In the context of a quantitative knowledge graph, typical properties could include measuredProperty, observationAbout, observationDate, value, unitCode, unitText, measurementMethod.
 */
final class Observation extends AbstractType
{
    protected static $propertyNames = [
        'additionalProperty',
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'marginOfError',
        'maxValue',
        'measuredProperty',
        'measurementDenominator',
        'measurementMethod',
        'measurementQualifier',
        'measurementTechnique',
        'minValue',
        'name',
        'observationAbout',
        'observationDate',
        'observationPeriod',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'unitCode',
        'unitText',
        'url',
        'value',
        'valueReference',
        'variableMeasured',
    ];
}
