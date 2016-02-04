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

	var alreadyDrawn = 0;

	for(var j=0; j<luckyNumbers.length; j++)
	{
		if(luckyNumbers[j] == number)
		{
			alreadyDrawn = 1;
		}
	}

	if(!alreadyDrawn)
	{
		luckyNumbers[luckyNumbers.length] = number;
	}
	else
	{
		i--;
	}
}

luckyNumbers.sort(function(a, b){return a-b});
