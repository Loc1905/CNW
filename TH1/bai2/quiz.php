<?php
$questions = [];
$current = [
    "question" => "",
    "options" => [],
    "answer" => ""
];

$lines = file("quiz.txt", FILE_IGNORE_NEW_LINES);

foreach ($lines as $line) {
    $line = trim($line);

    if ($line == "") continue;

    if (preg_match("/ANSWER:/", $line)) {
        $current["answer"] = trim(str_replace("ANSWER:", "", $line));
        $questions[] = $current;
        $current = ["question" => "", "options" => [], "answer" => ""];
    } 
    elseif (preg_match("/^[A-D]\./", $line)) {
        $current["options"][] = $line;
    } 
    else {
        $current["question"] = $line;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bài thi trắc nghiệm</title>
</head>
<body>

<h2>Bài thi trắc nghiệm</h2>

<form method="post" action="result.php">
    <?php foreach ($questions as $i => $q): ?>
        <p><b><?php echo ($i+1) . ". " . $q["question"]; ?></b></p>

        <?php foreach ($q["options"] as $opt): 
            $optKey = substr($opt, 0, 1);
        ?>
            <label>
                <input type="radio" name="q<?php echo $i; ?>" value="<?php echo $optKey; ?>">
                <?php echo $opt; ?>
            </label><br>
        <?php endforeach; ?>

        <br>
    <?php endforeach; ?>

    <button type="submit">Nộp bài</button>
</form>

</body>
</html>
