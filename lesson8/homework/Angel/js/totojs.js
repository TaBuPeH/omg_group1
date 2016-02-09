var randomNum = function () {
    
    var luckyNumbers = Array();

    // var number = parseInt(Math.random()*49) + 1;

    while (luckyNumbers.length < 6)
    {
        var number = parseInt(Math.random()*49) + 1;

        var drawnNumber = 0;

        for(i = 0; i< luckyNumbers.length; i++)
        {
            if(luckyNumbers[i] === number)
            {
                drawnNumber = 1;
            }
        }

        if(drawnNumber)
        {
            luckyNumbers[luckyNumbers.length] = number;
        }

    }

};







