<?php

namespace Webkul\Attribute\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Attribute Group Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class AttributeGroupRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\Attribute\Contracts\AttributeGroup';
    }
}