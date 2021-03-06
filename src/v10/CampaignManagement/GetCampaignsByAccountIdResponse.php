<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Retrieves all the campaigns that exist within a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Response Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
final class GetCampaignsByAccountIdResponse
{
    public $Campaigns;
}
