<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/Tournaments.css" />
    <title>Tournaments</title>
</head>
<body>

<section id="viewTournaments" class="viewTournaments">
    <!--   Pubg Mobile     -->
    <button class="dropdownTab">Pubg Mobile</button>
    <div class="dropdownTabContent">
        <span class="date">June 10, 2023</span>
        <a href="#" class="button">Register Now</a>
        <div class="mt-5 mb-3 clearfix">
            <h2 class="pull-left">Registered Teams</h2>
            <a href="create_team.php" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i>Register New Team</a>
        </div>
        <?php
        require_once "config.php";
        $sql = "SELECT * FROM teams where game='pubgm'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0) {
                echo '<table class="table table-bordered table-striped">';
                echo "<thead>";
                echo "<tr>";
                echo "<th>Team Number</th>";
                echo "<th>Team Name</th>";
                echo "<th>Captain</th>";
                echo "<th>Contact</th>";
                echo "<th> </th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['captain'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>";
                    echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                    echo '<a href="delete.php?id='. $row['id'] .'" title="Delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_close($link);
        ?>
    </div>

    <!--   COD Mobile     -->
    <button class="dropdownTab">Call of Duty: Modern Warfare</button>
    <div class="dropdownTabContent">
        <span class="date">June 15, 2023</span>
        <a href="#" class="button">Register Now</a>
        <div class="mt-5 mb-3 clearfix">
            <h2 class="pull-left">Registered Teams</h2>
            <a href="create_team.php" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i>Register New Team</a>
        </div>
        <?php
        require_once "confiteamg.php";
        $sql = "SELECT * FROM teams where game='codm'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0) {
                echo '<table>';
                echo "<thead>";
                echo "<tr>";
                echo "<th>Team Number</th>";
                echo "<th>Team Name</th>";
                echo "<th>Captain</th>";
                echo "<th>Contact</th>";
                echo "<th> </th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['captain'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>";
                    echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                    echo '<a href="delete.php?id='. $row['id'] .'" title="Delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_close($link);
        ?>
    </div>

    <!--   Fortnite     -->
    <button class="dropdownTab">Fortnite: Battle Royale</button>
    <div class="dropdownTabContent">
        <span class="date">July 20, 2023</span>
        <a href="#" class="button">Register Now</a>
        <div class="mt-5 mb-3 clearfix">
            <h2 class="pull-left">Registered Teams</h2>
            <a href="create.php" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i>Register New Team</a>
        </div>
        <?php
        require_once "config.php";
        $sql = "SELECT * FROM teams where game='fortnite'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0) {
                echo '<table>';
                echo "<thead>";
                echo "<tr>";
                echo "<th>Team Number</th>";
                echo "<th>Team Name</th>";
                echo "<th>Captain</th>";
                echo "<th>Contact</th>";
                echo "<th> </th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['captain'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>";
                    echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                    echo '<a href="delete.php?id='. $row['id'] .'" title="Delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_close($link);
        ?>
    </div>

    <!--   League of Legends     -->
    <button class="dropdownTab">League of Legends</button>
    <div class="dropdownTabContent">
        <span class="date">August 17, 2023</span>
        <a href="#" class="button">Register Now</a>
        <div class="mt-5 mb-3 clearfix">
            <h2 class="pull-left">Registered Teams</h2>
            <a href="create_team.php" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i>Register New Team</a>
        </div>
        <?php
        require_once "config.php";
        $sql = "SELECT * FROM teams where game='lolm'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0) {
                echo '<table>';
                echo "<thead>";
                echo "<tr>";
                echo "<th>Team Number</th>";
                echo "<th>Team Name</th>";
                echo "<th>Captain</th>";
                echo "<th>Contact</th>";
                echo "<th> </th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['captain'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>";
                    echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                    echo '<a href="delete.php?id='. $row['id'] .'" title="Delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                mysqli_free_result($result);
            } else {
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_close($link);
        ?>
    </div>
</section>

<script>
    let coll = document.getElementsByClassName("dropdownTab");
    let i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

</body>
</html>