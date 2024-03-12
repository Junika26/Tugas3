<?php

function lulus($hasil_akhir){
    if($hasil_akhir > 75){
        return 'Lulus';    
    }else if($hasil_akhir < 76){
        return 'Tidak Lulus.';
    }
}

function nilai($hasil_akhir){
    if($hasil_akhir >= 86){
        return 'A';
    }elseif($hasil_akhir >= 70 ){
        return 'B';
    }elseif($hasil_akhir >= 65){
        return 'C';
    }elseif($hasil_akhir >= 36){
        return 'D';
    }elseif($hasil_akhir <= 35){
        return 'E';
    }
}

function pengetahuan($hasil_akhir){
    if($hasil_akhir >= 86){
        return 'Sangat Baik';
    }elseif($hasil_akhir >= 70 ){
        return 'Baik';
    }elseif($hasil_akhir >= 65){
        return 'Cukup';
    }elseif($hasil_akhir >= 36){
        return 'Kurang';
    }elseif($hasil_akhir <= 35){
        return 'Tidak Paham';
    }
}




?>