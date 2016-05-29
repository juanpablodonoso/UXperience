<?php

abstract class Controller
{
    abstract protected function index();
    abstract protected function create();
    abstract protected function store();
    abstract protected function show($id);
    abstract protected function edit($id);
    abstract protected function update($id);
    abstract protected function delete($id);
}