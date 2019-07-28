<?php

namespace Webkul\Checkout\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Cart Reposotory
 *
 * @author    Carlos Pinto <kkobtk@gmail.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */

class CartRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return Mixed
     */

    function model()
    {
        return 'Webkul\Checkout\Contracts\Cart';
    }

    /**
     * @param array $data
     * @return Mixed
     */

    public function create(array $data)
    {
        $cart = $this->model->create($data);

        return $cart;
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return Mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $cart = $this->find($id);

        $cart->update($data);

        return $cart;
    }

    /**
     * Method to detach
     * associations.
     *
     * Use this only with
     * guest cart only.
     *
     * @return Mixed
     */
    public function deleteParent($cart_id) {
        $cart = $this->model->find($cart_id);

        return $this->model->destroy($cart_id);
    }
}