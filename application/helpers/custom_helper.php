<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('store_ratingactive'))
{
    function store_ratingactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Store/currentRating");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_historyactive'))
{
    function store_historyactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Store/ratingHistory");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_complainactive'))
{
    function store_complainactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Store/complainManagement");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_profileactive'))
{
    function store_profileactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Store/Profile");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
