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
 * A HyperToEntry is an item within a HyperToc, which represents a hypertext table of contents for complex media objects, such as VideoObject, AudioObject. The media object itself is indicated using associatedMedia. Each section of interest within that content can be described with a HyperTocEntry, with associated startOffset and endOffset. When several entries are all from the same file, associatedMedia is used on the overarching HyperTocEntry; if the content has been split into multiple files, they can be referenced using associatedMedia on each HyperTocEntry.
 */
final class HyperTocEntryViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'HyperTocEntry';
}
