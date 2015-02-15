@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<section id="user_profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header">
                    <h1>User Profile</h1>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Signed Up</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{{$user->id}}}</td>
                        <td>{{{$user->username}}}</td>
                        <td>{{{$user->joined()}}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@stop
