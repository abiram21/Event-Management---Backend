{!!Form::select('client_id','Choose Client',$clients ?? [])!!}
{!! Form::file('type', 'Image') !!}
{!! Form::text('minQty', 'MinQty')->placeholder('Enter the minQty') !!}
{!! Form::text('maxQty', 'MaxQty')->placeholder('Enter the maxQty') !!}
{!! Form::text('unit_price', 'UnitPrice')->placeholder('Enter the UnitPrice ') !!}
