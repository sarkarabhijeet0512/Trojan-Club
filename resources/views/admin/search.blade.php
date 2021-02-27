

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/admin/css/jquery-ui.min.css" rel="stylesheet">
<link href="../css/admin/css/jquery-ui.theme.min.css" rel="stylesheet">
</head>
<body>

<form>
	<input type="text" class="typeahead" id="search" placeholder="Search" />
</form>
<script type="text/javascript" src="../css/admin/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../css/admin/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search").autocomplete({
			source:[
				'Apple',
				'Banana',
				'chut'
			]
		});
	});
</script>
</body>
</html>