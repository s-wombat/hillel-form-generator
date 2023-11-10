<?php

namespace App\Model;

use App\Interface\FormsInterface;

abstract class Forms implements FormsInterface
{
    abstract public function render(string $name, array $attributes, string $innerItem): string;
    public function attributesToString(array $attributes): string {
        $attr = '';
        foreach ($attributes as $key => $val) {
            $attr .= $key . '="' . $val . '" ';
        }
        return $attr;
    }
}