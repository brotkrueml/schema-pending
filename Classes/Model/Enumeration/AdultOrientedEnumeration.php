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
 * Enumeration of considerations that make a product relevant or potentially restricted for adults only.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum AdultOrientedEnumeration implements EnumerationInterface
{
    /**
     * Item contains alcohol or promotes alcohol consumption.
     */
    case AlcoholConsideration;

    /**
     * The item is dangerous and requires careful handling and/or special training of the user. See also the [UN Model Classification](https://unece.org/DAM/trans/danger/publi/unrec/rev17/English/02EREv17_Part2.pdf) defining the 9 classes of dangerous goods such as explosives, gases, flammables, and more.
     */
    case DangerousGoodConsideration;

    /**
     * Item is a pharmaceutical (e.g., a prescription or OTC drug) or a restricted medical device.
     */
    case HealthcareConsideration;

    /**
     * Item is a narcotic as defined by the [1961 UN convention](https://www.incb.org/incb/en/narcotic-drugs/Yellowlist/yellow-list.html), for example marijuana or heroin.
     */
    case NarcoticConsideration;

    /**
     * A general code for cases where relevance to children is reduced, e.g. adult education, mortgages, retirement-related products, etc.
     */
    case ReducedRelevanceForChildrenConsideration;

    /**
     * The item contains sexually oriented content such as nudity, suggestive or explicit material, or related online services, or is intended to enhance sexual activity. Examples: Erotic videos or magazine, sexual enhancement devices, sex toys.
     */
    case SexualContentConsideration;

    /**
     * Item contains tobacco and/or nicotine, for example cigars, cigarettes, chewing tobacco, e-cigarettes, or hookahs.
     */
    case TobaccoNicotineConsideration;

    /**
     * The item is suitable only for adults, without indicating why. Due to widespread use of "adult" as a euphemism for "sexual", many such items are likely suited also for the SexualContentConsideration code.
     */
    case UnclassifiedAdultConsideration;

    /**
     * Item shows or promotes violence.
     */
    case ViolenceConsideration;

    /**
     * The item is intended to induce bodily harm, for example guns, mace, combat knives, brass knuckles, nail or other bombs, and spears.
     */
    case WeaponConsideration;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
