<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Mood</title>
</head>
<body style="background-color: #89cff0;"> 
    <h1 id="feeling">Hoe voel je je nu?</h1>
    <form method="post">
        <input type="radio" value="slecht" name="mood" required><label>Slecht</label><br>
        <input type="radio" value="sslecht" name="mood" required><label>Matig</label><br>
        <input type="radio" value="middel" name="mood" required><label>Neutraal</label><br>
        <input type="radio" value="sgoed" name="mood" required><label>Goed</label><br>
        <input type="radio" value="goed" name="mood" required><label>Fantastisch</label><br>
        <br>
        <input type="submit" name="verzenden" value="Verstuur" id="button">
    </form>
    <?php
    class Mood
    {
        public $lastMood = "geen";
        public $mood = "geen";
        public $background = "white";
        
        public function changeMood($newMood){
            $this->mood = $newMood;
            $this->lastMood = $this->mood;
            if ($newMood == "slecht"){
                $this->background = "red";
                echo "<img src='https://media.tenor.com/ruuKyRQAPH0AAAAd/rowan-atkinson-shoot.gif'>";
            } elseif($newMood == "sslecht"){
                $this->background = "orange";
                echo "<video autoplay><source src='kermit.mp4' type='video/mp4'></video>";
            } elseif($newMood == "middel"){
                $this->background = "yellow";
                echo "<video autoplay><source src='elmo.mp4' type='video/mp4'></video>";
            } elseif($newMood == "sgoed"){
                $this->background = "lightgreen";
            } elseif($newMood == "goed"){
                $this->background = "green";
            }
        }
    }
    $moodClass = new Mood();
    if (isset($_POST["verzenden"])){
        $moodClass->changeMood($_POST["mood"]);
        $moodBackground = $moodClass->background;
        echo "<script>document.body.style.backgroundColor = '$moodBackground';</script>";
    }
    ?>
</body>
</html>