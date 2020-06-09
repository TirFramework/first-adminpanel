<?php

namespace Tir\FirstPanel\Services;

use Illuminate\Support\Arr;

class AdminMenu
{
    public $nav = [];
    public $item = [];
    public $slug ;



    public function title(string $name)
    {
        $this->item['title'] = trans($name);
        return $this;
    }

    public function link($link)
    {
        $this->item['link'] = $link;
        return $this;
    }

    public function route($route)
    {
        $this->item['link'] = route($route);
        return $this;
    }
    public function weight($weight)
    {
        $this->item['weight'] = $weight;
        return $this;
    }

    public function icon($icon)
    {
        $this->item['icon'] = $icon;
        return $this;
    }

    public function item($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function add()
    {
        $this->slug = str_replace('.','.sub.',$this->slug);
        Arr::set($this->nav, $this->slug, $this->item);
    }




}