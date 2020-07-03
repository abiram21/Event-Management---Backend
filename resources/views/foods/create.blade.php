<!DOCTYPE html>
<html lang="en">

<head>
     
</head>

<body id="page-top" >
{!! Form::open()->multipart()->route('food.store')!!}
@include('foods.form')
{!! Form::submit("Create")!!}

{!! Form::anchor("Cancel")!!}
{!! Form::close()!!}
</body>

</html>
