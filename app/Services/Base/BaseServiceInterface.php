<?php

namespace App\Services\Base;

interface BaseServiceInterface
{
    public function getAll();
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete($id);
}
