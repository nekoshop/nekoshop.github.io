
	<html> 
<head>
	<title>Player</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta charset='utf-8'>
		 <style>html,body{margin:0;padding:0;background:#000;;}</style>

<script src='https://ssl.p.jwpcdn.com/player/v/8.8.2/jwplayer.js'>
</script>
<script type="text/javascript">
function getParam ( sname )
{
  var params = location.search.substr(location.search.indexOf("?")+1);
  var sval =  params.replace("url=", "");
  return sval;
}
var sv = getParam("sv");
</script>
<script type='text/javascript'>jwplayer.key = 'W7zSm81+mmIsg7F+fyHRKhF3ggLkTqtGMhvI92kbqf/ysE99';
</script> 
</head>
 <body> 
<!-- Here is the <div> for the player --> 
<div id='playertv'>
</div>
 <script type='text/JavaScript'>
 jwplayer('playertv').setup({ 
 
		"file": sv,
        controls: 'true',
        width: '100%',
        height: '100%',    
        stretching: 'uniform',
        autostart: 'false'
}); 
</script> 
</body> 
</html>