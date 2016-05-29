<?php

abstract class Model {
    protected abstract function all();
    protected abstract function find($id);
    protected abstract function delete($id);
    protected abstract function update($model);
    protected abstract function save($model);

}