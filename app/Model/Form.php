<?php

namespace App\Model;

class Form extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<form ' . $attr .'">' . $innerItem . '</form>';
    }
}