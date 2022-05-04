<?php

namespace Ebay\Sell\Recommendation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that contains information about how a seller can improve their
 * listing configurations. The AD object contains Promoted Listings recommendations
 * and information, which the seller can use to improve buyer conversions. The
 * response can also contain an optional message about the returned data.
 */
class MarketingRecommendation extends AbstractModel
{
    /**
     * An object that contains Promoted Listings recommendations and information
     * related to the associated listing ID.
     *
     * @var \Ebay\Sell\Recommendation\Model\Ad
     */
    public $ad = null;

    /**
     * A message that can conditionally accompany the listing information.
     *
     * @var string
     */
    public $message = null;
}
