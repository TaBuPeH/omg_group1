jQuery.fn.center = function () {
	this.css("position","absolute");
	this.css("top", ( $(window).height() - this.height() ) / 2+$(window).scrollTop() + "px");
	this.css("left", ( $(window).width() - this.width() ) / 2+$(window).scrollLeft() + "px");
	return this;
}

$(document).ready(function() {
	$("#thumbnail img").click(function(){

		$("#background").css({"opacity" : "0.7"})
						.fadeIn("slow");

		$("#large").html("<img src='"+$(this).parent().attr("href")+"' alt='"+$(this).attr("alt")+"' /><br/>"+$(this).attr("rel")+"")
				   .center()
				   .fadeIn("slow");

		return false;
});

		$("#background").click(function(){
			$("#background").fadeOut("slow");
			$("#large").fadeOut("slow");
		});

		$("#large").click(function(){
			$("#background").fadeOut("slow");
			$("#large").fadeOut("slow");
		});

	});


/* #large {
	display: none;
	position: absolute;
	background: #FFFFFF;
	padding: 5px;
	z-index: 10;
	min-height: 200px;
	min-width: 200px;
	color: #336699;
}
*/

/*#background{
	display: none;
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	background: #000000;
	z-index: 1;
}
</style>
</head>
<body>
<div align="center">
   <div id="thumbnail">
		<h3>Click on the image</h3>
	    <a href="images/hills.jpg"><img src="images/thumbnails/hills-thumb.jpg" alt="hills" rel="Hills Image" /></a>
		<a href="images/lilies.jpg"><img src="images/thumbnails/lilies-thumb.jpg" alt="lilies" rel="Lilies Image" /></a>
		<a href="images/sunset.jpg"><img src="images/thumbnails/sunset-thumb.jpg" alt="sunset" rel="Sunset Image" /></a>
		<a href="images/winter.jpg"><img src="images/thumbnails/winter-thumb.jpg" alt="winter" rel="Winter Image" /></a>
		<p id="large"></p>
   </div>
   <div id="large"></div>
<div id="background"></div>
</div>
</body>
</html>
*/
