<!DOCTYPE html>
<html lang="en">

<head>
     
</head>

<body id="page-top" >
{!! Form::open()->route('food.update',['food' => $food->id])->patch()->fill($food)!!}
@include('foods.form')
{!! Form::submit("Update")!!}

{!! Form::anchor("Cancel")!!}
{!! Form::close()!!}
</body>

</html>
