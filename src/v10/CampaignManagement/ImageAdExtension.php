<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Currently this feature is only available for pilot participants.
     * @link http://msdn.microsoft.com/en-us/library/dn766199(v=msads.100).aspx ImageAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
final class ImageAdExtension extends AdExtension
{
    /**
     * Alternative description of the image media for usability.
     * @var string
     */
    public $AlternativeText;
    /**
     * Description that can be used by the advertiser, agency, or account manager to track, label, or manage image media.
     * @var string
     */
    public $Description;
    /**
     * The URL of the webpage to take the user to when they click the image.
     * @var string
     */
    public $DestinationUrl;
    /**
     * Reserved for future use.
     * @var AppUrl[]
     */
    public $FinalAppUrls;
    /**
     * Reserved for future use.
     * @var string[]
     */
    public $FinalMobileUrls;
    /**
     * Reserved for future use.
     * @var string[]
     */
    public $FinalUrls;
    /**
     * The identifiers of the images to include in the ad.
     * @var integer[]
     */
    public $ImageMediaIds;
    /**
     * Reserved for future use.
     * @var string
     */
    public $TrackingUrlTemplate;
    /**
     * Reserved for future use.
     * @var CustomParameters
     */
    public $UrlCustomParameters;
}
