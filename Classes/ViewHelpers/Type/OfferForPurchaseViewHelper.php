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
 * An OfferForPurchase in Schema.org represents an Offer to sell something, i.e. an Offer whose
 * businessFunction is [sell](http://purl.org/goodrelations/v1#Sell.). See [Good Relations](https://en.wikipedia.org/wiki/GoodRelations) for
 * background on the underlying concepts.
 */
final class OfferForPurchaseViewHelper extends AbstractTypeViewHelper
{
}
