<?php

namespace Darbaoui\Avatar\Contracts;


interface AvatarThemeInterface extends ManagerInterface
{
    public function get($key);
}
