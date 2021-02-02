<?php

namespace Darbaoui\Avatar\Contracts;


interface AvatarFormatInterface extends ManagerInterface
{
    public function getLength();

    public function getSvg();

    public function get($key);
}
