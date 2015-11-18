<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Defines a shopping setting for a Bing Shopping Campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913132(v=msads.100).aspx ShoppingSetting Data Object
     */
final class ShoppingSetting extends Setting
{
    /**
     * Helps determine which Bing Shopping campaign serves ads, in the event that two or more campaigns use the product catalog feed from the same Bing Merchant Center store.
     * @var integer
     */
    public $Priority;
    /**
     * The country code for the Bing Merchant Center store.
     * @var string
     */
    public $SalesCountryCode;
    /**
     * The unique identifier for the Bing Merchant Center store that your product catalog feed belongs to.
     * @var integer
     */
    public $StoreId;
}
