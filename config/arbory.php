<?php

return [
    'title' => 'Arbory',
    'uri' => 'admin',

    /**
     * Locale to use in CMS
     */
    // 'locale' => 'en',

    /**
     * Locale to use for resource translations in CMS. null value will use CMS
     * default locale or application default locale.
     */
    //'resource_locale' => 'en',

    'locales' => [
        'en',
    ],

    'menu' => [
        Arbory\Base\Http\Controllers\Admin\NodesController::class,
        Arbory\Base\Http\Controllers\Admin\LanguageController::class,
        Arbory\Base\Http\Controllers\Admin\SettingsController::class,
        Arbory\Base\Http\Controllers\Admin\TranslationsController::class,
        Arbory\Base\Http\Controllers\Admin\RedirectsController::class,
        [
            Arbory\Base\Http\Controllers\Admin\UsersController::class,
            Arbory\Base\Http\Controllers\Admin\RolesController::class,
        ],
    ],

    'pagination' => [
        'items_per_page' => 15,
    ],

    'fields' => [
        'map_coordinates' => [
            'zoom' => 12,
            'coordinates' => [
                'lat' => 56.94725473000847,
                'lng' => 24.099142639160167,
            ],
        ],
        'sprite_icon' => [
            'path' => base_path('resources/assets/svg/icons.svg'),
        ],
    ],

    'field_types' => [
        'belongsTo' => Arbory\Base\Admin\Form\Fields\BelongsTo::class,
        'belongsToMany' => Arbory\Base\Admin\Form\Fields\BelongsToMany::class,
        'boolean' => Arbory\Base\Admin\Form\Fields\Boolean::class,
        'checkbox' => Arbory\Base\Admin\Form\Fields\Checkbox::class,
        'dateTime' => Arbory\Base\Admin\Form\Fields\DateTime::class,
        'file' => Arbory\Base\Admin\Form\Fields\ArboryFile::class,
        'hasMany' => Arbory\Base\Admin\Form\Fields\HasMany::class,
        'hasOne' => Arbory\Base\Admin\Form\Fields\HasOne::class,
        'hidden' => Arbory\Base\Admin\Form\Fields\Hidden::class,
        'icon' => Arbory\Base\Admin\Form\Fields\IconPicker::class,
        'image' => Arbory\Base\Admin\Form\Fields\ArboryImage::class,
        'link' => Arbory\Base\Admin\Form\Fields\Link::class,
        'mapCoordinates' => Arbory\Base\Admin\Form\Fields\MapCoordinates::class,
        'markup' => Arbory\Base\Admin\Form\Fields\CompactRichtext::class,
        'multipleSelect' => Arbory\Base\Admin\Form\Fields\MultipleSelect::class,
        'objectRelation' => Arbory\Base\Admin\Form\Fields\ObjectRelation::class,
        'password' => Arbory\Base\Admin\Form\Fields\Password::class,
        'richtext' => Arbory\Base\Admin\Form\Fields\Richtext::class,
        'select' => Arbory\Base\Admin\Form\Fields\Select::class,
        'slug' => Arbory\Base\Admin\Form\Fields\Slug::class,
        'text' => Arbory\Base\Admin\Form\Fields\Text::class,
        'textarea' => Arbory\Base\Admin\Form\Fields\Textarea::class,
        'translatable' => Arbory\Base\Admin\Form\Fields\Translatable::class,
        'constructor' => Arbory\Base\Admin\Form\Fields\Constructor::class,
    ],

    'field_styles' => [
        'normal' => \Arbory\Base\Admin\Form\Fields\Renderer\Styles\LabeledFieldStyle::class,
        'basic' => \Arbory\Base\Admin\Form\Fields\Renderer\Styles\BasicFieldStyle::class,
        'raw' => \Arbory\Base\Admin\Form\Fields\Renderer\Styles\RawFieldStyle::class,
        'nested' => \Arbory\Base\Admin\Form\Fields\Renderer\Styles\NestedFieldStyle::class,
        'section' => \Arbory\Base\Admin\Form\Fields\Renderer\Styles\SectionFieldStyle::class,
    ],

    'default_field_style' => 'normal',

    'auth' => [
        'ip' => [
            'allowed' => [],
        ],
        'activations' => [
            'expires' => 259200,
            'lottery' => [2, 100],
        ],
        'reminders' => [
            'expires' => 14400,
            'lottery' => [2, 100],
        ],
        'throttling' => [
            'global' => [
                'interval' => 900,
                'thresholds' => [
                    10 => 1,
                    20 => 2,
                    30 => 4,
                    40 => 8,
                    50 => 16,
                    60 => 12,
                ],
            ],
            'ip' => [
                'interval' => 900,
                'thresholds' => 5,
            ],
            'user' => [
                'interval' => 900,
                'thresholds' => 5,
            ],
        ],
    ],

    'services' => [
        'google' => [
            'maps_api_key' => env('GOOGLE_MAPS_API_KEY'),
        ],
    ],

    'preview' => [
        'enabled' => true,
        'slug_salt' => env('APP_KEY'),
    ],
];
