<?php

namespace Darbaoui\Avatar\Contracts;

interface AvatarSizeInterface extends ManagerInterface
{
    public function getSize();

    public function getFontSize();
}
