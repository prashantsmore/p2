<?php
/**
 * Calculates individual amount
 * @return number
 */
function calculateIndAmount()
{

        $x = $_GET["tab"];
       $y = $_GET["split"];
        $z = $_GET["tip"];
        $total = $x + $x * $z/100;
        $final = $total /$y;
        return round($final,2);
}

/**
 * Generates random quote
 * @return string
 */
function generateRandomCookieQuote()
{
    $quote = '';
    if(isset($_GET["fortuneCookie"]) && $_GET["fortuneCookie"] == 'Yes') {
        //Generate Random Number from range of 0 to 5
        $randomNo = rand(0, 5);
        $listOfQuotes = ["All fortunes are wrong except this one.",
            "Someone will invite you to a Karaoke party.",
            "There is no mistake so great as that of being always right.",
            "You will receive a fortune cookie.",
            "Some fortune cookies contain no fortune.",
            "Don’t let statistics do a number on you."];

            $quote = $listOfQuotes[$randomNo];
            return $quote;
    }


}
/**
 * Generates food review
 * @return string
 */

function generateFoodReview()
{
    $review = "";
    switch (isset($_GET["food"])) {
        case "excel":
            $review = "Food Is Excellent";
            break;
        case "good":
            $review = "Food Is Good";
            break;
        case "bad":
            $review = "Food is Not So Good";
            break;
        default:
            echo "Code unreachable";
    }
   return $review;

}
