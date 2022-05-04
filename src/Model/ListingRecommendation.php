<?php

namespace Ebay\Sell\Recommendation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that contains the ID of an actively listed item and a set of
 * related listing recommendations. The recommendations contain information the
 * seller can use to optimize their listing configurations.
 */
class ListingRecommendation extends AbstractModel
{
    /**
     * An ID that identifies the active listing associated with the eBay
     * recommendations.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * This return object provides the eBay recommendations and information related to
     * the associated listing ID. The container currently returns the AD recommendation
     * type, which contains information that sellers can use to configure Promoted
     * Listings ad campaigns. This container is returned with each
     * ListingRecommendation object, except when: The listing ID is not eligible for
     * Promoted Listings The listing ID is currently in a Promoted Listings campaign
     * The listing ID is invalid.
     *
     * @var \Ebay\Sell\Recommendation\Model\MarketingRecommendation
     */
    public $marketing = null;
}
