<?php

namespace BingAds\v9\CampaignManagement;

/**
 * Retrieves all the campaigns that exist within a specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.90).aspx GetCampaignsByAccountId Request Object
 *
 * @uses CampaignType
 * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
 */
final class GetCampaignsByAccountIdRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The type of campaign to get.
     *
     * @var CampaignType
     */
    public $CampaignType;
}
