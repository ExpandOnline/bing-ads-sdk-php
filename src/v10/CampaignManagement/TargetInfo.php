<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Defines information about a target in your library.
     * @link http://msdn.microsoft.com/en-us/library/dd796878(v=msads.100).aspx TargetInfo Data Object
     * 
     * @used-by GetTargetsInfoFromLibraryResponse
     */
final class TargetInfo
{
    /**
     * The identifier of the target.
     * @var integer
     */
    public $Id;
    /**
     * The name of the target.
     * @var string
     */
    public $Name;
}
