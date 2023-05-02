<?php

namespace App\Entitys;

class Personal
{
    public User $user;
    public array $alunos;

    public function __construct(User $user, array $alunos)
    {
        $this->user = $user;
        $this->alunos = $alunos;
    }


    public function save() {

    }

    public function update() {

    }

    public function get() {

    }
}
