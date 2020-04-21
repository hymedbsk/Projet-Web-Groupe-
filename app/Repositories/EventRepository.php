<?php

namespace App\Repositories;

use App\event;

class EventRepository extends ResourceRepository
{

    public function __construct(event $event)
    {
        $this->model = $event;
    }

}