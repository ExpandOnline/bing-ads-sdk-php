<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Retrieves the ads that are associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.100).aspx GetAdsByAdGroupId Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
final class GetAdsByAdGroupIdResponse
{
    public $Ads;
}
