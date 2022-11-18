<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Period form</title>
    <link rel="stylesheet" href="period_track.css">
</head>
<body>
    <div class="contact-form"></div>
      <h1>PERIOD TRACKER<h1>
    </div>
    <div class="contact-us"></div>
    <form action="date.php" method="post">
        <label for ="period-date">First month  period date:</label>
        <input type="date" name="first" class="form-control" placeholder="dd-mm-yyyy" value="" >
        <br>
        <label for ="period-date">Second month  period date:</label>
        <input type="date" name="second"  class="form-control"  placeholder="dd-mm-yyyy" value=""  >
        <br>
        <label for ="period-date">Third month  period date:</label>
        <input type="date" name="third"   class="form-control" placeholder="dd-mm-yyyy" value="">
        <br>
        <label for ="period-date">Fourth month  period date:</label>
        <input type="date" name="fourth" class="form-control" placeholder="dd-mm-yyyy" value="" >
        <br>
        <label for ="period-date">Fifth month  period date:</label>
        <input type="date" name="fifth" class="form-control"placeholder="dd-mm-yyyy" value="">
        <br>
        <label for ="period-date">Sixth month  period date:</label>
        <input type="date" name="sixth" class="form-control" placeholder="dd-mm-yyyy" value="">
        <br>
        <input type="submit"class="form-control submit" value="Submit">
        <input type="reset"  class="form-control submit" value="Reset">
    </form>

</body>
</html>