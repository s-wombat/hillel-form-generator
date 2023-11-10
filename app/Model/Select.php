<?php

namespace App\Model;

class Select extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<select ' . $attr .'/>' . $innerItem . '</select>';
    }
}