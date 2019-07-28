<?php

namespace Webkul\Discount\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Cart Rule Cart Reposotory
 *
 * @author  Carlos Pinto <kkobtk@gmail.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class CartRuleCartRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Discount\Contracts\CartRuleCart';
    }
}