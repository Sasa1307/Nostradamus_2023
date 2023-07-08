function matchNumber(input_word,  table_word)
{
var match_len = 0;

if (input_word!=null && input_word!=undefined)
{
for (var i = 0; i<input_word.length; i++)
{
if (input_word[i] == table_word[i])
{
 match_len++;
}
}
}
return match_len;
}
