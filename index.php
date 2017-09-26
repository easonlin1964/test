<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>
	<body>
		<img src="" id="video" />
		<script>
		var num = 0;
		(function(){
			setInterval(function(){
				$("#video").prop("src", "OutputPics/Demo20170925b" + pad(num, 5) + ".jpg");
				num++;
			}, 1000/25);
			})();
			
			function pad(num, size) {
				var s = "000000000" + num;
				return s.substr(s.length-size);
			}
		</script>
	</body>
</html>