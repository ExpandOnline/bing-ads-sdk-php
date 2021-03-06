<?php

namespace BingAds\v9\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913120(v=msads.90).aspx ProductPartitionType Value Set
 *
 * @used-by ProductPartition
 */
final class ProductPartitionType
{
    /** The ProductPartition is a product group subdivision. */
    const Subdivision = 'Subdivision';
    /** The ProductPartition is a product group unit. */
    const Unit = 'Unit';
}
