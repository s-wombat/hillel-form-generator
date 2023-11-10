<?php

namespace App\Model;

class Textarea extends Forms
{
    public function render(string $name, array $attributes, string $innerItem): string {

        $attr = parent::attributesToString($attributes);
        return '<textarea ' . $attr .'/></textarea>';
    }
}