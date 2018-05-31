<html>
<head></head>
<body>
	<table>
		<tbody><tr><td>Title</td><td>Author</td><td>Description</td></tr></tbody>
		<?php 
			foreach ($students as $id => $student)
			{
				echo '<tr><td><a href="index.php?student='.$student->id.'">'.$student->id.'</a></td><td>'.$student->name.'</td><td>'.$student->class.'</td></tr>';
			}
		?>
	</table>
</body>
</html>