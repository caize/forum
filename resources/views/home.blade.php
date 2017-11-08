@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($topics as $topic)
				<div class="panel">
					<div class="panel-body">
						<a href="{{ route('topic.show', ['slug' => $topic->slug]) }}">{{ $topic->title }}</a>
					</div>
				</div>
			@endforeach

            {{ $topics->links() }}
        </div>
    </div>
</div>
@endsection
