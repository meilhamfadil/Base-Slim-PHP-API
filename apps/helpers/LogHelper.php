<?php

function cencorData($data)
{
    $data = (array) $data;
    if (array_key_exists("password", $data)) {
        $data['password'] = preg_replace("/\w/", "*", $data['password']);
    }

    if (array_key_exists("pin", $data)) {
        $data['pin'] = preg_replace("/\w/", "*", $data['pin']);
    }

    if (array_key_exists("key", $data)) {
        $data['key'] = preg_replace("/\w/", "*", $data['key']);
    }

    if (array_key_exists("credential", $data)) {
        $data['credential'] = preg_replace("/\w/", "*", $data['credential']);
    }

    if (array_key_exists("token", $data)) {
        $data['token'] = preg_replace("/\w/", "*", $data['token']);
    }

    return $data;
}
