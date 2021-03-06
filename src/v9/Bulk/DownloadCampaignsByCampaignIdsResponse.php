<?php

namespace BingAds\v9\Bulk;

/**
 * Downloads the specified campaigns' data.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.90).aspx DownloadCampaignsByCampaignIds Response Object
 *
 * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
 */
final class DownloadCampaignsByCampaignIdsResponse
{
    /**
     * The identifier of the download request.
     *
     * @var string
     */
    public $DownloadRequestId;
}
