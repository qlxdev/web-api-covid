<?php
/**
 * Get Data API Kawalcorona.com
 * by Koboy.my.id
 */
function get_covid($param=false){
    if ($param == 'provinsi') {        
        // Data Provinsi Indonesia
        $url = "https://api.kawalcorona.com/indonesia/provinsi";
        $get = file_get_contents($url);
        $json_result = json_decode($get, true);
        # code...
    } elseif ($param == 'indonesia') {
        // Data Indonesia
        $url = "https://api.kawalcorona.com/indonesia";
        $get = file_get_contents($url);
        $json_result = json_decode($get, true);
        # code...
    } elseif ($param == 'positif') {
        // Data Indonesia
        $url = "https://api.kawalcorona.com/postif";
        $get = file_get_contents($url);
        $json_result = json_decode($get, true);
        # code...
    } elseif ($param == 'sembuh') {
        // Data Indonesia
        $url = "https://api.kawalcorona.com/sembuh";
        $get = file_get_contents($url);
        $json_result = json_decode($get, true);
        # code...
    } elseif ($param == 'meninggal') {
        // Data Indonesia
        $url = "https://api.kawalcorona.com/meninggal";
        $get = file_get_contents($url);
        $json_result = json_decode($get, true);
        # code...
    } else {
        // Data Global
        $url = "https://api.kawalcorona.com/";
        $get = file_get_contents($url);
        $json_result = json_decode($get, true);
        # code...
    }
    return $json_result;
}
