{!!Form::select('client_id','Choose Client',$clients ?? [])!!}
{!!Form::text('time_duration', 'TimeDuration')->placeholder('Eg:- 5hrs')!!}
{!!Form::text('price', 'Price')!!}