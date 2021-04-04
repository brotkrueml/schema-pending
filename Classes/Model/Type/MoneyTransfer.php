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
 * The act of transferring money from one place to another place. This may occur electronically or physically.
 */
final class MoneyTransfer extends AbstractType
{
    protected static $propertyNames = [
        'actionStatus',
        'additionalType',
        'agent',
        'alternateName',
        'amount',
        'beneficiaryBank',
        'description',
        'disambiguatingDescription',
        'endTime',
        'error',
        'fromLocation',
        'identifier',
        'image',
        'instrument',
        'location',
        'mainEntityOfPage',
        'name',
        'object',
        'participant',
        'potentialAction',
        'result',
        'sameAs',
        'startTime',
        'subjectOf',
        'target',
        'toLocation',
        'url',
    ];
}
