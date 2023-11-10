<?php

namespace App\Interface;
interface FormsInterface
{
    public function render(string $name, array $attributes, string $innerItem): string;
    public function attributesToString(array $attributes): string;
}