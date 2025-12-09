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
 * Specialized software environment that provides the essential infrastructure, libraries, and services required to execute a program.
 */
final class RuntimePlatformViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'RuntimePlatform';
}
