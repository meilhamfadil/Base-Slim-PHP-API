<?php

namespace Core\Base;

use Buki\Pdox;

class Model
{

    /** @var Pdox $db description */
    protected $db;

    public function __construct(Pdox $db)
    {
        $this->db = $db;
    }
}
