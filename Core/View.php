<?php

namespace Core;


class View
{
    public static function render($view_name, $data = [])
    {
        foreach ($data ?? [] as $key => $value) {
            $$key = $value;
        }

        include "Views/$view_name.php";
    }
}