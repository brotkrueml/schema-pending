<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A Claim in Schema.org represents a specific, factually-oriented claim that could be the itemReviewed in a ClaimReview. The content of a claim can be summarized with the text property. Variations on well known claims can have their common identity indicated via sameAs links, and summarized with a name. Ideally, a Claim description includes enough contextual information to minimize the risk of ambiguity or inclarity. In practice, many claims are better understood in the context in which they appear or the interpretations provided by claim reviews.
 *
 * Beyond ClaimReview, the Claim type can be associated with related creative works - for example a ScholarlyArticle or Question might be about some Claim.
 *
 * At this time, Schema.org does not define any types of relationship between claims. This is a natural area for future exploration.
 */
#[Type('Claim')]
final class Claim extends AbstractType
{
    protected static array $propertyNames = [
        'about',
        'abstract',
        'accessMode',
        'accessModeSufficient',
        'accessibilityAPI',
        'accessibilityControl',
        'accessibilityFeature',
        'accessibilityHazard',
        'accessibilitySummary',
        'accountablePerson',
        'acquireLicensePage',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'alternativeHeadline',
        'appearance',
        'archivedAt',
        'assesses',
        'associatedMedia',
        'audience',
        'audio',
        'author',
        'award',
        'character',
        'citation',
        'claimInterpreter',
        'comment',
        'commentCount',
        'conditionsOfAccess',
        'contentLocation',
        'contentRating',
        'contentReferenceTime',
        'contributor',
        'copyrightHolder',
        'copyrightNotice',
        'copyrightYear',
        'correction',
        'countryOfOrigin',
        'creativeWorkStatus',
        'creator',
        'creditText',
        'dateCreated',
        'dateModified',
        'datePublished',
        'description',
        'disambiguatingDescription',
        'discussionUrl',
        'editEIDR',
        'editor',
        'educationalAlignment',
        'educationalLevel',
        'educationalUse',
        'encoding',
        'encodingFormat',
        'exampleOfWork',
        'expires',
        'firstAppearance',
        'funder',
        'funding',
        'genre',
        'hasPart',
        'headline',
        'identifier',
        'image',
        'inLanguage',
        'interactionStatistic',
        'interactivityType',
        'interpretedAsClaim',
        'isAccessibleForFree',
        'isBasedOn',
        'isFamilyFriendly',
        'isPartOf',
        'keywords',
        'learningResourceType',
        'license',
        'locationCreated',
        'mainEntity',
        'mainEntityOfPage',
        'maintainer',
        'material',
        'materialExtent',
        'mentions',
        'name',
        'offers',
        'pattern',
        'position',
        'potentialAction',
        'producer',
        'provider',
        'publication',
        'publisher',
        'publishingPrinciples',
        'recordedAt',
        'releasedEvent',
        'review',
        'sameAs',
        'schemaVersion',
        'sdDatePublished',
        'sdLicense',
        'sdPublisher',
        'size',
        'sourceOrganization',
        'spatial',
        'spatialCoverage',
        'sponsor',
        'subjectOf',
        'teaches',
        'temporal',
        'temporalCoverage',
        'text',
        'thumbnail',
        'thumbnailUrl',
        'timeRequired',
        'translator',
        'typicalAgeRange',
        'url',
        'usageInfo',
        'version',
        'video',
        'workExample',
    ];
}
