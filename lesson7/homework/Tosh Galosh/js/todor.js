
var number=prompt("Please enter your number");
if(number<999 && number>100)
{
    var a= parseInt(number/100);
	var b= parseInt((number/10)%10);
	var c= (number%10);
	var z= a+b+c;
	if(z==13)
	{
	     alert('yes');
	}
	else alert("Thank you");
	
}
else alert('greshno chislo');
prompt("Please your number again");
