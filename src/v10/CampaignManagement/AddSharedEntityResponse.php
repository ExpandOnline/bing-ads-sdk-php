<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Adds a shared entity such as a negative keyword list to the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.100).aspx AddSharedEntity Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
final class AddSharedEntityResponse
{
    public $ListItemIds;
    public $PartialErrors;
    public $SharedEntityId;
}
