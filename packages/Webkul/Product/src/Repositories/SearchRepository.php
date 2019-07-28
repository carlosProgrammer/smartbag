<?php

namespace Webkul\Product\Repositories;

use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;
use Webkul\Product\Repositories\ProductRepository as Product;

/**
 * Search Reposotory
 *
 * @author    Carlos Pinto <kkobtk@gmail.com> @prashant-webkul
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class SearchRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    protected $product;


    public function __construct(App $app, Product $product) {
        parent::__construct($app);

        $this->product = $product;
    }

    function model()
    {
        return 'Webkul\Product\Contracts\Product';
    }

    public function searchAttributes()
    {
    }

    public function search($data) {
        $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        $searchTerm = explode("?", $query);
        $serachQuery = '';

        foreach($searchTerm as $term){
            if (strpos($term, 'term') !== false) {
                $serachQuery = last(explode("=", $term));
            }
        }

        $products = $this->product->searchProductByAttribute($serachQuery);

        return $products;
    }
}