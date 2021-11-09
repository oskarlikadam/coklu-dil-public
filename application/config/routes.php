<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["kurumsal"]                  = "home/about_us";
$route["referanslar"]               = "home/references";
$route["e-katalog"]                 = "home/catalog_list";
$route["iletisim"]                  = "home/contact";
$route["haberler"]                  = "home/news";
$route["teknik-servis"]             = "home/services";
$route["resim-galerisi"]            = "home/image_gallery";
$route["video-galerisi"]            = "home/video_gallery";

$route["urun-listesi"]              = "home/product_list";
$route["urun-listesi/(:any)"]       = "home/product_list/$1";
$route["urun-detay/(:any)"]         = "home/product_detail/$1";
$route["yeni-urun-detay/(:any)"]    = "home/new_product_detail/$1";
$route["urun-kategorileri"]         = "home/product_categories";
$route["urun-kategorileri/(:any)"]  = "home/product_categories_detail/$1";
