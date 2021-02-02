<?php

namespace Darbaoui\Avatar\Contracts;


interface AvatarInterface
{
    public function name(string $name);

    public function size(int $size);

    public function fontSize(float $fontSize);

    public function color(string $color);

    public function background(string $background);

    public function length(int $length);

    public function rounded();

    public function bold();
    
    public function uppercase(bool $uppercase);
}
