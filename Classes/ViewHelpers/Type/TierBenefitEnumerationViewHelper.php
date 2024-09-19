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
 * An enumeration of possible benefits as part of a loyalty (members) program.
 */
final class TierBenefitEnumerationViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'TierBenefitEnumeration';
}
