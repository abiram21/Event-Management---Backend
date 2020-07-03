<!DOCTYPE html>
<html lang="en">

<head>
     
</head>

<body id="page-top" >
{!! Form::open()->multipart()->route('photography.store')!!}
@include('photographies.form')
{!! Form::submit("Create")!!}

{!! Form::anchor("Cancel")!!}
{!! Form::close()!!}
</body>

</html>
