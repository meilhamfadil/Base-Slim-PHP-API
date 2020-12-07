<?php

namespace Features\Example;

use Core\Base\Model;

class ExampleModel extends Model
{

    public function getUsers($query)
    {
        return $this->db->table("user")
            ->select("id, username")
            ->like("username", "%$query%")
            ->getAll();
    }
}
