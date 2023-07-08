<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo @$_POST["character_encoding"]; ?>">
<meta charset="<?php echo $_POST["character_encoding"]; ?>">
<title>Bestijalni Kamperski Inženjering 2023 </title>
<script src="JavaScripts/sgt_match_value.js"></script>
<script src="JavaScripts/sgt_sftr.js"></script>
<script src="JavaScripts/sgt_sftl.js"></script>
<script src="JavaScripts/sgt_sftu.js"></script>
<script src="JavaScripts/sgt_sftd.js"></script>
<script src="JavaScripts/sgt_sftdr.js"></script>
<script src="JavaScripts/sgt_sftul.js"></script>
<script src="JavaScripts/sgt_sftdl.js"></script>
<script src="JavaScripts/sgt_sftur.js"></script>
</head>

<body bgcolor=#888888>
<table style="width:100%; text-align:center; vertical-align:top;">
<tr><td style="width:100%; text-align:center; vertical-align:top;">
<input type="text" id="basic_word"  style="width:720px;" /></br>
</td></tr>
<tr><td style="width:100%; text-align:center; vertical-align:top;">
<button onclick="wordSearchFromTableRight()">Right</button>
<button onclick="wordSearchFromTableLeft()">Left</button>
<button onclick="wordSearchFromTableDown()">Down</button>
<button onclick="wordSearchFromTableUp()">Up</button>

<button onclick="wordSearchFromTableDownRight()">Down-Right</button>
<button onclick="wordSearchFromTableDownLeft()">Down-Left</button>
<button onclick="wordSearchFromUpRight()">Up-Right</button>
<button onclick="wordSearchFromTableUpLeft()">Up-Left</button>

<button onclick="wordSearchFromTableRight(); wordSearchFromTableLeft()">Left-Right</button>
<button onclick="wordSearchFromTableUp(); wordSearchFromTableDown()">Up-Down</button>

<button onclick="wordSearchFromTableRight(); wordSearchFromTableLeft(); wordSearchFromTableUp(); wordSearchFromTableDown();
wordSearchFromTableDownRight(); wordSearchFromTableDownLeft(); wordSearchFromTableUpRight(); wordSearchFromTableUpLeft();">
All Directions
</button>
</td></tr>
</table>
</br>
</body>
</html>

<?php

$basic_text = @$_POST["basic_text"];

