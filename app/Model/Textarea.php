<?php

namespace App\Model;

class Textarea extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<textarea ' . $attr .'/></textarea>';
    }
}