<?php

include "../lib/php/functions.php";

$notes_object = file_get_json("notes/notes.json");
$users_array = file_get_json("../data/users.json");

//print_p($notes);



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>U's ED Recommends </title>	

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<?php include "../parts/navbar.php"; ?>

<div class="container">
	<div class="card soft">
		<h2> Daily Recommends  </h2>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Notes</h2>

			<?


			for($i=0;$i<count($notes_object ->notes);$i++){
				echo "<li>{$notes_object->notes[$i]}";

			}



			?>

		</div>
		<div class="card soft">
			<h2>Users</h2>

			<?


			for($i=0;$i<count($users_array);$i++){
				echo "<li>
				<strong>{$users_array[$i]->name}</strong>
				<span>{$users_array[$i]->type}</span>
				</li>";

			}



			?>

		</div>
	</div>
</div>
	
</body>
</html>