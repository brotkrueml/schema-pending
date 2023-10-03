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
 * A set of defined terms, for example a set of categories or a classification scheme, a glossary, dictionary or enumeration.
 */
final class DefinedTermSetViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'DefinedTermSet';
}
