<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A MediaReview is a more specialized form of Review dedicated to the evaluation of media content online, typically in the context of fact-checking and misinformation.
 * For more general reviews of media in the broader sense, use UserReview, CriticReview or other Review types. This definition is
 * a work in progress. While the MediaManipulationRatingEnumeration list reflects significant community review amongst fact-checkers and others working
 * to combat misinformation, the specific structures for representing media objects, their versions and publication context, is still evolving. Similarly, best practices for the relationship between MediaReview and ClaimReview markup has not yet been finalized.
 */
final class MediaReview extends AbstractType
{
    protected static $propertyNames = [
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
        'archivedAt',
        'assesses',
        'associatedClaimReview',
        'associatedMedia',
        'associatedMediaReview',
        'associatedReview',
        'audience',
        'audio',
        'author',
        'award',
        'character',
        'citation',
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
        'itemReviewed',
        'keywords',
        'learningResourceType',
        'license',
        'locationCreated',
        'mainEntity',
        'mainEntityOfPage',
        'maintainer',
        'material',
        'materialExtent',
        'mediaAuthenticityCategory',
        'mentions',
        'name',
        'negativeNotes',
        'offers',
        'originalMediaContextDescription',
        'originalMediaLink',
        'pattern',
        'position',
        'positiveNotes',
        'potentialAction',
        'producer',
        'provider',
        'publication',
        'publisher',
        'publishingPrinciples',
        'recordedAt',
        'releasedEvent',
        'review',
        'reviewAspect',
        'reviewBody',
        'reviewRating',
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
