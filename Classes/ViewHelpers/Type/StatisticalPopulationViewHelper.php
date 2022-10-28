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
 * A StatisticalPopulation is a set of instances of a certain given type that satisfy some set of constraints. The property populationType is used to specify the type. Any property that can be used on instances of that type can appear on the statistical population. For example, a StatisticalPopulation representing all Persons with a homeLocation of East Podunk California would be described by applying the appropriate homeLocation and populationType properties to a StatisticalPopulation item that stands for that set of people.
 * population, and does not imply that the population consists of people. For example, a populationType of Event or NewsArticle could be used. See also Observation, and the [data and datasets](/docs/data-and-datasets.html) overview for more details.
 */
final class StatisticalPopulationViewHelper extends AbstractTypeViewHelper
{
}
