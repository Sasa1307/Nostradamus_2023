<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<meta charset="windows-1252">
<title>Bestijalni Kamperski Inženjering 2023 </title>
</head>

<body bgcolor=#a7c5f3>
<form method="post" action="matrix.php" accept-charset="windows-1250">
<table style="width:100%; text-align:center; vertical-align:top;">
<tr><td style="width:100%; text-align:center; vertical-align:top;">
<textarea name="basic_text"  style="width:720px; height:240px; vertical-align:top; padding-top: 0px;"></textarea>
</td></tr>
<tr><td style="width:100%; text-align:center">
<input type="submit" value="start">
</td></tr>
<tr><td style="width:100%; text-align:center; padding:50px">


<b>Additional options</b></br>
<table style="width:100%;"><tr>
<td>
<input type="checkbox"  name="match_case_chk" value="match_case">
<label for="match_case_chk">Match case</label><br>
</td>
<td>
<input type="checkbox"  name="whitespace_include_chk" value="whitespace_include">
<label for="whitespace_include_chk">Include whitespace</label><br>
</td>
<td>
<input type="checkbox"  name="numbers_include_chk" value="numbers_include" checked>
<label for="numbers_include_chk">Include numbers</label><br>
</td>
<td>
<input type="checkbox"  name="interpunction_include_chk" value="interpunction_include">
<label for="interpunction_include_chk">Include interpunction characters</label><br>
</td>
<td>
<input type="checkbox"  name="math_include_chk" value="math_include">
<label for="math_include_chk">Include math operators</label><br>
</td>
<td>
<input type="checkbox"  name="brack_include_chk" value="brack_include">
<label for="brack_include_chk">Include brackets</label><br>
</td>
<td>
<input type="checkbox"  name="all_include_chk" value="all_include">
<label for="all_include_chk">Include all characters</label><br>
</td>
<td>
<label>Character encoding</label>
<select  name="character_encoding">
<option value="windows-1250">windows-1250</option>
<option value=value="">-------------------</option>
<option value="windows-1252">windows-1252</option>
<option value="windows-1254">windows-1254</option>
<option value="windows-1255">windows-1255</option>
<option value="windows-1256">windows-1256</option>
<option value="windows-1257">windows-1257</option>
<option value="windows-1258">windows-1258</option>
<option value="utf-8">utf-8</option>
<option value="utf-16">utf-16</option>
<option value="iso-8859-0">iso-8859-0</option>
<option value="iso-8859-1">iso-8859-1</option>
<option value="iso-8859-2">iso-8859-2</option>
<option value="iso-8859-4">iso-8859-4</option>
<option value="iso-8859-5">iso-8859-5</option>
<option value="iso-8859-6">iso-8859-6</option>
<option value="iso-8859-10">iso-8859-10</option>
<option value="iso-8859-13">iso-8859-13</option>
<option value="iso-8859-14">iso-8859-14</option>
<option value="iso-8859-15">iso-8859-15</option>
<option value="iso-8859-16">iso-8859-16</option>
</select>
</td>
<td>
<label>Matrix width</label>
<input type="number" name="matrix_width" style="width:50px" value="60" />
characters
</td>
</tr></table>


</td></tr>
</table>
</form>
</body>
</html>

