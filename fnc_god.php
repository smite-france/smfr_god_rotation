<?php

function get_current_god_rotation(){
    global $wpdb;
    $a_results = array() ;
    $sql = "SELECT id,name,icon FROM `smfr_god_gods` WHERE `rotation` = 1";
    $a_results = $wpdb->get_results($sql, ARRAY_A);
    return $a_results;
}

function get_current_god_infos($id){
    global $wpdb;
    $a_results = array() ;
    $sql = "SELECT id,name,icon FROM `smfr_god_gods` WHERE id = ".$id;
    $a_results = $wpdb->get_results($sql, ARRAY_A);
    return $a_results;
}

function pr_god_rotation($o){
    echo "<pre>";
    print_r($o);
    echo "</pre>";
}