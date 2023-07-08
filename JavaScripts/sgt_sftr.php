/* PRONALAZAK TAČNE RIJEČI SLIJEVA NA DESNO */


function wordSearchFromTableRight()
{
c_word = document.getElementById("basic_word").value;     // SASA
c_char = c_word[0];                                       // S
c_len = c_word.length;                                    // 4

let matrix_width = document.getElementById("t_width").value;                // table matrix width (number of letters by row) 60
let matrix_height = document.getElementById("t_height").value;              // table matrix height (number of letters by column)   23
controll_width = matrix_width - c_len;                                        // 56

var t_string = '';

for (var i=0; i<matrix_height; i++)
{
for (var j=0; j<controll_width+1; j++)
{
var identifier = i + "letter" + j;                     // letter as hidden value
var letter_elem = i + "letelem" + j;                   // letter display

var c_letter = document.getElementById(identifier).value;

if (c_letter==c_char)
{
for (var k=0; k<c_len; k++)
{
s = j + k;
var n_identifier = i + "letter" + s;
var n_letter_elem = i + "letelem" + s;
var n_letter = document.getElementById(n_identifier).value;
t_string = t_string + n_letter;

if (matchNumber(t_string, c_word) == c_word.length)
{
var z = s+1;
for (var t=j; t<z; t++)
{
var p_letter_elem = i + "letelem" + t;
document.getElementById(p_letter_elem).style.color = "#ffff00";
}
}
}
}
t_string ='';

}
}

}
