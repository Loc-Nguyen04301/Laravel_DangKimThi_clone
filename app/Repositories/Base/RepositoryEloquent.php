<?php

namespace App\Repositories\Base;

abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $_model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->_model = app()->make($this->getModel());
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->_model->all();
    }

    public function findById(int $id)
    {
        // TODO: Implement find() method.
        return $this->_model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
        return $this->_model->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        // TODO: Implement update() method.
        $result = $this->findById($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $result = $this->findById($id);
        if ($result) {
            return $result->delete();
        }
        return false;
    }
}
