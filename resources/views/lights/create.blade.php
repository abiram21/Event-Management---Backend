<!DOCTYPE html>
<html lang="en">

<head>
     
</head>

<body id="page-top" >
{!! Form::open()->multipart()->route('light.store')!!}
@include('lights.form')
{!! Form::submit("Create")!!}

{!! Form::anchor("Cancel")!!}
{!! Form::close()!!}
</body>

</html>
