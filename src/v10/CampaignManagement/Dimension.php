<?php
namespace BingAds\v10\CampaignManagement;

/**
     * Defines dimension information for media on a website.
     * @link http://msdn.microsoft.com/en-us/library/dd796881(v=msads.100).aspx Dimension Data Object
     * 
     * @used-by MediaType
     */
final class Dimension
{
    /**
     * The height.
     * @var integer
     */
    public $Height;
    /**
     * The width.
     * @var integer
     */
    public $Width;
}
