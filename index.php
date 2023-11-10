<?php
require __DIR__ . "/vendor/autoload.php";
use App\FormGenerator;

echo "<link rel='stylesheet' href='style.css'>";

$form = new FormGenerator;

$label = $form->addItem(
    'label',
    [
        'for' => 'blabla'
    ],
    'My label',
);
$input = $form->addItem(
    'input',
    [
        'id' => 'blabla',
        'type' => 'text',
        'name' => 'firstname',
    ]
    );
$submit = $form->addItem(
    'input',
    [
        'type' => 'submit',
        'name' => 'submit',
        'value' => 'Send',
        'class' => 'mySubmit'
    ],
    'mySubmit',
);
$button = $form->addItem(
    'button',
    [
        'type' => 'button',
        'name' => 'show',
        'class' => 'myButton'
    ],
    'Показать',
);
$textarea = $form->addItem(
    'textarea',
    [
        'name' => 'details',
        'cols' => '30',
        'rows' => '3',
        'placeholder' => 'Введите дополнительную информацию'
    ],
);


$option = '';
for ($i=0;$i<6;$i++) {
    $option .= $form->addItem(
        'option',
        [
            'value' => 'user ' . $i,
        ],
        'user ' . $i,
    );
}
$select = $form->addItem(
    'select',
    [
        'name' => 'user_profile',
        'size' => '1'
    ],
    '',
    $option
);
$date = $form->addItem(
    'input',
    [
        'name' => 'Mydate',
        'type' => 'date'
    ],
);

$formItems = [$label, $input, $textarea, $select, $date, $submit, $button];
echo $form->generateForm('POST', 'index.php', 'MyForm', 'form', $formItems);


