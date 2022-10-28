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
 * WebContent is a type representing all WebPage, WebSite and WebPageElement content. It is sometimes the case that detailed distinctions between Web pages, sites and their parts are not always important or obvious. The  WebContent type makes it easier to describe Web-addressable content without requiring such distinctions to always be stated. (The intent is that the existing types WebPage, WebSite and WebPageElement will eventually be declared as subtypes of WebContent.)
 */
final class WebContentViewHelper extends AbstractTypeViewHelper
{
}
