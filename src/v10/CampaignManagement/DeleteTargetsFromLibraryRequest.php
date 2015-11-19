<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Removes targets from your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.100).aspx DeleteTargetsFromLibrary Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetsFromLibrary
     */
final class DeleteTargetsFromLibraryRequest
{
    public $TargetIds;
}