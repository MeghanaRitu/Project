<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" type='text/css' href="manage.css">
</head>
<body>
        
    <div class="title">
        <a href="logout.php" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Semesters &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_semesters.php">Add Semester</a>
                    <a href="manage_semesters.php">Manage Semester</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            include('init.php');
            include('session.php');
            $db = mysqli_select_db($conn,'user');

            $sql = "SELECT `name`, `year` FROM `semester`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
               echo "<table>
                <caption>Manage Semesters</caption>
                <tr>
                <th>YEAR</th>
                <th>NAME</th>
                </tr>";

                while($row = mysqli_fetch_array($result))

                  {
                  echo "<tr>";
                  echo "<td>" . $row['year'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
    
                  echo "</tr>";

                  }

                echo "</table>";
            } else {
                echo "0 results";
            }
        ?>
        
    </div>

</body>
</html>

