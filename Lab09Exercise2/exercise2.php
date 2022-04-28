<?php

$ans1 = $_POST["question1"];
$ans2 = $_POST["question2"];
$ans3 = $_POST["question3"];
$ans4 = $_POST["question4"];
$ans5 = $_POST["question5"];

$total = 0;
$finalScore;
if($ans1 == "OpTic Gaming")
{
    $total++;
}
if($ans2 == "Zero Time Dilemma")
{
    $total++;
}
 if($ans3 == "The New York Times")
{
    $total++;
}
if($ans4 == "44 Billion")
{
    $total++;
}
if($ans5 == "Joey, Connor, and Garnt")
{
    $total++;
}
echo "<div>Question 1: Which team has won the '2022 VCT Stage 1 Masters-Reykjavik' tournament?</div>";
echo "<div>You answered: $ans1</div>";
echo "<div>Correct Answer: OpTic Gaming</div><br>";

echo "<div>Question 2: What is the final game of the 'Zero Escape' series called?</div>";
echo "<div>You answered: $ans2</div>";
echo "<div>Correct Answer: Zero Time Dilemma</div><br>";

echo "<div>Question 3: The popular web game 'Wordle' is owned by what company currently?</div>";
echo "<div>You answered: $ans3</div>";
echo "<div>Correct Answer: The New York Times</div><br>";

echo "<div>Question 4: 'Twitter' the popular social media was recently acquired by Elon Musk for how much?</div>";
echo "<div>You answered: $ans4</div>";
echo "<div>Correct Answer: 44 Billion</div><br>";

echo "<div>Question 5: The podcast 'Trash Taste' has 3 members that actively hosts the show, what are their names?</div>";
echo "<div>You Answered: $ans5</div>";
echo "<div>Correct Answer: Joey, Connor, and Garnt</div><br>";

$finalScore = ($total/5)*100;

echo "<div>You have got $total questions right.</div>";
echo "<div>Your final score is $finalScore%</div>";

?>