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
 * A specific and exact (byte-for-byte) version of an AudioObject. Two byte-for-byte identical files, for the purposes of this type, considered identical. If they have different embedded metadata the files will differ. Different external facts about the files, e.g. creator or dateCreated that aren't represented in their actual content, do not affect this notion of identity.
 */
final class AudioObjectSnapshot extends AbstractType
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
        'associatedArticle',
        'associatedMedia',
        'audience',
        'audio',
        'author',
        'award',
        'bitrate',
        'caption',
        'character',
        'citation',
        'comment',
        'commentCount',
        'conditionsOfAccess',
        'contentLocation',
        'contentRating',
        'contentReferenceTime',
        'contentSize',
        'contentUrl',
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
        'duration',
        'editEIDR',
        'editor',
        'educationalAlignment',
        'educationalLevel',
        'educationalUse',
        'embedUrl',
        'embeddedTextCaption',
        'encodesCreativeWork',
        'encoding',
        'encodingFormat',
        'endTime',
        'exampleOfWork',
        'expires',
        'funder',
        'genre',
        'hasPart',
        'headline',
        'height',
        'identifier',
        'image',
        'inLanguage',
        'ineligibleRegion',
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
        'playerType',
        'position',
        'potentialAction',
        'producer',
        'productionCompany',
        'provider',
        'publication',
        'publisher',
        'publishingPrinciples',
        'recordedAt',
        'regionsAllowed',
        'releasedEvent',
        'requiresSubscription',
        'review',
        'sameAs',
        'schemaVersion',
        'sdDatePublished',
        'sdLicense',
        'sdPublisher',
        'sha256',
        'size',
        'sourceOrganization',
        'spatial',
        'spatialCoverage',
        'sponsor',
        'startTime',
        'subjectOf',
        'teaches',
        'temporal',
        'temporalCoverage',
        'text',
        'thumbnailUrl',
        'timeRequired',
        'transcript',
        'translator',
        'typicalAgeRange',
        'uploadDate',
        'url',
        'usageInfo',
        'version',
        'video',
        'width',
        'workExample',
    ];
}
