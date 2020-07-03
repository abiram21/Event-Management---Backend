<!DOCTYPE html>
<html lang="en">

<head>
     
</head>

<body id="page-top" >
{!! Form::open()->multipart()->route('sound.store')!!}
@include('sounds.form')
{!! Form::submit("Create")!!}

{!! Form::anchor("Cancel")!!}
{!! Form::close()!!}
</body>

</html>
