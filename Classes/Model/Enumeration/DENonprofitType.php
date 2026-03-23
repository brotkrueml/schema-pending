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
 * DENonprofitType: Non-profit organization type originating from Germany in accordance with article 52 of the German fiscal code (Abgabenverordnung or AO).
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum DENonprofitType implements EnumerationInterface
{
    /**
     * DECooperativeCharity: Non-profit type referring to a charitable Cooperative (German Genossenschaft) that has been recognized by the tax authorities as a charitable non-profit.
     */
    case DECooperativeCharity;

    /**
     * DEFoundationCharity: Non-profit type referring to a charitable Foundation (German Stiftung) that has been recognized by the tax authorities as a charitable non-profit.
     */
    case DEFoundationCharity;

    /**
     * DEJointStockCompanyCharity: Non-profit type referring to a charitable Joint Stock Company (German gAG gemeinnützige Aktiengesellschaft) that has been recognized by the tax authorities as a charitable non-profit.
     */
    case DEJointStockCompanyCharity;

    /**
     * DELimitedLiabilityCharity: Non-profit type referring to a charitable Common Stock Company (German gGmbH or gemeinnützige Gesellschaft mit beschränkter Haftung) that has been recognized by the tax authorities as a charitable non-profit.
     */
    case DELimitedLiabilityCharity;

    /**
     * DENotRegisteredAssociationCharity: Non-profit type referring to a charitable association that is not registered with the German association register (gemeinnütziger Verein) and has been recognized by the tax authorities as a charitable non-profit.
     */
    case DENotRegisteredAssociationCharity;

    /**
     * DEPublicCharity: Non-profit type referring to a charitable government owned juridical person (German Körperschaft öffentlichen Rechts) that has been recognized by the tax authorities as a charitable non-profit.
     */
    case DEPublicCharity;

    /**
     * DERegisteredAssociationCharity: Non-profit type referring to a charitable association that is registered with the German association register (german gemeinnütziger e.v. or gemeinnütziger eingetragener Verein) and has been recognized by the tax authorities as a charitable non-profit.
     */
    case DERegisteredAssociationCharity;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
