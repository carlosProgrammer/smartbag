<?php

namespace Webkul\Checkout\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Cart Address Reposotory
 *
 * @author    Carlos Pinto <kkobtk@gmail.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */

class CartAddressRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return Mixed
     */
    function model()
    {
        return 'Webkul\Checkout\Contracts\CartAddress';
    }
}