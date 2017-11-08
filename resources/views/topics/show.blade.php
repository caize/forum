@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">{{ $topic->title }}</div>
					<div class="panel-body">{{ $topic->body }}</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-xs-6">
								Created by: <a href="#">{{ $topic->user->name }}</a>
							</div>
							<div class="col-xs-6 text-right">{{ $topic->created_at->diffForHumans() }}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
