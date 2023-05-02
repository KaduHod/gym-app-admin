<?php

namespace App\Entitys;

class Aluno
{
    public User $user;
    public User $personal;

    public function __construct(User $user, User $personal)
    {
        $this->user = $user;
        $this->personal = $personal;
    }


    public function save() {

    }

    public function update() {

    }

    public function get() {

    }
}
