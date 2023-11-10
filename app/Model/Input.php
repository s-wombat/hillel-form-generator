<?php

namespace App\Model;

class Input extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<input ' . $attr .'/>';
    }

}