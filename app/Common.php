<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    // HEADER NAV MENU
    public static function navMenu(){
        $navMenu = [
            0 => [
                'Title' => trans('lang.nav_products'),
                'Link' => route('product_index'),
                'Slug' => 'san-pham'
            ],
            1 => [
                'Title' => trans('lang.nav_application'),
                'Link' => route('application_index'),
                'Slug' => 'ung-dung'
            ],
            2 => [
                'Title' => trans('lang.nav_about'),
                'Link' => route('about_us'),
                'Slug' => 've-chung-toi'
            ],
            3 => [
                'Title' => trans('lang.nav_contact'),
                'Link' => route('contact_us'),
                'Slug' => 'lien-he'
            ],
        ];

        return $navMenu;
    }

    // PRODUCTS
    public static function products(){
        $products = collect();

        $products->push(
            [
                'Id' => 0,
                'Title' => 'Fancy',
                'Thumb' => 'https://images.unsplash.com/photo-1557761670-03a0a75f2766?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                'Desc' => trans('lang.product_fancy_desc'),
                'Priority' => 0,
                'Groups' => [
                    0 => [
                        'Name' => 'Wove',
                        'Size' => '787 x 1091',
                        'Quantity' => [180, 250, 300],
                        'Props' => ['White', 'Natural', 'Cream'],
                    ],
                    1 => [
                        'Name' => 'Stucco',
                        'Size' => '787 x 1091',
                        'Quantity' => [180, 250, 300],
                        'Props' => ['White', 'Natural', 'Cream'],
                    ],
                    2 => [
                        'Name' => 'Weave',
                        'Size' => '787 x 1091',
                        'Quantity' => [180, 250, 300],
                        'Props' => ['White', 'Natural', 'Cream'],
                    ],
                    3 => [
                        'Name' => 'Line',
                        'Size' => '787 x 1091',
                        'Quantity' => [180, 250, 300],
                        'Props' => ['White', 'Natural', 'Cream'],
                    ],
                    4 => [
                        'Name' => 'Laid',
                        'Size' => '787 x 1091',
                        'Quantity' => [180, 250, 300],
                        'Props' => ['White', 'Natural', 'Cream'],
                    ],
                    5 => [
                        'Name' => 'Rive',
                        'Size' => '787 x 1091',
                        'Quantity' => [180, 250, 300],
                        'Props' => ['White', 'Natural', 'Cream'],
                    ],
                ]
            ]
        );

        $products->push(
            [
                'Id' => 1,
                'Title' => 'Fedrigoni',
                'Thumb' => 'https://images.unsplash.com/photo-1521685468847-de0a1a3c41a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                'Desc' => trans('lang.product_fedri_desc'),
                'Priority' => 1,
                'Groups' => [
                    0 => [
                        'Name' => 'Old Mill',
                        'Size' => '787 x 1091',
                        'Quantity' => [100, 130, 190, 250, 300],
                        'Props' => ['Brianco', 'Ivory'],
                    ],
                    1 => [
                        'Name' => 'Stucco',
                        'Size' => '700 x 1000',
                        'Quantity' => [120, 210],
                        'Props' => ['Gesso'],
                    ],
                ],
            ]
        );

        $products->push(
            [
                'Id' => 2,
                'Title' => 'Kishu',
                'Thumb' => 'https://images.unsplash.com/photo-1526314339866-9c8fead21545?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
                'Desc' => trans('lang.product_kishu_desc'),
                'Priority' => 2,
                'Groups' => [
                    0 => [
                        'Name' => 'Kishu',
                        'Size' => '787 x 1091',
                        'Quantity' => [124, 157, 204],
                        'Props' => ['Black', 'Grey', 'Snow White', 'Red', 'Royal Orange', 'Orange', 'Peach', 'Salmon', 'Pink', 'Cosmos Pink', 'Light Pink', 'Purple', 'Lilac', 'Lavender', 'Misty Blue', 'Light Grey', 'Deep Blue', 'Sky Blue', 'Aqua Blue', 'Blue', 'Emerald', 'Green', ' Deep Green', 'Fresh Green', 'Bright Green', 'Bright Yellow', 'Fresh Yellow', 'Deep Yellow', 'Yellow', 'Buff', 'Beige', 'Ivory', 'Lemon'],
                    ],
                ],
            ]
        );

        $products->push(
            [
                'Id' => 3,
                'Title' => 'Marshmallow',
                'Thumb' => 'https://images.unsplash.com/photo-1534504700761-50a76b48a245?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                'Desc' => trans('lang.product_marsh_desc'),
                'Priority' => 2,
                'Groups' => [
                    0 => [
                        'Name' => 'Marshmallow',
                        'Size' => '788 x 1091',
                        'Quantity' => [81.4, 104.7, 127.9, 157, 186, 209.3, 232.8, 262.6],
                        'Props' => ['White', 'Natural'],
                    ],
                ],
            ]
        );

        $products->push(
            [
                'Id' => 4,
                'Title' => 'Others',
                'Thumb' => 'https://images.unsplash.com/photo-1510575269484-7c824fa4cd7b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
                'Desc' => trans('lang.product_other_desc'),
                'Priority' => 2,
                'Groups' => [
                    0 => [
                        'Name' => 'Smooth',
                        'Size' => '787 x 1092',
                        'Quantity' => [120, 180, 240, 300, 370],
                        'Props' => ['White', 'Natural'],
                    ],
                    1 => [
                        'Name' => 'Snow Matt',
                        'Size' => '787 x 1092',
                        'Quantity' => [105, 157, 250, 300],
                        'Props' => ['White', 'Natural'],
                    ],
                    2 => [
                        'Name' => 'Yoghurt',
                        'Size' => '787 x 1092',
                        'Quantity' => [160, 200, 260],
                        'Props' => ['High White', 'Natural'],
                    ],
                    3 => [
                        'Name' => 'Fiber Art 1',
                        'Size' => '787 x 1092',
                        'Quantity' => [120, 200, 300],
                        'Props' => ['Natural', 'Khaki'],
                    ],
                    4 => [
                        'Name' => 'Fiber Art 2',
                        'Size' => '787 x 1092',
                        'Quantity' => [128, 176, 270],
                        'Props' => ['White', 'Havana', 'Kraft'],
                    ],
                    5 => [
                        'Name' => 'Magic',
                        'Size' => '788 x 1092',
                        'Quantity' => [120, 160, 250, 300],
                        'Props' => ['Ice White', 'Soft White', 'Bridal White', 'Champagne', 'Bridal White', 'Garnet', 'Ocean Blue', 'Might Night', 'Love Red', 'Sun Gold', 'Space Black'],
                    ],
                    6 => [
                        'Name' => 'Royal',
                        'Size' => '650 x 860',
                        'Quantity' => [120, 150, 190, 240],
                        'Props' => ['White', 'Natural'],
                    ],
                    7 => [
                        'Name' => 'Royal',
                        'Size' => '790 x 1090',
                        'Quantity' => [120, 150, 190, 240],
                        'Props' => ['White', 'Natural'],
                    ],
                    8 => [
                        'Name' => 'Extra',
                        'Size' => '790 x 1090',
                        'Quantity' => [140, 200, 250],
                        'Props' => ['White'],
                    ],
                ],
            ]
        );

        return $products;
    }

    // APPLICATIONS
    public static function applications(){
        $applications = collect();

        $applications->push(
            [
                'Id' => 0,
                'Title' => trans('lang.app_card'),
                'Desc' => '',
            ]
        );

        $applications->push(
            [
                'Id' => 1,
                'Title' => trans('lang.app_print'),
                'Desc' => '',
            ]
        );

        $applications->push(
            [
                'Id' => 2,
                'Title' => trans('lang.app_hand_book'),
                'Desc' => '',
            ]
        );

        $applications->push(
            [
                'Id' => 3,
                'Title' => trans('lang.app_calendar'),
                'Desc' => '',
            ]
        );

        return $applications;
    }

    // APPLICATIONS
    public static function applicationProducts(){
        $applicationProducts = collect();

        $applicationProducts->push(
            [
                'Id' => 0,
                'Type' => 1,
                'Name' => 'Product 1',
                'Image' => 'https://images.unsplash.com/photo-1587614382346-4ec70e388b28?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        $applicationProducts->push(
            [
                'Id' => 1,
                'Type' => 2,
                'Name' => 'Product 2',
                'Image' => 'https://images.unsplash.com/photo-1598859309242-9d5f466c942d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        $applicationProducts->push(
            [
                'Id' => 2,
                'Type' => 1,
                'Name' => 'Product 3',
                'Image' => 'https://images.unsplash.com/photo-1593642703013-5a3b53c965f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        $applicationProducts->push(
            [
                'Id' => 3,
                'Type' => 2,
                'Name' => 'Product 4',
                'Image' => 'https://images.unsplash.com/photo-1598632022981-9426f46c6e97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        $applicationProducts->push(
            [
                'Id' => 4,
                'Type' => 1,
                'Name' => 'Product 5',
                'Image' => 'https://images.unsplash.com/photo-1593642703013-5a3b53c965f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        $applicationProducts->push(
            [
                'Id' => 5,
                'Type' => 4,
                'Name' => 'Product 6',
                'Image' => 'https://images.unsplash.com/photo-1598632022981-9426f46c6e97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        $applicationProducts->push(
            [
                'Id' => 6,
                'Type' => 3,
                'Name' => 'Product 7',
                'Image' => 'https://images.unsplash.com/photo-1598632022981-9426f46c6e97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60',
            ]
        );

        return $applicationProducts;
    }
}
