<?php

namespace Darbaoui\Avatar\Contracts;

interface ManagerInterface
{
    public function set($key, $value);

    public function getParameters(): array;
}
