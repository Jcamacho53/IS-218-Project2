<?php
require('../model/database.php');
require('../model/accounts.php');
require('../model/todos.php');
<?php include '../view/mainCSS.css'; ?>

<div class="form-group">
	<label for="date">Deadline for task:</label>
	<input type="datetime" class="form-control" id="id">
</div>

<div class="form-group">
	<label for="message">Description of task:</label>
	<textarea class="form-control" rows="10" id="message"></textarea>
</div>

<input type="submit" class="btn btn-info" value="Submit">
?>