<?php

namespace Features\Auth;

use Core\Base\Model;

class AuthModel extends Model
{

    public function getCandidate($username)
    {
        return $this->db->table("user")
            ->select("password")
            ->where("username", $username)
            ->get();
    }
}