if (!isset($_POST["all_include_chk"]))
{
$basic_text = str_replace("_", "", $basic_text);
$basic_text = str_replace("&", "", $basic_text);
$basic_text = str_replace("$", "", $basic_text);
$basic_text = str_replace("¶", "", $basic_text);
$basic_text = str_replace("@", "", $basic_text);
$basic_text = str_replace("%", "", $basic_text);
$basic_text = str_replace("~", "", $basic_text);
$basic_text = str_replace("€", "", $basic_text);
$basic_text = str_replace("|", "", $basic_text);
$basic_text = str_replace(chr(12), "", $basic_text);
$basic_text = str_replace(chr(35), "", $basic_text);
$basic_text = str_replace(chr(36), "", $basic_text);
$basic_text = str_replace(chr(37), "", $basic_text);
$basic_text = str_replace(chr(96), "", $basic_text);
$basic_text = str_replace(chr(136), "", $basic_text);
$basic_text = str_replace(chr(137), "", $basic_text);
$basic_text = str_replace(chr(145), "", $basic_text);
$basic_text = str_replace(chr(146), "", $basic_text);
$basic_text = str_replace(chr(150), "", $basic_text);
$basic_text = str_replace(chr(172), "", $basic_text);
$basic_text = str_replace(chr(174), "", $basic_text);
$basic_text = str_replace("\r\n", "", $basic_text);

if (!isset($_POST["whitespace_include_chk"]))
{
$basic_text = str_replace(" ", "", $basic_text);
}

if (!isset($_POST["numbers_include_chk"]))
{
$basic_text = str_replace("0", "", $basic_text);
$basic_text = str_replace("1", "", $basic_text);
$basic_text = str_replace("2", "", $basic_text);
$basic_text = str_replace("3", "", $basic_text);
$basic_text = str_replace("4", "", $basic_text);
$basic_text = str_replace("5", "", $basic_text);
$basic_text = str_replace("6", "", $basic_text);
$basic_text = str_replace("7", "", $basic_text);
$basic_text = str_replace("8", "", $basic_text);
$basic_text = str_replace("9", "", $basic_text);
}


if (!isset($_POST["interpunction_include_chk"]))
{
$basic_text = str_replace(".", "", $basic_text);
$basic_text = str_replace(",", "", $basic_text);
$basic_text = str_replace("?", "", $basic_text);
$basic_text = str_replace("!", "", $basic_text);
$basic_text = str_replace("'", "", $basic_text);
$basic_text = str_replace(":", "", $basic_text);
$basic_text = str_replace(";", "", $basic_text);
$basic_text = str_replace('"', "", $basic_text);
$basic_text = str_replace("(", "", $basic_text);
$basic_text = str_replace(")", "", $basic_text);
$basic_text = str_replace("«", "", $basic_text);
$basic_text = str_replace("»", "", $basic_text);
$basic_text = str_replace("„", "", $basic_text);
$basic_text = str_replace("“", "", $basic_text);
$basic_text = str_replace("–", "", $basic_text);
$basic_text = str_replace(chr(151), "", $basic_text);
$basic_text = str_replace(chr(171), "", $basic_text);
$basic_text = str_replace(chr(187), "", $basic_text);
}

if (!isset($_POST["math_include_chk"]))
{
$basic_text = str_replace("+", "", $basic_text);
$basic_text = str_replace("-", "", $basic_text);
$basic_text = str_replace("*", "", $basic_text);
$basic_text = str_replace("/", "", $basic_text);
$basic_text = str_replace("=", "", $basic_text);
}

if (!isset($_POST["brack_include_chk"]))
{
$basic_text = str_replace("<", "", $basic_text);
$basic_text = str_replace(">", "", $basic_text);
$basic_text = str_replace("[", "", $basic_text);
$basic_text = str_replace("]", "", $basic_text);
$basic_text = str_replace("{", "", $basic_text);
$basic_text = str_replace("}", "", $basic_text);
}
}

if (!isset($_POST["match_case_chk"]))
{
$basic_text = strtoupper($basic_text);
$basic_text=mb_strtoupper($basic_text, 'windows-1252');
}

$bs_length = strlen($basic_text);                       //duzina teksta
$matrix_width = $_POST["matrix_width"];                 //sirina matrice
$matrix_height = intdiv($bs_length, $matrix_width);     // visina matrice

if ($bs_length%$matrix_width > 0)
{
$matrix_height = $matrix_height + 1;
}

echo '<table style="border:1px solid">';
for ($i=0; $i<$matrix_height; $i++)
{
echo '<tr>';
for ($j=0; $j<$matrix_width; $j++)
{
echo '<td style="border:1px solid" id="'.$i.'letelem'.$j.'">';
$pos = $i*$matrix_width + $j;
$let = substr($basic_text, $pos, 1);
echo $let;
echo '<input type="hidden" id="h_position'.$i.'" value="'.$i.'" />';
echo '<input type="hidden" id="w_position'.$j.'" value="'.$j.'" />';
echo '<input type="hidden" id="'.$i.'letter'.$j.'" value='.$let.' />';
echo '</td>';
}
echo '</tr>';
}
echo '</table>';
echo '<input type="hidden" id="s_length" value="'.$bs_length.'">';
echo '<input type="hidden" id="t_width" value="'.$matrix_width.'">';
echo '<input type="hidden" id="t_height" value="'.$matrix_height.'">';
?>
