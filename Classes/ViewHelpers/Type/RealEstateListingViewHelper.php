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
 * A RealEstateListing is a listing that describes one or more real-estate Offers (whose businessFunction is typically to lease out, or to sell).
 * The RealEstateListing type itself represents the overall listing, as manifested in some WebPage.
 */
final class RealEstateListingViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'RealEstateListing';
}
