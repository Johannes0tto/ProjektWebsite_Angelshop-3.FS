<?php

namespace dwp\model;
use \dwp\core\Model as M;

class Paymethod extends \dwp\core\Model
{
    const TABLENAME = 'paymethod';

    protected $schema = [
        'id' => [ 'type' => M::TYPE_UINTEGER ],
        'createdAt' => [ 'type' => M::TYPE_DATE ],
        'updatedAt' => [ 'type' => M::TYPE_DATE ],
        'name' => [ 
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 50,
                'null' => false,
            ],
        ],
    ];
}