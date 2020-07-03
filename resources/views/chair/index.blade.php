<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body id="page-top" >

<div class="container-fluid">
   
<div id="content-wrapper">
    <div class="row">
         <div class="col-md-12">
         <a href="{{ route('chair.create') }}" class="btn btn-success float-right">Create</a>
        </div> 
        <div class="col-md-12">
            <div class="card">
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>

                            <th>TYPE</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chairs as $chair)
                            <tr>
                            <td>{{ $chair->type }}</td>
                              </tr>  
                        @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     














 </div>
</body>

</html>
