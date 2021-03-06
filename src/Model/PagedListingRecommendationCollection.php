<?php

namespace Ebay\Sell\Recommendation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The high-level object used to return a set of Promoted Listings ad
 * recommendations.
 */
class PagedListingRecommendationCollection extends AbstractModel
{
    /**
     * The URI of the current page of results from the result set.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of items returned on a single page from the result set. This value
     * can be set in the request with the limit query parameter.
     *
     * @var int
     */
    public $limit = null;

    /**
     * Returns a list of listingRecommendations, where each element in the list offers
     * recommendations for the associated listingId. Which elements are returned depend
     * on how you structure the request. For example, if you request recommendations
     * for all of a sellers listings (by leaving the request payload empty), ad
     * recommendations are returned only for those listings where promoteWithAd is set
     * to RECOMMENDED.
     *
     * @var \Ebay\Sell\Recommendation\Model\ListingRecommendation[]
     */
    public $listingRecommendations = null;

    /**
     * The URI for the following page of results. This value is returned only if there
     * is an additional page of results to display from the result set. Max length:
     * 2048.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of results skipped in the result set before listing the first
     * returned result. This value can be set in the request with the offset query
     * parameter. Note: The items in a paginated result set use a zero-based list where
     * the first item in the list has an offset of 0.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI for the preceding page of results. This value is returned only if there
     * is a previous page of results to display from the result set. Max length: 2048.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of items retrieved in the result set. If no items are found,
     * this field is returned with a value of 0.
     *
     * @var int
     */
    public $total = null;
}
