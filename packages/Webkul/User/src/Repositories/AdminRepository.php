<?php

namespace Webkul\User\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Admin Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class AdminRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\User\Contracts\Admin';
    }
}