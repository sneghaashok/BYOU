<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "SELECT login.user_id,login.username,patdocs.* from login,patdocs where login.username = '".$_SESSION['username']."' and patdocs.dname ='" .$_SESSION['username']."'";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
	<tr>
		<th width="50%">Username</td>
		<th width="20%">Session Start</td>
		<th width="15%">Chat</td>
	</tr>
';

foreach($result as $row)
{
	$status = '';
	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	/*$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
	if($user_last_activity > $current_timestamp)
	{
		$status = '<span class="label label-success">Online</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Offline</span>';
	}*/
	$output .= '
	<tr>
		<td>'.$row['pname'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['user_id'], $connect).'</td>
		<td>'.$row['session'].'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id'].'" data-tousername="'.$row['username'].'">Start Chat</button></td>

	</tr>
	';
}

$output .= '</table>';

echo $output;

?>