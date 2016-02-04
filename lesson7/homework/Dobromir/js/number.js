function numberCheck() {
  var numberForCheck;
  do
  {
    numberForCheck = parseInt(prompt("Please enter your number"));
  }while(numberForCheck > 999 || numberForCheck < 100 || isNaN(numberForCheck))

  var temp = numberForCheck;
  var digitSum = 0;

  while (temp != 0)
  {
    digitSum = digitSum + temp % 10;
    temp = Math.floor(temp / 10);
  }
  if(digitSum == 13)
  {
    alert('Yes!');
  }
}
