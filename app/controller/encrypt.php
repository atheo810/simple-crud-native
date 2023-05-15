<?php

interface encrypt
{
    public function psrEncrypt($data);
}

class passwordEncrypt implements encrypt
{
    public function psrEncrypt($data)
    {
        $generateEncrypt = hash($data, PASSWORD_BCRYPT);
        return $generateEncrypt;
    }
}
