<?php

namespace Darbaoui\Avatar;

use Darbaoui\Avatar\Contracts\AvatarFormatInterface;
use Darbaoui\Avatar\Contracts\AvatarInterface;
use Darbaoui\Avatar\Contracts\AvatarSizeInterface;
use Darbaoui\Avatar\Contracts\AvatarThemeInterface;

class Avatar implements AvatarInterface
{
    const UI_AVATAR_API = 'https://ui-avatars.com/api/';

    /**
     * @var AvatarSize
     */
    private $avatarSize;

    /**
     * @var AvatarForm
     */
    private $avatarFormat;

    /**
     * @var AvatarTheme
     */
    private $avatarTheme;

    public function __construct(AvatarSizeInterface $avatarSize, AvatarFormatInterface $avatarFormat, AvatarThemeInterface $avatarTheme)
    {
        $this->avatarSize = $avatarSize;
        $this->avatarFormat = $avatarFormat;
        $this->avatarTheme = $avatarTheme;
    }

    /**
     * Get the ui-avatar url.
     *
     * @return string
     */
    public function get()
    {
        return $this->generateAvatarUrl();
    }
    
    /**
     * Get the ui-avatar url.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->generateAvatarUrl();
    }

    /**
     * Get the ui-avatar url.
     *
     * @return string
     */
    public function generateAvatarUrl()
    {
        $parameters = array_merge(
            $this->avatarSize->getParameters(),
            $this->avatarFormat->getParameters(),
            $this->avatarTheme->getParameters()
        );

        return self::UI_AVATAR_API.'?'.http_build_query($parameters);
    }

    /**
     * Define the name param used to generate the letters in the avatar.
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->avatarFormat->set('name', $name);

        return $this;
    }

    /**
     * Define the avatar size param in the query it can between 64 and 512.
     *
     * @param int $size
     * @return $this
     */
    public function size(int $size)
    {
        $this->avatarSize->set('size', $size);

        return $this;
    }

    /**
     * Define the font-size param in the query.
     *
     * @param float $fontSize
     * @return $this
     */
    public function fontSize(float $fontSize)
    {
        $this->avatarSize->set('fontSize', $fontSize);

        return $this;
    }

    /**
     * Define the font color param in the query.
     *
     * @param string $background
     * @return $this
     */
    public function color(string $color)
    {
        $this->avatarTheme->set('color', $color);

        return $this;
    }

    /**
     * Define the background color param in the query.
     *
     * @param string $background
     * @return $this
     */
    public function background(string $background)
    {
        $this->avatarTheme->set('background', $background);

        return $this;
    }

    /**
     * Define the length param in the query.
     *
     * @param int $length
     * @return $this
     */
    public function length(int $length)
    {
        $this->avatarFormat->set('length', $length);

        return $this;
    }

    /**
     * Define the rounded param in the query.
     *
     * @return $this
     */
    public function rounded()
    {
        $this->avatarFormat->set('rounded', true);

        return $this;
    }

    /**
     * Define the bold param in the query.
     *
     * @return $this
     */
    public function bold()
    {
        $this->avatarFormat->set('bold', true);

        return $this;
    }

    /**
     * Define the uppercase param in the query.
     *
     * @param  bool  $uppercase
     * @return $this
     */
    public function uppercase(bool $uppercase = true)
    {
        $this->avatarFormat->set('uppercase', $uppercase);

        return $this;
    }

    /**
     * Define the format param in the query.
     *
     * @return $this
     */
    public function svg()
    {
        $this->avatarFormat->set('format', 'svg');

        return $this;
    }
}
