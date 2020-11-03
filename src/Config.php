<?php

namespace Godruoyi\OCR;

class Config
{
    /**
     * Config data.
     *
     * @var array
     */
    protected $items;

    /**
     * Make config instance
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Get config item.
     *
     * @param  mixed $key
     * @param  mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return Support\Arr::get($this->items, $key, $default);
    }
}