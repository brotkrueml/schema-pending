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
 * A series of Events. Included events can relate with the series using the superEvent property.
 *
 * it may also sometimes prove useful to describe a longer-term series as an Event.
 */
final class EventSeriesViewHelper extends AbstractTypeViewHelper
{
}
