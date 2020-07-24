<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'GESTORWEB',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Gestor</b>WEB',

    'logo_mini' => '<b>G</b>WEB',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | light variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'painel',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and a URL. You can also specify an icon from Font
    | Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    */

    'menu' => [
        [
            'text' => 'Painel de Controle',
            'url'  => '/painel',
            'icon' => 'fas fa-tachometer-alt',
        ],

        //Menu Administrativo

        ['header' => 'ADMINISTRATIVO'],
        
        
        [
            
            'text' => 'Gestão Administrativa',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
            'can'  => 'view_caixa',
            'submenu'   =>  [
                [
                    'text' => 'Gestão de Usuários',
                    'url'  => '/usuarios',
                    'icon' => 'fas fa-address-card',
                ],
                
                [
                    'text' => 'Gestão de Filiais',
                    'url'  => '/filial',
                    'icon' => 'fas fa-fw fa-lock',
                ],
                
               
                
            ],
        ],

        //End Menu Administrativo

        //Start Menu Financeiro

        ['header' => 'FINANCEIRO'],

        [
            'text' => 'Controle Financeiro',
            'url'  => 'admin/settings',
            'icon' => 'fa fa-calculator',
            'submenu' => [                
               
                [
                    'text'    => 'Controle de Caixa',
                    'icon'    => 'fas fa-cash-register',                    
                    'submenu' => [
                        [
                            'text' => 'Entradas',
                            'url'  => '/entradas',
                            'icon' => 'fas fa-money-bill-wave',
                        ],

                        [
                            'text' => 'Saídas',
                            'url'  => '/saidas',
                            'icon' => 'fas fa-money-bill-wave',
                        ],
                        [
                            'text' => 'Fluxo de Caixa',
                            'url'  => '/caixas',
                            'icon' => 'fas fa-money-check-alt',
                        ],
                        [
                            'text' => 'Controle de Entradas',
                            'url'  => '/controle',
                            'can'  => 'view_caixa',
                            'icon' => 'fas fa-money-check-alt',
                        ],
                        [
                            'text' => 'Extrato do Caixa',
                            'url'  => '/extratos',
                            'can'  => 'view_caixa',
                            'icon' => 'fas fa-money-check-alt',
                        ],
                        
                    ],
                ],

                [
                    'text'      => 'Relatório Financeiro',
                    'icon'      => 'fas fa-clipboard-list',
                    'can'  => 'view_caixa',
                    'submenu'   => [
                        [
                            'text' => 'Relatório Geral',
                            'url'  => '/entradas',
                            'icon' => 'fas fa-list-ul',
                        ],

                        [
                            'text' => 'Relatório por Escritórios',
                            'url'  => '/saidas',
                            'icon' => 'fas fa-list-ul',
                        ],


                    ]

                ],

            ],

        ],

        //End Menu Financeiro

        //Start Menu Qualidade e Controle

        ['header' => 'QUALIDADE E CONTROLE'],

        [
            'text'    => 'Controle de Desempenho',
            'icon'    => 'fas fa-fw fa-share',

            'submenu' => [
                [
                    'text' => 'Indicadores',
                    'url'  => '/indicadores',
                    'can'  => 'view_caixa',
                ],

                [
                    'text' => 'Áreas e Setores',
                    'url'  => '/setores',
                    'can'  => 'view_caixa',
                ],
                [
                    'text' => 'Lançamentos',
                    'url'  => '/lancamentos',
                    'can'  => 'view_caixa',
                ],
                [
                    'text' => 'Ressarcimentos',
                    'url'  => '/ressarcimento',
                ],
            ],
        ],
        //End Menu Qualidade e Controle

        //Start Menu Almoxarifado

        ['header' => 'GESTÃO COMERCIAL'],

        [
            'text'    => 'Gestão da Oficina',
            'icon'    => 'fa fa-car',
            
            'submenu' => [  
                [
                    'text' => 'Fornecedor',
                    'icon' => 'fas fa-user-tie',
                    'url'  => '/adesao',
                ],  
                [
                    'text' => 'Produtos',
                    'icon' => 'fa fa-cubes',
                    'url'  => '/adesao',
                ],                 
                [
                    'text' => 'Associado',
                    'icon' => 'fa fa-users',
                    'url'  => '/adesao',
                ],  
                [
                    'text' => 'Veiculo',
                    'icon' => 'fa fa-car',
                    'url'  => '/adesao',
                ],  
                [
                    'text' => 'Ordem de Serviço',
                    'icon' => 'fa fa-shopping-basket',
                    'url'  => '/adesao',
                ],         
            ],
        ],
        //End Menu Qualidade e Controle

        //Start Menu Recursos Humanos

        
        //End Menu Recursos Humanos
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Configure which JavaScript plugins should be included. At this moment,
    | DataTables, Select2, Chartjs and SweetAlert are added out-of-the-box,
    | including the Javascript and CSS files from a CDN via script and link tag.
    | Plugin Name, active status and files array (even empty) are required.
    | Files, when added, need to have type (js or css), asset (true or false) and location (string).
    | When asset is set to true, the location will be output using asset() function.
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//unpkg.com/sweetalert/dist/sweetalert.min.js',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
