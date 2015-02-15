@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.forgot_password') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<section id="user_forgot">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
				<div class="page-header">
				    <h1>{{{ Lang::get('user/user.forgot_password') }}}</h1>
				</div>
				{{ Confide::makeForgotPasswordForm() }}
			</div>
		</div>
	</div>
</section>
@stop
