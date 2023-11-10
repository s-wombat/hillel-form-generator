<?php

namespace App\Model;

class Button extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<button ' . $attr .'>' . $name . '</button>';
    }
}