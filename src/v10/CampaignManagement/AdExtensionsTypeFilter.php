<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Version 10 of the Campaign Management service is in preview.
     * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.100).aspx AdExtensionsTypeFilter Value Set
     * 
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
final class AdExtensionsTypeFilter
{
    /** An ad extension that contains one or more site links to include in an ad. */
    const SiteLinksAdExtension = 'SiteLinksAdExtension';
    /** An ad extension that contains the address and phone number of the business to include an ad. */
    const LocationAdExtension = 'LocationAdExtension';
    /** An ad extension that contains a phone number to include in the ad and whether it's the only clickable item in an ad. */
    const CallAdExtension = 'CallAdExtension';
    /** An ad extension that contains an image with alternative text to include in the ad. */
    const ImageAdExtension = 'ImageAdExtension';
    /** An ad extension that contains a link to install an application from a supported app store. */
    const AppAdExtension = 'AppAdExtension';
}
