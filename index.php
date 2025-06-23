<?php 
$connect = mysqli_connect('localhost', 'root', '', 'employees');
$sql = "SELECT dept_no, dept_name FROM departments";
$result= mysqli_query($connect, $sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of department</title>
</head>
<body>
    <header>

    </header>
    <main>
     <h1>Liste des Départements</h1>
    </main>
     <table border=1>
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?= ($row['dept_no']) ?></td>
                    <td><?= ($row['dept_name']) ?></td>
                </tr>
            <?php } ?>
    </table>
    <main>
    </main>
    <footer>

    </footer>
</body>
</html>