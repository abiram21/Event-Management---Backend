{!!Form::select('client_id','Choose Client',$clients ?? [])!!}
{!!Form::text('type', 'Shorteat Item')->placeholder('Eg:- Rolls')!!}

{!!Form::text('minQty', 'Minimum Quantity')!!}
{!!Form::text('maxQty', 'Maximum Quantity')!!}
{!!Form::text('unit_price', 'Unit Price')!!}