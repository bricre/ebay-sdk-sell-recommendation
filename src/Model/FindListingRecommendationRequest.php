<?php

namespace Ebay\Sell\Recommendation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An list of listing ID values for which you want Promoted Listings ad
 * configuration information.
 */
class FindListingRecommendationRequest extends AbstractModel
{
    /**
     * A comma-separated list of listing IDs for which you want Promoted Listings ad
     * configuration information. Currently, this method accepts only listingId values
     * from the Trading API. Max: 500 listing IDs.
     *
     * @var string[]
     */
    public $listingIds = null;
}
