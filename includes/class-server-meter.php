<?php

namespace Solr_Indexer\Includes\Server_Meter;


/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Solr_Indexer/includes
 * @subpackage Solr_Indexer/includes
 * @since      1.0.0
 * @author     Your Name <email@example.com>
 */

class Server_Meter {
    
    /**
     * The memory free left in the Solr server.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $memory_free    The memory free left in the Solr server.
     */
    private $memory_free;
    
    /**
     * The max available memory assigned to the Solr server.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $memory_max    The max available memory assigned to the Solr server.
     */
    private $memory_max;    

    /**
     * The total memory assigned to the Solr server.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $memory_total    The total memory assigned to the Solr server.
     */
    private $memory_total;

    /**
     * Memory used in the Solr server.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $memory_used    Memory used in the Solr server.
     */
    private $memory_used;

    /**
     * Time that Solr is been up in ms.
     *
     * @since    1.0.0
     * @access   private
     * @var      integer    $server_uptime    Time that Solr is been up in ms.
     */
    private $server_uptime;

    /**
     * Date that the Solr server was started.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $server_start_time    Date that the Solr server was started.
     */    
    private $server_start_time;


    
    public function __construct() {

    }

    private function load_meters(){        
        //Le pasamos a la API los valores de consulta
        
        //Cargaremos la propiedades del objeto
        
    }


    //Ok la idea seria que esta clase llamara a otra 
    //(principal recuperadora de la inforamcion JSON y 
    //que en esta clase se setearan las propiedades y 
    //en otra? o en la principal? se pintaran los datos)
    
}
