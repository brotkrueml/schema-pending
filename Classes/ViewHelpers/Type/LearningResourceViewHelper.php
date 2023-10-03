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
 * The LearningResource type can be used to indicate CreativeWorks (whether physical or digital) that have a particular and explicit orientation towards learning, education, skill acquisition, and other educational purposes.
 *
 * LearningResource is expected to be used as an addition to a primary type such as Book, VideoObject, Product etc.
 *
 * EducationEvent serves a similar purpose for event-like things (e.g. a Trip). A LearningResource may be created as a result of an EducationEvent, for example by recording one.
 */
final class LearningResourceViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'LearningResource';
}
