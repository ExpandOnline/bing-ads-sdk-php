<?php

namespace BingAds\v9\AdIntelligence;

/**
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn169084(v=msads.90).aspx AdApiFaultDetail Data Object
 *
 * @uses AdApiError
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     *
     * @var AdApiError[]
     */
    public $Errors;
}
