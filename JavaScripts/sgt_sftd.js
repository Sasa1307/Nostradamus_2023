/* PRONALAZAK TAČNE RIJEČI ODUZGO NA DOLJE */











function wordSearchFromTableDown()
{
c_word = document.getElementById("basic_word").value;     // SASA
c_char = c_word[0];                                       // S
c_len = c_word.length;                                    // 4

let matrix_width = document.getElementById("t_width").value;                // table matrix width (number of letters by row) 60
let matrix_height = document.getElementById("t_height").value;              // table matrix height (number of letters by column)   23
controll_height = matrix_height - c_len;                                    // 56

var t_string = '';

for (var i=0; i<controll_height+1; i++)
{
for (var j=0; j<matrix_width; j++)
{
var identifier = i + "letter" + j;                     // letter as hidden value
var letter_elem = i + "letelem" + j;                   // letter display

var c_letter = document.getElementById(identifier).value;

if (c_letter==c_char)
{
for (var k=0; k<c_len; k++)
{
s = i + k;

var n_identifier = s + "letter" + j;
var n_letter_elem = s + "letelem" + j;
var n_letter = document.getElementById(n_identifier).value;
t_string = t_string + n_letter;

if (matchNumber(t_string, c_word) == c_word.length)
{
var z = s+1;
for (var t=i; t<z; t++)
{
var p_letter_elem = t + "letelem" + j;
document.getElementById(p_letter_elem).style.color = "#ffff00";
}
}
}
}
t_string ='';

}
}

}
