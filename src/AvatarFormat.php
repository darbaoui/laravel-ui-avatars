<?php
namespace Darbaoui\Avatar;

use Darbaoui\Avatar\Contracts\AvatarFormatInterface;

class AvatarFormat implements AvatarFormatInterface  {


    /**
     * The default format parameters
     * @var array 
     */
    private $parameters = [
        'rounded' => null,
        'uppercase' => null,
        'bold' => null,
        'length' => 2,
        'format' => 'png'
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
     * Get the length parameter
     * 
     * @return mixed|null
     */
    public function getLength() 
    {
        return $this->parameters['length'] == 1 ? $this->parameters['length'] : null;
    }

    /**
     * Get the format parameter
     * 
     * @return mixed|null
     */
    public function getSvg()
    {
        return $this->parameters['format'] === 'svg'? $this->parameters['format'] : null;
    }

    /**
     * Get the format parameters
     * 
     * @return array
     */
    public function getParameters (): array
    {
       return array_merge($this->parameters, [
            'length' => $this->getLength(),
            'format' => $this->getSvg()
       ]);
    }
    
}