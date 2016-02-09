// How to properly draw a random number in javascript
// do this 6/42
// sort the array ascending
// do this with For and reverse checking - 2 for cycle within eachother

function randomInteger(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}

var luckyNumbers = Array();

for(var i=0; i<6; i++)
{
	var number = randomInteger(1,42);

	var alreadyDrawn = 0; // if something is there or not

	// cycle all values until the currently drawn number;
	for(var j=0; j<luckyNumbers.length; j++)
	{
		if(luckyNumbers[j] == number) // check if the currently cycled number is the same as the new one
		{
			alreadyDrawn = 1; // I already have this shit in my array
		}
	}
	
	// if i do not have it in my array
	if(!alreadyDrawn)
	{
		// write it inside
		luckyNumbers[luckyNumbers.length] = number;
	}
	else
	{
		// reset our counter - we have to draw the number again
		i--;
	}
}

// sort 
luckyNumbers.sort(function(a, b){return a-b});
