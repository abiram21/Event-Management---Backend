<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body id="page-top" >

<div class="container-fluid">
   
<div id="content-wrapper">
<div id="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h3>Create Chair</h3>
            <div class="card">
                <div class="card-body pad">
                    {!! Form::open()->multipart()->route('memorial.store') !!}
                        @include('memorials.form')
                    {!! Form::submit("Create") !!}
                    {!!Form::anchor("Cancel")->route('memorial.index')!!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
     














 </div>
</body>

</html>
