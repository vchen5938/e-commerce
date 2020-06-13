<div class="form-group">
    {!! Form::label('name', 'Product Name') !!}
    {!! Form::text('name', null) !!}
</div>

<div class="form-group">
    {!! Form::label('cgy_id', 'Category') !!}
    {!! Form::select('cgy_id', $cgies, array_key_first($cgies->toArray()), ['placeholder' => 'Select From']) !!}
</div>

<div class="form-group">
    {!! Form::label('url', 'Product Page') !!}
    {!! Form::text('url', null) !!}
</div>

<div class="form-group">
    {!! Form::label('cover_image', 'Product pic') !!}
    {!! Form::text('cover_image', null) !!}
</div>

{!! Form::hidden('product_information', 'Product info') !!}
{!! Form::hidden('brand', 'brand') !!}

<div class="form-group">
    {!! Form::label('product_description', 'Product Description') !!}
    {!! Form::textarea('product_description', null, ['cols' =>50 , 'rows'=>10]) !!}
</div>

<div class="form-group">
    {!! Form::label('product_videos', 'Product Videos') !!}
    {!! Form::textarea('product_videos', null, ['cols' =>50 , 'rows'=>10]) !!}
</div>

<div class="form-group">
    {!! Form::label('product_images', 'Product images') !!}
    {!! Form::textarea('product_images', null, ['cols' =>50 , 'rows'=>10]) !!}
</div>

<div class="form-group">
    {!! Form::label('qna', 'Q&A') !!}
    {!! Form::textarea('qna', null, ['cols' =>50 , 'rows'=>10]) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price', []) !!}
    {!! Form::number('price', 0, ['min'=>0 , 'max'=>10000]) !!}
</div>

<div class="form-group">
    {!! Form::label('enabled', 'Enabled', []) !!}
    open{!! Form::radio('enabled', 1, false, []) !!}
    close{!! Form::radio('enabled', 0, false,[]) !!}
</div>

<div class="form-group">
    {!! Form::label('sort', 'Sort', []) !!}
    {!! Form::selectRange('sort', 0, 20, 1) !!}
</div>


{!! Form::submit('Save',[]) !!}
{!! Form::reset('Reset',[]) !!}