/* PRONALAZAK TAČNE RIJEČI DIJAGONALNO GORE-DESNO */



function wordSearchFromTableUpRight()
{
c_word = document.getElementById("basic_word").value;     
c_char = c_word[0];                                       
c_len = c_word.length;                                   


let text_length = document.getElementById("s_length").value;                  // search text size

let matrix_width = document.getElementById("t_width").value;                // table matrix width (number of letters by row) 60
let matrix_height = document.getElementById("t_height").value;               // table matrix height (number of letters by column)   23   

controll_width = matrix_width - c_len;     
                                                                                    
var jump_step = matrix_width*matrix_height - text_length;

var jump_k = 3;
var t_string = '';

for (var i=matrix_height-1; i>=c_len-1; i--)
{
for (var j=controll_width; j>=0; j--)
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
s = i - k;
u = j + k;

var n_identifier = s + "letter" + u;
var n_letter_elem = s + "letelem" + u;
var n_letter = document.getElementById(n_identifier).value;
t_string = t_string + n_letter;

if (matchNumber(t_string, c_word) == c_word.length)
{
var z = s-1;
var w = j;

for (var t=i; t>z; t--)
{
var p_letter_elem = t + "letelem" + w;
document.getElementById(p_letter_elem).style.color = "#ffff00";
w++;
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
