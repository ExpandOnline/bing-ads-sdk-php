<?php
namespace BingAds\v10\AdInsight;

/**
     * Defines an object that contains estimates of clicks, cost, and impressions given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219314(v=msads.100).aspx BidLandscapePoint Data Object
     * 
     * @uses Currency
     * @used-by AdGroupBidLandscape
     * @used-by KeywordBidLandscape
     */
final class BidLandscapePoint
{
    /**
     * The suggested bid value.
     * @var double
     */
    public $Bid;
    /**
     * The estimated number of clicks.
     * @var double
     */
    public $Clicks;
    /**
     * The estimated number of impressions.
     * @var integer
     */
    public $Impressions;
    /**
     * The estimated number of impressions in the top or mainline ad results.
     * @var integer
     */
    public $TopImpressions;
    /**
     * The monetary unit of the suggested bid value and estimated performance statistics.
     * @var Currency
     */
    public $Currency;
    /**
     * The estimated cost.
     * @var double
     */
    public $Cost;
    /**
     * Reserved for future use.
     * @var double
     */
    public $MarginalCPC;
}
