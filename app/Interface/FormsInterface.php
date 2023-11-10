<?php

namespace App\Interface;
interface FormsInterface
{
    public function render(): string;
    public function attributesToString(): string;
}