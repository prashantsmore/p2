<?php
require 'helpers.php';
require 'logic.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bill Splitter</title>
    <meta charset="utf-8">
	
	 <link href='../css/styles.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

</head>
<body>

<h1>Bill Splitter</h1>

<form method='GET' action='calculate.php'>

<p>Accepts The Total Amount Spent, Adds the Tip Percentage And Calculates Individual Share.</p>


    <label for='num'>Split How Many Ways?</label>
    <input type="text" name="name" value="<?php echo $name;?>">

    <label for='tab1'>How Much Was The Tab</label>
    <input type="text" name="tab1" value="<?php echo $tab1;?>">

    <label for='tip1'>How Was The Service</label>
    <select name='tip1' id='tip1'>
        <option value='choose'>Choose one...</option>
        <option value='18' <?php if ($tip1 == '18') echo 'selected'?>>Good -18%</option>
        <option value='10' <?php if ($day == 'tue') echo 'selected'?>>OK - 10%</option>
        <option value='5' <?php if ($day == 'wed') echo 'selected'?>>Bad - 5%</option>
    </select>

    <input type='submit' class='btn btn-primary btn-sm'>

</form>

</body>
</html>
