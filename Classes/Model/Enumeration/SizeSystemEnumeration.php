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
 * Enumerates common size systems for different categories of products, for example "EN-13402" or "UK" for wearables or "Imperial" for screws.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum SizeSystemEnumeration implements EnumerationInterface
{
    /**
     * Imperial size system.
     */
    case SizeSystemImperial;

    /**
     * Metric size system.
     */
    case SizeSystemMetric;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
