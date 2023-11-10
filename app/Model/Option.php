<?php

namespace App\Model;

class Option extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<option ' . $attr .'/>' . $name . '</option>';
    }
}