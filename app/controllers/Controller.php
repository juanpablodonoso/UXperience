<?php

abstract class Controller
{
    abstract protected function index();
    abstract protected function create();
    abstract protected function store();
    abstract protected function show();
    abstract protected function edit();
    abstract protected function update();
    abstract protected function delete();
}