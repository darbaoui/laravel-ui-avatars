<?php

namespace Darbaoui\Avatar;

use Darbaoui\Avatar\Contracts\AvatarSizeInterface;

class AvatarSize implements AvatarSizeInterface
{


    const AVATAR_MAX_SIZE = 512;

    const AVATAR_MIN_SIZE = 64;

    /**
     * The default size parameters.
     * @var array
     */
    private $parameters = [
        'size'      => null,
        'fontSize'  => null,
    ];

    /**
     * Set the string value in argument as value of the key.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return void
     */
    public function set($key, $value)
    {
        $this->parameters[$key] = $value;
    }

    /**
     * Get the size parameter.
     *
     * @return mixed|null
     */
    public function getSize()
    {
        return ($this->parameters['size'] >= self::AVATAR_MIN_SIZE && $this->parameters['size'] <= self::AVATAR_MAX_SIZE) ? $this->parameters['size'] : null;
    }

    /**
     * Get the font-size parameter.
     *
     * @return mixed|null
     */
    public function getFontSize()
    {
        $intFontSize = (int) $this->parameters['fontSize'] * 10;
        return ($intFontSize >= 1 && $intFontSize <= 10) ? $this->parameters['fontSize'] : null;
    }

    /**
     * Get the size parameters.
     *
     * @return array
     */
    public function getParameters(): array
    {
        return [
            'size' => $this->getSize(),
            'font-size' => $this->getFontSize(),
        ];
    }
}
