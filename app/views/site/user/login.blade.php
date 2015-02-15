@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<section id="user_login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
				<div class="page-header">
					<h1>Login into your account</h1>
				</div>
				{{ Confide::makeLoginForm()->render() }}
			</div>
		</div>
	</div>
</section>
@stop
