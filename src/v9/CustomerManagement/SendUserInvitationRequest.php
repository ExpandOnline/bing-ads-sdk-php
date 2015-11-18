<?php

namespace BingAds\v9\CustomerManagement;

/**
 * Sends an invitation for a Microsoft account user to manage one or more Bing Ads customer accounts.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn789440(v=msads.90).aspx SendUserInvitation Request Object
 *
 * @uses UserInvitation
 * @used-by BingAdsCustomerManagementService::SendUserInvitation
 */
final class SendUserInvitationRequest
{
    /**
     * The user invitation to send.
     *
     * @var UserInvitation
     */
    public $UserInvitation;
}
