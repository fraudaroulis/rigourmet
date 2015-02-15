@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<section id="user_create">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
				<div class="page-header">
					<h1>Signup</h1>
				</div>
				{{ Confide::makeSignupForm()->render() }}
			</div>
		</div>
	</div>
</section>
@stop
