var a = 5;

var z = 8;

function x()
{
    var a = 7;
	alert(a);
	
	z = function()
	{
		alert(a);
	};
	
}


z();
alert(a);


var someFunction =  function(){   };

document.getElementById('blackDiv').addEventListener("click",someFunction);

x.addEventListener("click",someFunction);
x.addEventListener("mouseover",someFunction);

x.addEventListener("click",function(){   });

//alert(a);

