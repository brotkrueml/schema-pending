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
 * Representation of an Error.
 */
#[Type('Error')]
final class Error extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'data',
        'description',
        'disambiguatingDescription',
        'errorCode',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'owner',
        'potentialAction',
        'sameAs',
        'source',
        'subjectOf',
        'timestamp',
        'url',
    ];
}
