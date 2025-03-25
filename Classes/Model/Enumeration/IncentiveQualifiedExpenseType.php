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
 * The types of expenses that are covered by the incentive. For example some incentives are only for the goods (tangible items) but the services (labor) are excluded.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum IncentiveQualifiedExpenseType implements EnumerationInterface
{
    /**
     * This incentive applies to goods only.
     */
    case IncentiveQualifiedExpenseTypeGoodsOnly;

    /**
     * This incentive can apply to either goods or services (or both).
     */
    case IncentiveQualifiedExpenseTypeGoodsOrServices;

    /**
     * This incentive applies to services only.
     */
    case IncentiveQualifiedExpenseTypeServicesOnly;

    /**
     * This incentive applies to utility bills.
     */
    case IncentiveQualifiedExpenseTypeUtilityBill;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
