<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/cong">
        @csrf
        <div>
   <input type="number" class="" placeholder="so a" name="soA">
       </div>
       <div>
   <input type="number" class="" placeholder="so b" name="soB">
       </div>
       <button type="submit" class="">tinh</button>
       <div>
   <input type="number" class="" placeholder="ket qua" dissabled="" value="<?php if(isset($sum)) echo $sum; ?>">
       </div>
    </form>
</body>
</html>