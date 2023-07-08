/* PRONALAZAK TAČNE RIJEČI ZDESNA NA LIJEVO */



function wordSearchFromTableLeft()
{
c_word = document.getElementById("basic_word").value;     // SASA
c_char = c_word[0];                                       // S
c_len = c_word.length;                                    // 4

let text_length = document.getElementById("s_length").value;                  // search text size

let matrix_width = document.getElementById("t_width").value;                // table matrix width (number of letters by row) 60
let matrix_height = document.getElementById("t_height").value;              // table matrix height (number of letters by column)   23
                                        
var jump_step = matrix_width*matrix_height - text_length;
var jump_k = 0;
var t_string = '';

for (var i=matrix_height-1; i>=0; i--)
{
for (var j=matrix_width-1; j>=c_len-1; j--)
{
if (jump_k>jump_step-1)
{
var identifier = i + "letter" + j;                     // letter as hidden value
var letter_elem = i + "letelem" + j;                   // letter display

var c_letter = document.getElementById(identifier).value;

if (c_letter==c_char)
{
for (var k=0; k<c_len; k++)
{
s = j - k;

var n_identifier = i + "letter" + s;
var n_letter_elem = i + "letelem" + s;
var n_letter = document.getElementById(n_identifier).value;
t_string = t_string + n_letter;

if (matchNumber(t_string, c_word) == c_word.length)
{
var z = s-1;
for (var t=j; t>z; t--)
{
var p_letter_elem = i + "letelem" + t;
document.getElementById(p_letter_elem).style.color = "#ffff00";
}
}
}
}
t_string ='';
}
jump_k++;
}
}

}
