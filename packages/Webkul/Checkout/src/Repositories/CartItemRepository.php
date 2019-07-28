<?php

namespace Webkul\Checkout\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Cart Items Reposotory
 *
 * @author    Carlos Pinto <kkobtk@gmail.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */

class CartItemRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'Webkul\Checkout\Contracts\CartItem';
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */

    public function update(array $data, $id, $attribute = "id")
    {
        $cartitems = $this->find($id);

        $cartitems->update($data);

        return $cartitems;
    }

    public function getProduct($cartItemId) {
        return $this->model->find($cartItemId)->product->id;
    }
}