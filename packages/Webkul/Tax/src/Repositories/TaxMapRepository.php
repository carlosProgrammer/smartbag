<?php

namespace Webkul\Tax\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Tax Mapping Reposotory
 *
 * @author    Carlos Pinto <kkobtk@gmail.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class TaxMapRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Tax\Contracts\TaxMap';
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        $taxMap = $this->model->create($data);

        return $taxMap;
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $taxMap = $this->find($id);

        $taxMap->update($data);

        return $taxMap;
    }
}