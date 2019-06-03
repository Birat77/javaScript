<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td{
			
			border-collapse: 	collapse;
			background-color: white;
			color: white;
		}
		table{
			margin-top:-30px;
		}
		input[type="button"]{
			font-size: 20px;
			height: 67px;width: 67px;
			padding: 0px;
			border-color: black;
			color:white;
			background-color:black;

		}
		input[type="text"]{
			width: 200px;
			height: 60px;
		}
	</style>
</head>
<body>
	<input type="text" id="calc" >
	<table>
		<tr >
				<td> <input type="button" value="1" onclick="display(1)"></td>
				<td> <input type="button" value="2" onclick="display(2)"></td>
				<td> <input type="button" value="3" onclick="display(3)"></td></tr>
		<tr>		<td> <input type="button" value="4" onclick="display(4)"></td>

				<td> <input type="button" value="5" onclick="display(5)"></td>
				<td> <input type="button" value="6" onclick="display(6)"></td></tr>
		<tr>	<td> <input type="button" value="7" onclick="display(7)"></td>
				<td> <input type="button" value="8" onclick="display(8)"></td>
				<td> <input type="button" value="9" onclick="display(9)"></td></tr>
		<tr>		<td> <input type="button" value="0" onclick="display(0)"></td><br>
				<td> <input type="button" value="+" onclick="display('+')"></td>
				<td> <input type="button" value="-" onclick="display('-')"></td><br></tr>
				
		<tr>	<td> <input type="button" value="*" onclick="display('*')"></td>
				<td> <input type="button" value="/" onclick="display('/')"></td>
				<td> <input type="button" value="=" onclick="solve()"></td>
				<br>
			</td>
		</tr>
	</table>

<script type="text/javascript">

	function display(val){
			document.getElementById('calc').value+=val;

	}
	function solve(){
		var evalEntry = document.getElementById('calc').value;
		var total = eval(evalEntry);
		document.getElementById('calc').value = total;
	}

</script>

</body>
</html>