<?php
function grade_nilai($nilai_akhir){
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100){
            echo 'A';
    }elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84){
            echo'B';
    }elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69){
            echo'C';
    }elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55){
            echo'D';
    }elseif ($nilai_akhir <= 35 && $nilai_akhir <= 35){
            echo'E';
    }else{
            echo'I';
    }
}

function predikat_nilai($nilai_akhir){
    switch(true){
            case ($nilai_akhir >= 85 && $nilai_akhir <= 100):
                    echo 'Sangat memuaskan';
                    break;
            case ($nilai_akhir >= 70 && $nilai_akhir <= 84):
                    echo 'Memuaskan'; 
                    break;
            case ($nilai_akhir >= 56 && $nilai_akhir <= 69):
                    echo 'Cukup';
                    break;
            case ($nilai_akhir >= 36 && $nilai_akhir <= 55):
                    echo 'Kurang';
                    break;
            case ($nilai_akhir <= 35 && $nilai_akhir <= 35):
                    echo 'Sangat kurang';
                    break;    
            default:
                    echo 'Predikat tidak diketahui';                                   
    }
}

function nilai($nilai_akhir){
    if ($nilai_akhir > 55) {
        echo 'Lulus';
    }else {
        echo 'Tidak Lulus';
    }
}
?>