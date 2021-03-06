<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Defines the types of targeting that you can use to target your ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.100).aspx Target Data Object
     * 
     * @uses AgeTarget
     * @uses DayTimeTarget
     * @uses DeviceOSTarget
     * @uses KeyValuePairOfstringstring
     * @uses GenderTarget
     * @uses LocationTarget
     * @used-by AddTargetsToLibraryRequest
     * @used-by GetTargetsByAdGroupIdsResponse
     * @used-by GetTargetsByCampaignIdsResponse
     * @used-by GetTargetsByIdsResponse
     * @used-by UpdateTargetsInLibraryRequest
     */
final class Target
{
    /**
     * Targets ads to users within one or more age ranges.
     * @var AgeTarget
     */
    public $Age;
    /**
     * Targets ads to run on specific days and hours of the week.
     * @var DayTimeTarget
     */
    public $DayTime;
    public $DeviceOS;
    /**
     * The list of key and value strings for forward compatibility.
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * Targets ads to men only or women only.
     * @var GenderTarget
     */
    public $Gender;
    /**
     * A system-generated identifier that identifies this target object.
     * @var integer
     */
    public $Id;
    /**
     * Determines whether the target library contains this target object.
     * @var boolean
     */
    public $IsLibraryTarget;
    /**
     * Targets ads to users within a specific location; for example, users within a certain radius of your business or within a specific state.
     * @var LocationTarget
     */
    public $Location;
    /**
     * The name of the target.
     * @var string
     */
    public $Name;
}
