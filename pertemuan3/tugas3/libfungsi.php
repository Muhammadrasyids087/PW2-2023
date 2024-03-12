
		<?php
			function cekKelulusan($kelulusan) {

				if ($kelulusan > 55) {
					return "LULUS";
				} else {
					return "TIDAK LULUS";
				}
			}
		
		function predikat($grade){
			switch ($grade){
				case 'A':
					return "Sangat baik";
				case 'B':
					return "Baik";
				case 'C':
					return "Cukup baik";
				case 'D':
					return "Kurang Baik";
				case 'E':
					return "Tidak baik";
				default :
					return "Tiak ada";
			}
		}

		function grade($kelulusan){
			if ($kelulusan = 100 && $kelulusan >=85){
				return "A";
			}elseif ($kelulusan <= 84 && $kelulusan >= 70){
				return "B";
			}elseif ($kelulusan <= 69 && $kelulusan >= 56){
				return "C";
			}elseif ($kelulusan <= 55 && $kelulusan >= 36){
				return "D";
			}elseif ($kelulusan <= 35 && $kelulusan >= 0){
				return "E";
			}else {
				return "I";
			}
		}
		
?>