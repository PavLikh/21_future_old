@extends('layouts.app')

@section('title-block')Future @endsection

@section('content')
<section class="content">
	<div class="messageList">
		@foreach($data as $el)
			<div class="item">
				<div class="info">
					<div class="author">{{ trimLine($el->name) }}</div>
					<div class="time">{{ substr($el->created_at, 11, 5) }}</div>
					<div class="date">{{ date("d.m.Y", strtotime($el->created_at)) }}</div>			
				</div>
				<div class="message">{{ $el->message }}</div>
			</div>
		@endforeach

	</div>
	<div class="line"></div>

	<div class="comment">
		<h2>Оставить комментарий</h2>

		@if($errors->any())
		<div class="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<form action="{{ route('demo-form') }}" method="post">
			@csrf
			<label for="name">Ваше имя</label>
			<input type="text" name="name" id="name">
			<label for="textMessage">Ваш комментарий</label>
			<textarea name="textMessage" id="textMessage"></textarea>			
			<input type="submit" value="Отправить">	
		</form>
	</div>
</section>
@endsection
