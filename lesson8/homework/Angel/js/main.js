
document.addEventListener("DOMContentLoaded", function(event) {

	var pictures = document.querySelectorAll('.button');

	for (i = 0; i < pictures.length; i++) 
	{
		pictures[i].addEventListener('click',function(){

			var newPic = this.getAttribute('data-href');
			document.getElementById('mainImage').src = newPic;

			clearTimeout(timeout);
			});

	}	
});





	
