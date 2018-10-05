<html>
<head>
	<title>
		web server status test
	</title>
	<style type="text/css">
		div {
		  margin: 0 auto;
		  width: 750px;
		  height: 700px;
		  position: relative;
		  border: 3px solid black;
		}

		p {
		  font-size: 25px;
		  display: block;
		  width: 700px;
		  margin:0;
		  position: absolute;
		  animation: marqueeX 0.5s linear 0s infinite alternate, marqueeY 1.5s linear 0s infinite alternate;
		  color: black;
		  text-shadow: #99FFCC 0px 0px 10px; /* for browsers without spread support */
		  text-shadow: #99FFCC 0px 0px 10px 10px; /* for browsers with spread support */
		}

		@keyframes marqueeX {
		  from { left: 0; } to { left: 412px; }
		}

		@keyframes marqueeY {
		  from { top: 0; } to { top: 485px; }
		}
	</style>
</head>
<body>
	<div>
		<p><?= '{{ host_name }}サーバの動作確認！'; ?></p>
	</div>
</body>
</html>