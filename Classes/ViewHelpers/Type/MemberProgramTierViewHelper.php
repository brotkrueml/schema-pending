<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\ViewHelpers\Type;

use Brotkrueml\Schema\Core\ViewHelpers\AbstractTypeViewHelper;

/**
 * A MemberProgramTier specifies a tier under a loyalty (member) program, for example "gold".
 */
final class MemberProgramTierViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'MemberProgramTier';
}
