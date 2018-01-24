<?php
/*
Plugin Name: Solr Indexer
Description: Test
Author: Samuel García Alfageme - Mindala Technologies
Version: 0.0.1
Author URI: http://www,mindalatech.com
*/

namespace Solr_Indexer;

//Avoid direct calls
defined( 'ABSPATH' ) or die( 'bitch please... GTFO' );

//Print plugin's options on WP Menu
add_action('admin_menu','solr_indexer_settings_menu');

function solr_indexer_settings_menu(){
    //Main/home
    add_menu_page('Solr Indexer','Solr Indexer','manage_options','solr-indexer-main','solr_indexer_init');
    //Imports
    add_submenu_page('solr-indexer-main','Importaciones','Importaciones','manage_options','solr-indexer-import','solr_indexer_import_init');
    //Core managment
    add_submenu_page('solr-indexer-main','Gestión de cores','Gestión de cores','manage_options','solr-indexer-core-managment','solr_indexer_core_managment_init');
    //Schema modification
    add_submenu_page('solr-indexer-main','Schema','Schema','manage_options','solr-indexer-schema','solr_indexer_schema_init');    
}


function solr_indexer_init(){
    echo "<h1>Estado del servidor Solr</h1>";
    
}


function solr_indexer_import_init(){
    echo "<h1>Hello World2!</h1>";
}