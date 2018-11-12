<?php

if(! function_exists('asset') ) {
    function asset( $path ) {
        echo base_url('assets/' . $path);
    }
}

if(! function_exists('style') ) {
    function style( $file ) {
        $path =  base_url('assets/css/' . $file);
        $link = "<link rel='stylesheet' href='{$path}'>";
        echo $link;
    }
}

if(! function_exists('script') ) {
    function script( $file ) {
        $path =  base_url('assets/js/' . $file);
        $link = "<link rel='stylesheet' href='{$path}'>";
        echo $link;
    }
}

if( ! function_exists('resource') ) {
    function resource( $file='' ) {
        $isLocalFile = FALSE;
        $url =  base_url($file);
        $path = FCPATH.$file;

        $path_info = pathinfo($file);
        $ext = $path_info['extension'];

        $link = $url;
        if( file_exists($path) ) {
            if( $ext === 'css' ) {
                $link = "<link rel='stylesheet' href='{$url}'>";
            } elseif( $ext === 'js' ) {
                $link = "<script src='{$url}'></script>";
            }
        } else {
            if( $ext === 'css' ) {
                $link = "<link rel='stylesheet' href='{$file}'>";
            } elseif( $ext === 'js' ) {
                $link = "<script src='{$file}'></script>";
            }
        }
        echo $link;
    }
}

?>