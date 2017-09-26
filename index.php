<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>
	<body>
		<img src="" id="video" />
		<script>
		var num = 0;
		var counter = 0;
		var preload = 100;
		var images = [];
		(function(){
			for(var i = 0; i<100; i++){
				addImages();
			}
			
			setInterval(function(){
				$("#video").prop("src", images[0].src);
				images.shift();
				addImages();
				counter++;
			}, 1000/25);
			})();
			
			function pad(num, size) {
				var s = "000000000" + num;
				return s.substr(s.length-size);
			}
			
			function addImages(){
				var image = new Image();
				image.src = "OutputPics/Demo20170925b" + pad(num, 5) + ".jpg";
				images.push(image);
				num ++;
			}
		</script>
	</body>
</html>