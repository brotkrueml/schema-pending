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
 * System software that manages computer hardware and software resources, and provides common services for computer programs.
 */
final class OperatingSystemViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'OperatingSystem';
}
