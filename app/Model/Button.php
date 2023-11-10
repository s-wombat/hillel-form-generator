<?php

namespace App\Model;

class Button extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<button ' . $attr .'>' . $this->name . '</button>';
    }
}