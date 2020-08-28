<?php 
	function accu($n) {
		$total = 0;
		for($i=1; $i<=$n; $i++) {
			$total += $i; 
			// 把$i加到$total中
			// $total = $total + $i
		}
		return $total;
	}

	function fact($n) {
		$total = 1;
		for($i=1; $i<=$n; $i++) {
			$total *= $i; 
			// 把$i乘到$total中
			// $total = $total * $i
		}
		return $total;
	}

	function gen_row($bgc, $c1, $c2, $c3) {
		echo "<tr bgcolor=$bgc><td>$c1</td><td>$c2</td><td>$c3</td></tr>";
	}

	echo "<table width=600>";
	gen_row("#aaaaaa", "i", "累加", "累乘");
	for ($i=1; $i<=20; $i++) {
		if ($i%2)
			gen_row("#ccffcc", $i, accu($i), fact($i));
		else
			gen_row("#ffffcc", $i, accu($i), fact($i));
	}
	echo "</table>";
?>


