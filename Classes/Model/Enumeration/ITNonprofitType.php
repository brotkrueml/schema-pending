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
 * ITNonprofitType: Non-profit organization type originating from Italy.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum ITNonprofitType implements EnumerationInterface
{
    /**
     * ITCooperativeCharity: Non-profit type referring to Cooperatives with charitable missions (Ital. Cooperativa Sociale) according to Italian Law 112 of 2017.
     */
    case ITCooperativeCharity;

    /**
     * ITMutualAidCharity: Non-profit type referring to associations providing financial aid to people need (Ital. Società di mutuo soccorso or SOMS) according to Italian Law 3818 of 1886.
     */
    case ITMutualAidCharity;

    /**
     * ITSocialCompanyCharity: Non-profit type referring to companies with charitable missions (Ital. Imprese Sociali or IS) according to Italian Law 112 of 2017.
     */
    case ITSocialCompanyCharity;

    /**
     * ITSocialPromotionCharity: Non-profit type referring to associations promoting charitable causes (Ital. Associazioni di promozione sociale or APS) according to Italian Law 383 of 2000.
     */
    case ITSocialPromotionCharity;

    /**
     * ITSportCompanyCharity: Non-profit type referring to Companies that organize sports activities for the public or inscribed members (Ital. Società Sportiva Dilettantistica or SSD) according to Italian Law 289 of 2002.
     */
    case ITSportCompanyCharity;

    /**
     * ITVolunteerAssociationCharity: Non-profit type referring to associations organising charitable volunteer activities (Ital. Organizzazioni di volontariato or ODV) according to Italian Law 266 of 1991.
     */
    case ITVolunteerAssociationCharity;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
