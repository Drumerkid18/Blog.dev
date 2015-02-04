<p>
	{{ Form::label('title', 'Title:') }}
	{{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'placeholder' => 'Post Title')) }}
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}
</p>	
<p>
	{{ Form::label('body', 'Body:')}}
	{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control', 'placeholder' => 'Post Body', 'rows' => '4')) }}
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}
</p>

