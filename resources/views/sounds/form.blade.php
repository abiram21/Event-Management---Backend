{!!Form::select('client_id','Choose Client',$clients ?? [])!!}
{!!Form::text('stage_size', 'StageSize')!!}
{!!Form::select('place_type', 'Choose your type')->options([1 => 'Outdoor', 2 => 'Indoor'])!!}
{!!Form::text('price', 'Price')!!}