<div class="form-group">
	{{ Form::label('title', 'Title:', ['class' => 'control-label']) }}
	{{ Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Enter gamer title', 'id' => 'title']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Description:', ['class' => 'control-label']) }}
	{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter gamer description', 'id' => 'description']) }}
</div>

<div class="form-group">
	{{ Form::label('size', 'Size:', ['class' => 'control-label']) }}
	{{ Form::select('size',[
		'' => 'Select size',
		'nill' => 'Nill',
		'5 - 6 Years' => '5 - 6 Years',
		'6 - 7 Years' => '6 - 7 Years',
		'7 - 8 Years' => '7 - 8 Years',
		'8 - 9 Years' => '8 - 9 Years',
		'9 - 10 Years' => '9 - 10 Years',		
		'10 - 13 Years' => '10 - 13 Years',
		'small (S)' =>'small (S)',
		'medium (M)' =>'medium (M)',
		'large (L)' =>'large (L)',
		'X large (XL)' =>'X large (XL)',
		'XX large (XXL)' =>'XX large (XXL)'
		], null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('price', 'Price:', ['class' => 'control-label']) }}
	{{ Form::number('price',null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('category_id', 'Category:', ['class' => 'control-label']) }}
	{{ Form::select('category_id', $categories, null,['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('image', 'Image:', ['class' => 'control-label']) }}
	{{ Form::file('image',['class' => 'form-control']) }}
</div>


<div class="form-group col-md-3">
	{{ Form::submit($submitBtn, ['class' => 'btn btn-lg input-lg btn-primary form-control']) }}
</div>