<?php

namespace App\Repositories;

use App\userbyevent;

class UserByEventRepository extends ResourceRepository
{

    public function __construct(userbyevent $ebu)
    {
        $this->model = $ebu;
    }

}