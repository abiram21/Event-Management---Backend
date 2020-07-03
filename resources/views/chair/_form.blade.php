{!!Form::select('client_id','Choose Client',$clients ?? [])!!}
{!! Form::file('type', 'Image') !!}
{!! Form::text('minQty', 'MinQty')->placeholder('Enter the minQty') !!}
{!! Form::text('maxQty', 'MaxQty')->placeholder('Enter the maxQty') !!}
{!! Form::text('price_per_coveredchair', 'Price for covered chair')->placeholder('Enter the Price for covered chair') !!}
{!! Form::text('price_per_uncoveredchair', 'Price for uncovered chair')->placeholder('Enter the Price for uncovered chair') !!}