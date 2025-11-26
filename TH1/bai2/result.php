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

$score = 0;

foreach ($questions as $i => $q) {
    $ans = $_POST["q$i"] ?? "";
    if ($ans == $q["answer"]) {
        $score++;
    }
}

echo "<h2>Kết quả: $score / " . count($questions) . "</h2>";
?>
