<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table id="mytable">
		<tr><th>firstname</th>
		<th>lastname</th>
		<th>avatar</th></tr>
		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
		</tr>
	</table>
	<script type="text/javascript">

		

		var showData = function enterData(jsonData){
			console.log(jsonData);
			var mytab = document.getElementById('mytable');

			var count = Object.keys(jsonData).length;
			var j = 0;
			for (i=1; i<count; i++){

				var row = mytab.insertRow(i);

				var cell0 = row.insertCell(0);
				var cell1 = row.insertCell(1);
				var cell2 = row.insertCell(2);
				var cell2 = row.insertCell(2);
				
				cell0.innerHTML = jsonData.data[j].first_name;
				cell1.innerHTML = jsonData.data[j].last_name;
				cell2.innerHTML = `<img src =${jsonData.data[j].avatar}>`;
				j++;
			}

		}

		async function data(callback){

		var response = await fetch('https://reqres.in/api/users');
		var jsonData = await response.json();

		callback(jsonData);
	}

	data(showData);

	</script>
</body>

</html>