<?php

require_once "config.php";

$name = $captain = $contact = $game = "";

if(!empty($_POST["id"])) {
    $id = $_POST["id"];

    $input_name = trim($_POST["name"]);
    $name = $input_name;

    $input_captain = trim($_POST["captain"]);
    $captain = $input_captain;

    $input_contact = trim($_POST["contact"]);
    $contact = $input_contact;

    $input_game = trim($_POST["game"]);
    $game = $input_game;

    $sql = "UPDATE teams SET name=?, captain=?, contact=?, game=? WHERE id=?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_captain, $param_contact, $param_game);

        $param_name = $name;
        $param_captain = $captain;
        $param_contact = $contact;
        $param_game = $game;

        if (mysqli_stmt_execute($stmt)) {
            header("location: tournaments.php");
            exit();
        } else {
            echo "Something went wrong. Please contact the administrator";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Teams</title>
</head>

<body>
    <div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Create Team</h2>\
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Team Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Team Captain</label>
                        <input type="text" name="captain">
                    </div>
                    <div class="form-group">
                        <label>Team Contact</label>
                        <input type="text" name="contact">
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
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="tournaments.php" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
