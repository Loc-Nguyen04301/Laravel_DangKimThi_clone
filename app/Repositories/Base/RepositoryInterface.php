<?php

namespace App\Repositories\Base;

interface RepositoryInterface
{
    public function getAll();
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete($id);
}
