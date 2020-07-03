{!!Form::select('client_id','Choose Client',$clients ?? [])!!}
{!!Form::text('name', 'Food Item')->placeholder('Eg:- Buriyani')!!}
{!!Form::select('type', 'Choose your type')->options([1 => 'Veg', 2 => 'Non-Veg'])!!}
{!!Form::text('minQty', 'Minimum Quantity')!!}
{!!Form::text('maxQty', 'Maximum Quantity')!!}
{!!Form::text('unit_price', 'Unit Price')!!}