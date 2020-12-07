<?php

namespace Features\Example;

use Core\Base\Model;

class ExampleModel extends Model
{

    public function getData()
    {
        return $this->db->table("user")
            ->select("id, username")
            ->getAll();
    }
}
