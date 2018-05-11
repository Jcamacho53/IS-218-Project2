<?php
require('../model/database.php');
require('../model/accounts.php');
require('../model/todos.php');
require('../Project');
<?php include '../view/mainCSS.css'; ?>

session_start()
setcookie ($fname, $lname)
SELECT 'fname', 'lname' FROM 'accounts' 
$fname = 'fname' 
$lname = 'lname'
echo "$fname $lname";

<button type= 'button' class="btn"> Add Task </button>


function Show_Incomplete ($id, $message, $isdone) {
if isdone == 0,
	echo $message "is incomplete.";

<button type= 'button' class="btn"> Edit Task </button>

<button type= 'button' class="btn"> Delete Tasks </button>

<div class="checkbox">
 <label><input type= "checkbox" value="">$message</label>
 isdone == 1
</div>
}


function Show_Complete ($id, $message, $isdone) {
if isdone == 1,
	echo $message "is complete";
}
?>