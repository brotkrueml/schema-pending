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
 * A Category Code.
 */
#[Type('CategoryCode')]
final class CategoryCode extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'codeValue',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'inCodeSet',
        'inDefinedTermSet',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'termCode',
        'url',
    ];
}
