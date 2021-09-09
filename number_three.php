<?php

function funUBT($input)
{
	$input_var = explode(' ', $input);

	// unigrams
	$unigrams = '';
	foreach ($input_var as $unigram) {
		$unigrams .= $unigram . ', ';
	}
	$unigrams = substr($unigrams, 0, -2);

	// bigrams
	$x = 0;
	$bigrams = '';
	foreach ($input_var as $bigram) {
		if ($x < 1) {
			$bigrams .= $bigram . ' ';
			$x++;
		} else {
			$bigrams .= $bigram . ', ';
			$x = 0;
		}
	}
	$bigrams = substr($bigrams, 0, -2);

	// trigrams
	$y = 0;
	$trigrams = '';
	foreach ($input_var as $trigram) {
		if ($y < 2) {
			$trigrams .= $trigram . ' ';
			$y++;
		} else {
			$trigrams .= $trigram . ', ';
			$y = 0;
		}
	}
	$trigrams = substr($trigrams, 0, -2);


	$result = 'Unigram  : ' . $unigrams . '<br>';
	$result .= 'Bigram  : ' . $bigrams . '<br>';
	$result .= 'Trigram : ' . $trigrams;

	return $result;
}
$nama = funUBT(@$_GET['nama']);
// Jakarta adalah ibukota negara Republik Indonesia

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form method="GET">
		<div>
			<label>Masukan Kata</label> <br>
			<input name="nama" type="text" placeholder="Masukkan Kata">
		</div>

		<div>
			<button>Submit</button>
		</div>
	</form>
	<br>
	<?php
	echo $nama;
	?>
</body>

</html>