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
 * A HyperToc represents a hypertext table of contents for complex media objects, such as VideoObject, AudioObject. Items in the table of contents are indicated using the tocEntry property, and typed HyperTocEntry. For cases where the same larger work is split into multiple files, associatedMedia can be used on individual HyperTocEntry items.
 */
final class HyperTocViewHelper extends AbstractTypeViewHelper
{
}
