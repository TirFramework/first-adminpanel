<?php


class AdminMenu
{
    public $menu;

    public function __construct()
    {
        $this->menu = [
            'پنل کاربری',
            'محصولات'   => ['ویژگی‌ها','دسته‌بندی ویژگی‌ها','محصول‌ها','گزینه‌ها','دسته‌بندی‌ها']
        ];
    }

    public function addMenu($menu)
    {
        array_push($this->menu,$menu);
        return $this->menu;
    }
}