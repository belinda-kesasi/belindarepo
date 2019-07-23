<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'benettoprice',
    'title'        => 'Netto Price Module',
    'description'  => array(
        'de' => 'Modul zur Anzeige des Nettopreises der Produkte.',
        'en' => 'Module for displaying the netto price of the products.',
    ),
    'thumbnail'    => '',
    'version'      => '5.2.5',
    'author'       => 'Belinda Kjesasi',
    'url'          => '',
    'email'        => 'belinda.kjesasi@maexware-solutions.de',
    'extend'       => array(   
              \OxidEsales\Eshop\Core\ViewConfig::class                               =>\Maexware\NettoPriceModule\Core\ViewConfig::class,                              
             \OxidEsales\Eshop\Application\Model\Article::class                       =>\Maexware\NettoPriceModule\Model\Article::class,
              
 
        
    ),
    'controllers' => array(
        

    ),
    'events'       => array(
        'onActivate'   => '\Maexware\NettoPriceModule\Core\Events::onActivate',
        'onDeactivate' => '\Maexware\NettoPriceModule\Core\Events::onDeactivate'
        
    ),
    'templates' => array(
        // iam not familiar with sublime :)
    ),
    'blocks' => array(
       array('template' => 'page/details/inc/productmain.tpl', 'block'=>'details_productmain_tprice',     'file'=>'/views/blocks/benettopricedetailsproductmaintprice.tpl'),
          array('template' => 'widget/product/listitem_infogrid.tpl', 'block'=>'widget_product_listitem_infogrid_netprice', 'file'=>'/views/blocks/benettopricelistitem_infogrid.tpl'),
       
     ),
    'settings' => array(
    
                 array('group' => 'main', 'name' => 'beUsergroup', 'type' => 'arr', 'value' => array('oxidadmin',  'oxidblacklist','oxidblocked', 'oxidcustomer','oxiddealer','oxidforeigncustomer','oxidgoodcust','oxidmiddlecust','oxidnewcustomer','oxidnewsletter','oxidnotyetordered','oxidpowershopper','oxidpricea','oxidpriceb','oxidpricec','oxidsmallcust')),
         
       
       


    ),

       
);

