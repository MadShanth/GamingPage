<?php
require_once "config.php";
$name = $captain = $contact = "";

if(!empty($_POST["id"])) {
    $id = $_POST["id"];

    $input_name = trim($_POST["name"]);
    $name = $input_name;

    $input_captain = trim($_POST["name"]);
    $captain = $input_captain;

    $input_contact = trim($_POST["name"]);
    $contact = $input_contact;

    $sql = "UPDATE teams SET name=?, captain=?, contact=? WHERE id=?";

    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_captain, $param_contact, $param_id);
        $param_name=$name;
        $param_captain=$captain;
        $param_contact=$contact;
        $param_id=$id;

        if(mysqli_stmt_execute($stmt)){
            header("location: tournaments.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);

} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);

        $sql = "SELECT * FROM teams WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $id;

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $name = $row["name"];
                    $captain = $row["captain"];
                    $contact = $row["contact"];
                } else{
                    header("location: tournaments.php");
                    exit();
                }
            }
        }
        mysqli_close($stmt);
        mysqli_close($link);
    }
    else {
        header("location: tournaments.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Teams</title>
</head>

<body>
    <div class="updateTeam">
    <p>Update Team</p>
    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
        <div class="form-group">
            <label>Team Name</label>
            <input type="text" name="name"  value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label>Captain</label>
            <input type="text" name="captain"  value="<?php echo $captain; ?>">
        </div>
        <div class="form-group">
            <label>Contact</label>
            <input type="text" name="contact"  value="<?php echo $contact; ?>">
        </div>
        <div class="form-group">
            <label>Game</label>
            <select name="game" id="game">
                <option value="pubgm">PUBG Mobile</option>
                <option value="codm">Call Of Duty MW</option>
                <option value="fortnite">Fortnite</option>
                <option value="lolm">League of Legends</option>
            </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <input type="submit" class="btn btn-primary" value="Submit">
        <a href="tournaments.php" class="btn btn-secondary ml-2">Cancel</a>
    </form>
</div>
</body>
</html>
