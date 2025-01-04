<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Enumeration;

use Brotkrueml\Schema\Core\Model\EnumerationInterface;

/**
 * Enumerates several types of return labels for product returns.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum ReturnLabelSourceEnumeration implements EnumerationInterface
{
    /**
     * Indicated that creating a return label is the responsibility of the customer.
     */
    case ReturnLabelCustomerResponsibility;

    /**
     * Indicated that a return label must be downloaded and printed by the customer.
     */
    case ReturnLabelDownloadAndPrint;

    /**
     * Specifies that a return label will be provided by the seller in the shipping box.
     */
    case ReturnLabelInBox;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
