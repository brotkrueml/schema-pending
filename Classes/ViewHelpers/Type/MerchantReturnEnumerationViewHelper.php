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
 * Enumerates several kinds of product return policies.
 * @deprecated This type represents an enumeration, use the enum with the {f:constant()} ViewHelper instead (available since Fluid 2.12).
 */
final class MerchantReturnEnumerationViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'MerchantReturnEnumeration';
}
