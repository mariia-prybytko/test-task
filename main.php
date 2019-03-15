<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax Table</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<p>Do you want to log out?</p>
	<button type="button" name="LogOut" onclick="window.location='index.php'">YES</button>
<form>
    <table class="add">
        <thead>
        <tr>
            <th>Date</th>
            <th>Header</th>
            <th>Body</th>
			<th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="date" min='' name="date" id="input_date"></td>
			<script>
					var dNow = new Date();
					var localdate =  (dNow.getFullYear() + '-'+ ('0' + (dNow.getMonth()+1)) + '-' + dNow.getDate()).toString();
					$('input#input_date').attr('min', localdate);
			</script>
            <td><input type="text" name="header" required id="input_header"></td>
            <td><input type="text" name="body" required id="input_body"></td>
			<td><select class="form-control ml-2" name="status" id="input_status">
					<option value="new" selected>New</option>
					<option value="active">Active</option>
					<option value="done">Done</option>
			</select></td>	
        </tr>
        <tr>
            <td colspan="4">
                <div id="add_new_item" class="button">Add to Database</div>
            </td>
        </tr>
        </tbody>
    </table>
</form>
<table class="show">
    <thead>
    <tr>
        <th width="100px">Date</th>
        <th width="100px">Header</th>
        <th width="250px">Body</th>
		<th width="100px">Status</th>
        <th>DEL</th>
    </tr>
    </thead>
    <tbody id="tbody">
        <tr><td class="load" colspan="6"><img src="load.gif"></td></tr>
    </tbody>
</table>
<script src="services/ajax_func.js"></script>
</body>
</html>
