<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>To Do List</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>                 
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">To Do List</a>
            </div>
        </div><!-- /.container -->
    </nav>

    <!-- Task Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
error_reporting (0);
require_once "task_repository.php";
require_once "task_repository2.php";
$tasks = getTasks();

$priorities = array(3 => "High", 2 => "Medium", 1 => "Low");

$completed = array(1 => "Completed", 0 => "Not Completed");

?>


<h2> Insert a Task</h2>
    <?php
    if ($insert_task) {//if the form below has been submitted into the database then a message will say Review has been inserted
        echo "Task has been inserted";
    }
    ?>
    <form action="index.php?id=<?php echo $task['id']; ?>" method="POST">
        <table width="400" border="0" cellspacing="1" cellpadding="2">
            <tr>
                <td width="100">Priority</td>
                <td><input name="priority" type="text" id="priority" required></td>
            </tr>
            <tr>
                <td width="100">description</td>
                <td><input name="description" type="text" id="description" required></td>
            </tr>
            <tr>
                <td width="100"> </td>
                <td>
                    <input name="addTask" type="submit" id="addTask" value="add Task">
                </td>
            </tr>
        </table>

    </form>

<table>
<h2> All Tasks</h2>
    <tr><th>Priority</th><th>Task</th><th>Completed</th><th>Delete</th></tr>
			<?php foreach ($tasks as &$task):?>
				<tr>
					<td><?php echo $priorities[$task["priority"]];?></td>
					<td><?php echo $task["description"];?></td>				
					<td><a href="completed.php?id=<?php echo $task['id']; ?>&completed=<?php echo $task['completed']; ?>"><?php echo $completed[$task['completed']]; ?></a></td>
					<td><a href="deleted.php?id=<?php echo $task['id'];?>&description=<?php echo $task['description'];?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>


                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
