<?php

namespace App\Services\Base;

use Throwable;

class BaseServiceImp implements BaseServiceInterface
{
    /**
     * @var
     */
    protected $repository;

    public function getAll()
    {
        // TODO: Implement getAll() method.
        try {
            return $this->repository->getAll();
        } catch (Throwable $e) {
            logger()->error("{$e->getMessage()} {$e->getTraceAsString()}");
            return false;
        }
    }

    public function findById(int $id)
    {
        // TODO: Implement findById() method.
        try {
            return $this->repository->findById($id);
        } catch (Throwable $e) {
            logger()->error("{$e->getMessage()} {$e->getTraceAsString()}");
            return false;
        }
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
        try {
            return $this->repository->create($attributes);
        } catch (Throwable $e) {
            logger()->error("{$e->getMessage()} {$e->getTraceAsString()}");
            return false;
        }
    }

    public function update(int $id, array $attributes)
    {
        // TODO: Implement update() method.
        try {
            return $this->repository->update($id, $attributes);
        } catch (Throwable $e) {
            logger()->error("{$e->getMessage()} {$e->getTraceAsString()}");
            return false;
        }
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            return $this->repository->delete($id);
        } catch (Throwable $e) {
            logger()->error("{$e->getMessage()} {$e->getTraceAsString()}");
            return false;
        }
    }
}
