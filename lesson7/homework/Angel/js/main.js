
    var number = prompt("Please enter a number between 100 and 999:");

    var a = parseInt(number / 100);

    var b = parseInt((number / 10) % 10);

    var c = parseInt(number % 10);

    var sumOfDigits;


    if (number >= 100 && number <= 999)
    {
        sumOfDigits = a + b + c;

        if (sumOfDigits == 13)
        {
            alert("The sum of the digits is 13.");
        }
        else
        {
            alert("The sum of the digits is not 13.")
        }
    }
    else
    {
        alert("The number is out of range.")
    }



// 6/42

    var drawnNumbers = Array();
    
    


    for (i = 0; i < 6; i++)
    {
        drawnNumbers[i] = parseInt(Math.random() * 42) + 1;

        if ((drawnNumbers[i] == drawnNumbers[i + 1]) && (drawnNumbers[i] < 6))
        {

            for (var j = 0; j < drawnNumbers.length; j++) {
                drawnNumbers[j] = parseInt(Math.random() * 42) + 1;
            }
        }

    }

    drawnNumbers.sort();

    //for (i in drawnNumbers)
    //{
    //    console.log(drawnNumbers[i]);
    //}

    

    drawnNumbers.toString();


    


    




