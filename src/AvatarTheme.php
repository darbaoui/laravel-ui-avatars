<?php

namespace Darbaoui\Avatar;

use Darbaoui\Avatar\Contracts\AvatarThemeInterface;

class AvatarTheme implements AvatarThemeInterface
{
    /**
     * The default theme parameters.
     *
     * @var array
     */
    private $parameters = [
        'background' => null,
        'color'      => null,
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
     * Get the argument value of the given key.
     *
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->parameters[$key] ? $this->parameters[$key] : null;
    }

    /**
     * Get the theme parameters.
     *
     * @return array
     */
    public function getParameters(): array
    {
        return  $this->parameters;
    }
}
