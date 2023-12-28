<?php

return [
    'sections' => [
        'app' => [
            'title' => 'Общие настройки',
            'descriptions' => 'Общие настройки приложения.', // (optional)
            'icon' => 'fa fa-cog', // (optional)

            'inputs' => [
                [
                    'name' => 'app_name', // unique key for setting
                    'type' => 'text', // type of input can be text, number, textarea, select, boolean, checkbox etc.
                    'label' => 'Слоган сайта', // label for input
                    // optional properties
                    'placeholder' => 'Application Name', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => env('APP_NAME'), // any default value
                    'hint' => 'Здесь вы можете установить название приложения' // help block text for input
                ],
                [
                    'name' => 'show_share_buttons',
                    'type' => 'boolean',
                    'label' => 'Включить кнопки поделиться',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => 'required|boolean',
                    'value' => 1,
                    'true_value' => 1,
                    'false_value' => 0,
                ],
                [
                    'name' => 'min_amount_btc',
                    'type' => 'number',
                    'label' => 'Минимальная сумма BTC',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['required', 'numeric', 'min:0'],
                    'value' => 0.01
                ],
                [
                    'name' => 'max_amount_btc',
                    'type' => 'number',
                    'label' => 'Максимальная сумма BTC',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['required', 'numeric', 'min:0'],
                    'value' => 1
                ],

//                [
//                    'name' => 'logo',
//                    'type' => 'image',
//                    'label' => 'Upload logo',
//                    'hint' => 'Must be an image and cropped in desired size',
//                    'rules' => 'image|max:500',
//                    'disk' => 'public', // which disk you want to upload
//                    'path' => 'app', // path on the disk,
//                    'preview_class' => 'thumbnail',
//                    'preview_style' => 'height:40px'
//                ]
            ]
        ],
        'keys' => [
            'title' => 'Ключи от сторонних приложений',
            'icon' => 'fa fa-key', // (optional)

            'inputs' => [
                [
                    'name' => 'ip_geolocation_api_key',
                    'type' => 'text',
                    'label' => 'IP Geolocation Api',
                    'class' => 'form-control',
                    'rules' => 'nullable',
                    'value' => env('IP_GEOLOCATION_API'),
                    'hint' => 'Апи для обнаружение геолокацию пользователя'
                ],
            ]
        ],
        'proxy' => [
            'title' => 'Proxy',
            'icon' => 'fa fa-globe', // (optional)

            'inputs' => [
                [
                    'name' => 'proxy_url',
                    'type' => 'text',
                    'label' => 'Proxy url',
                    'class' => 'form-control',
                    'hint' => 'Для FixedFloat',
                    'style' => '',
                    'rules' => 'nullable|min:2',
                    'value' => env('PROXY_URL'),
                ],
            ]
        ],
        'link' => [
            'title' => 'Ссылки',
            'icon' => 'fa fa-link',

            'inputs' => [
                [
                    'name' => 'twitter_url',
                    'type' => 'text',
                    'label' => 'Twitter',
                    'placeholder' => 'https://twitter.com',
                    'value' => 'https://twitter.com',
                    'rules' => 'nullable|string|min:2|max:191',
                ],
            ]
        ],
        'seo' => [
            'title' => 'SEO',
            'icon' => 'fa fa-globe', // (optional)

            'inputs' => [
                [
                    'name' => 'seo_title',
                    'type' => 'text',
                    'label' => 'Title',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => 'nullable|min:2|max:20',
                    'value' => '',
                ],
                [
                    'name' => 'seo_description',
                    'type' => 'text',
                    'label' => 'Description',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => 'nullable|min:2|max:191',
                    'value' => '',
                ],
                [
                    'name' => 'seo_keywords',
                    'type' => 'text',
                    'label' => 'Keywords',
                    'placeholder' => 'разделить через запятую',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => 'nullable|min:2|max:191',
                    'value' => '',
                ],
            ]
        ],
        'wallet' => [
            'title' => 'Wallets',
            'icon' => 'fa fa-fa-wallet',
            'inputs' => [
                [
                    'name' => 'wallet:btc_1',
                    'type' => 'text',
                    'label' => 'BTC address 1',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_2',
                    'type' => 'text',
                    'label' => 'BTC address 2',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_3',
                    'type' => 'text',
                    'label' => 'BTC address 3',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_4',
                    'type' => 'text',
                    'label' => 'BTC address 4',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_5',
                    'type' => 'text',
                    'label' => 'BTC address 5',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_6',
                    'type' => 'text',
                    'label' => 'BTC address 6',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_7',
                    'type' => 'text',
                    'label' => 'BTC address 7',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_8',
                    'type' => 'text',
                    'label' => 'BTC address 8',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_9',
                    'type' => 'text',
                    'label' => 'BTC address 9',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_10',
                    'type' => 'text',
                    'label' => 'BTC address 10',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_11',
                    'type' => 'text',
                    'label' => 'BTC address 11',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_12',
                    'type' => 'text',
                    'label' => 'BTC address 12',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_13',
                    'type' => 'text',
                    'label' => 'BTC address 13',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_14',
                    'type' => 'text',
                    'label' => 'BTC address 14',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
                [
                    'name' => 'wallet:btc_15',
                    'type' => 'text',
                    'label' => 'BTC address 15',
                    'class' => 'form-control',
                    'style' => '',
                    'rules' => ['sometimes', 'nullable', 'btc_address']
                ],
            ]
        ],
    ],

    // Setting page url, will be used for get and post request
    'url' => '/admin/settings',

    // Any middleware you want to run on above route
    'middleware' => ['auth', 'verified'],

    // Route Names
    'route_names' => [
        'index' => 'admin.settings.index',
        'store' => 'admin.settings.store',
    ],

    // View settings
    'setting_page_view' => 'admin.settings.edit',
    'flash_partial' => 'app_settings::_flash',

    // Setting section class setting
    'section_class' => 'card mb-3',
    'section_heading_class' => 'card-header',
    'section_body_class' => 'card-body',

    // Input wrapper and group class setting
    'input_wrapper_class' => 'form-group',
    'input_class' => 'form-control',
    'input_error_class' => 'has-error',
    'input_invalid_class' => 'is-invalid',
    'input_hint_class' => 'form-text text-muted',
    'input_error_feedback_class' => 'text-danger',

    // Submit button
    'submit_btn_text' => 'Сохранить',
    'submit_success_message' => 'Настройки сохранены.',

    // Remove any setting which declaration removed later from sections
    'remove_abandoned_settings' => false,

    // Controller to show and handle save setting
    'controller' => '\App\Http\Controllers\Admin\AppSettingController',

    // settings group
    'setting_group' => 'default'
];
