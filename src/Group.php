<?php

namespace Spatie\Navigation;

interface Group extends Node
{
    public function base() : Node;
    public function children() : array;
    public function map(callable $callable) : array;
}