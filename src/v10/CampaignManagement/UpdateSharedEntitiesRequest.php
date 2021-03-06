<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
final class UpdateSharedEntitiesRequest
{
    public $SharedEntities;
}
