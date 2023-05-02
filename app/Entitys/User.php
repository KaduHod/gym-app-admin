<?php

namespace App\Entitys;

class User
{
    public string $name;
    public string $nickname;
    public string $email;
    public string $password;
    public string $birthday;
    public string $cellphone;

    public function __construct(array $args)
    {
        $this->name = $args['name'];
        $this->nickname = $args['nickname'];
        $this->email = $args['email'];
        $this->password = $args['password'];
        $this->birthday = $args['birthday'];
        $this->cellphone = $args['cellphone'];
    }


    public function save() {

    }

    public function update() {

    }

    public function get() {

    }
}
