<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <!-- @csrf -->
        <div>
            <label>name</label>
      <input type="text" class="" placeholder="" name="name">
       </div>
       <div>
        <label>age</label>
      <input type="text" class="" placeholder="" name="age">
       </div>
       <div>
        <label>date</label>
      <input type="date" class="" placeholder="" name="date">
       </div>
       <div>
        <label>phone</label>
      <input type="text" class="" placeholder="" name="phone">
       </div>
       <div>
        <label>Web</label>
      <input type="text" class="" placeholder="" name="web">
       </div>
       <div>
        <label>address</label>
      <input type="text" class="" placeholder="" name="address">
      <div>
        @include ('block.error')
      </div>
       </div>
       <button type="submit" class="">Ok</button>
       <div>
         @if(isset($user)) 
         <p>Name: {{$user['name']}}</p>
         <p>Age:{{$user['age']}}</p>
         <p>Date{{$user['date']}}</p>
         <p>Phone:{{$user['phone']}}</p>
         <p>Website: {{$user['web']}}</p>
         <p>Address: {{$user['address']}}</p>
         @endif 
       </div>
       
    </form>
</body>
</html>