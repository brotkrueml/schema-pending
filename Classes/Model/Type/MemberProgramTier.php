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
 * A MemberProgramTier specifies a tier under a loyalty (member) program, for example "gold".
 */
#[Type('MemberProgramTier')]
final class MemberProgramTier extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'hasTierBenefit',
        'hasTierRequirement',
        'identifier',
        'image',
        'isTierOf',
        'mainEntityOfPage',
        'membershipPointsEarned',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
