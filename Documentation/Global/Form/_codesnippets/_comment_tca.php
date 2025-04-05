<?php

return [
    'ctrl' => [
        'title' => 'Comment',
        'label' => 'email',
        // ...
    ],
    'types' => [
        '1' => ['showitem' => 'email, content'],
    ],
    'columns' => [
        'email' => [
            'label' => 'Email',
            'config' => [
                'type' => 'email',
            ],
        ],
        'content' => [
            'label' => 'Message',
            'config' => [
                'type' => 'text',
            ],
        ],
    ],
];
