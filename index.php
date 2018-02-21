<?php
require 'helpers.php';
require 'logic.php';
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
<h1>Bill Splitter</h1>

<form name="bill-form" method='GET' action='index.php'>

    <p>Accepts The Total Amount Spent, Adds the Tip Percentage And Calculates Individual Share.</p>

    <div class="info">
        <label for='num'>Split How Many Ways?</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
    </div>

    <label for='tab1'>How Much Was The Tab</label>
    <input type="text" name="tab1" value="<?php echo $tab1; ?>">

    <label for='tip1'>How Was The Service</label>
    <select name='tip1' id='tip1'>
        <option value='choose'>Choose one...</option>
        <option value='18' <?php if ($tip1 == '18') echo 'selected' ?>>Good -18%</option>
        <option value='10' <?php if ($tip1 == '10') echo 'selected' ?>>OK - 10%</option>
        <option value='5' <?php if ($tip1 == '5') echo 'selected' ?>>Bad - 5%</option>
    </select>

    <input type="submit" name="submit" onclick="submitForm()"><br>

    <script>
        function submitForm() {
            document.bill - form.submit();
            document.bill - form.reset();
        }
    </script>
</form>
<?php
if (!isset($_GET['submit'])) exit();
$verified = true;
$verified = validateInput();
if (!$verified): ?>
    <p>All the Inputs are Required And Should be digits 1 to 9 Only.</p>
    <p>Characters Other Than 1 through 9 will be removed.</p>
<?php
else:?>
    <p> <?php echo 'The Individual Bill Is: ' . calculateIndAmount(); ?></p>
<?php endif ?>

</div>
</body>
</html>
