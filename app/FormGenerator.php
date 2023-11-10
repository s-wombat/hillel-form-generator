<?php

namespace App;

class FormGenerator
{
    public const NAMESPACE = 'App\Model\\';
    public const ITEMS = ['input', 'textarea', 'button', 'select', 'option', 'optgroup', 'fieldset', 'label', 'form'];

    public function addItem($item, $attributes, $name='',  $innerItem = ''): string {
        $result = '';

        if (empty($attributes)) {
            throw new \Exception("Не переданы атрибуты элемента формы");
        }
        if (!is_array($attributes)) {
            throw new \Exception("Атрибуты элемента формы должны быть массивом");
        }

        try {
            if (in_array($item, self::ITEMS)) {
                $item = self::NAMESPACE . ucfirst($item);
                $objItem = new $item($name, $attributes, $innerItem);
                $result = $objItem->render();
            }
        } catch (\Exception $e) {
            echo 'Error: ', $e->getMessage(), "\n";
        }
        return $result;
    }

    public function generateForm(string $method, string $action, string $name, string $class, array $items): string {

        $content = implode(' ', $items);

        $form = '<div class="formWrapper">';
        $form .= $this->addItem(
            'form',
            [
                'method' => $method,
                'action' => $action,
                'name' => $name,
                'class' => $class,
            ],
            '',
            $content
        );
        $form .= '</div>';
        return $form;
    }
}