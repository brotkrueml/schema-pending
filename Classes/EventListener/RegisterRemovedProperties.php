<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\EventListener;

use Brotkrueml\Schema\Event\RegisterAdditionalTypePropertiesEvent;
use Brotkrueml\SchemaPending\Model\Type;

/**
 * The following properties has been available as pending
 * but were removed. These properties are registered again
 * to avoid breaking changes.
 *
 * This listener can be removed with the next major version.
 */
final class RegisterRemovedProperties
{
    public function __invoke(RegisterAdditionalTypePropertiesEvent $event): void
    {
        $type = $event->getType();

        if ($type === Type\Observation::class) {
            $event->registerAdditionalProperty('measuredValue');
            $event->registerAdditionalProperty('observedNode');
        }

        if ($type === Type\StatisticalPopulation::class) {
            $event->registerAdditionalProperty('constrainingProperty');
            $event->registerAdditionalProperty('numConstraints');
        }
    }
}
