<?php

namespace App\Model;

class Label extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<label ' . $attr .'>' . $name . '</label>';
    }

}