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
 * <a href="https://www.iptc.org/">IPTC</a> "Digital Source" codes for use with the digitalSourceType property, providing information about the source for a digital media object.
 * In general these codes are not declared here to be mutually exclusive, although some combinations would be contradictory if applied simultaneously, or might be considered mutually incompatible by upstream maintainers of the definitions. See the IPTC <a href="https://www.iptc.org/std/photometadata/documentation/userguide/">documentation</a>
 * for <a href="https://cv.iptc.org/newscodes/digitalsourcetype/">detailed definitions</a> of all terms.
 * @deprecated This type represents an enumeration, use the enum with the {f:constant()} ViewHelper instead (available since Fluid 2.12).
 */
final class IPTCDigitalSourceEnumerationViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'IPTCDigitalSourceEnumeration';
}
