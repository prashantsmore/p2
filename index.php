<?php
require 'helpers.php';
require 'logic.php';
require 'validation-logic.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bill Splitter</title>
    <meta charset="utf-8">

    <link href='css/styles.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
</head>
<body>
<div class="container">
    <DIV class='h1info' >Bill Splitter</DIV>

    <form name="bill-form" method='GET' action='index.php'>

        <H2 class="h1info" >Accepts The Total Amount Spent & Adds Tip Percentage And Calculates Individual Share.</H2>

        <div  class="info">
            <label for="split">Split How Many Ways? (required|numeric|min 1|max 4)</label>
            <input type="text" id="split" name="split" value="<?= $form->prefill('split', '2', sanitize()) ?>">
        </div>

        <div  class="info">
            <label for="tab">How Much Was The Tab? (required|numeric|min 2)</label>
            <input type="text" id="tab" name="tab" value="<?= $form->prefill('tab', '2', sanitize()) ?>">
        </div>

        <div class="info">
            <label for='tip'> How Was The Service? (required)</label>
             <select  name='tip' id='tip'>
                <option value='choose'>Choose One ...</option>
                <option value='18' <?php if ($tip == '18') echo 'selected' ?>>Good -18%</option>
                <option value='10' <?php if ($tip == '10') echo 'selected' ?>>OK - 10%</option>
                <option value='5' <?php if ($tip == '5') echo 'selected' ?>>Bad - 5%</option>
            </select>
        </div>

        <div class="info">
            <fieldset class='radios'>
                <label> You can provide the optional food review below </label>
                <label><input type='radio'
                              name='food'
                              value='excel' <?php if ($food == 'excel') echo 'checked' ?>> Excellent</label>
                <label><input type='radio'
                              name='food'
                              value='good' <?php if ($food == 'good') echo 'checked' ?>> Good</label>
                <label><input type='radio'
                              name='food'
                              value='bad' <?php if ($food == 'bad') echo 'checked' ?>> Not Up To Mark</label>
            </fieldset>
        </div>

        <div class="info">
            <label> Do You Want To Open Fortune Cookie? </label>
            <input type="checkbox" name="fortuneCookie" value="Yes"/>
        </div>


        <input class="btn btn-primary" type="submit" name="submit" onclick="submitForm()"><br>

        <script>
            function submitForm() {
                document.bill - form.submit();
                document.bill - form.reset();
            }
        </script>
    </form>


    <?php

    if (!empty($errors)) : ?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach;
                ?>
            </ul>
        </div>
    <?php else : ?>

        <?php if(!empty($_GET)) :?>
            <DIV class="info2"><?php echo 'The Individual Bill Is: ' . calculateIndAmount(); ?></DIV>
        <?php endif; ?>
       <?php if(isset($_GET["food"])) :?>
            <DIV class="info2"><?php echo 'The Food Review is: ' . generateFoodReview(); ?></DIV>
        <?php endif; ?>
        <?php if(isset($_GET["fortuneCookie"])) :?>
            <DIV class="info2"><?php echo 'The Fortune Cookie Message is  ' . generateRandomCookieQuote(); ?></DIV>
        <?php endif; ?>

    <?php endif; ?>
</div>
</body>
</html>
