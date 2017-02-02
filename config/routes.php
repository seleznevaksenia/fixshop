<?php

return array(
    
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
     
    'catalog' => 'catalog/index', // actionIndex в CatalogController
   
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    'cabinet/edit' =>  'cabinet/edit',
    'cart/add/([0-9]+)' => 'cart/add/$1',//
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',//
    'cart/checkout' => 'cart/checkout',//
    'cart' => 'cart/index',
    'cabinet' =>  'cabinet/index',
    'user/register' => 'user/register',
    'user/logout' => 'user/logout',
    'user/login' => 'user/login',
    '' => 'site/index', // actionIndex в SiteController
    'contact' => 'site/contact',
    
);