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
 * A set of products (either ProductGroups or specific variants) that are listed together e.g. in an Offer.
 */
final class ProductCollectionViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'ProductCollection';
}
