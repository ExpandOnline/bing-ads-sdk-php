<?php

namespace BingAds\v9\Bulk;

/**
 * Defines the base object from which all fault detail objects derive.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn169093(v=msads.90).aspx ApplicationFault Data Object
 */
class ApplicationFault
{
    /**
     * The identifier of the log entry that contains the details of the API call.
     *
     * @var string
     */
    public $TrackingId;
}
