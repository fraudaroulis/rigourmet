@extends('site.layouts.default')

@section('navigation')
    @if (Auth::check())

    @else
        @if (View::exists('site.homepage.description'))
            <li>
                <a class="page-scroll" href="#description">description</a>
            </li>
        @endif
        @if (View::exists('site.homepage.join'))
            <li>
                <a class="page-scroll" href="#join">join</a>
            </li>
        @endif
    @endif

    @if (View::exists('site.homepage.events'))
        <li>
            <a class="page-scroll" href="#events">events</a>
        </li>
    @endif

    @if (View::exists('site.homepage.team'))
        <li>
            <a class="page-scroll" href="#team">about</a>
        </li>
    @endif
    
    @if (View::exists('site.homepage.contact'))
        <li>
            <a class="page-scroll" href="#contact">contact</a>
        </li>
    @endif
@stop

@section('header')
	<div class="intro-box ">
		<div class="intro-logo">
            {{ HTML::image('img/logo_md.png', '', array('class' => 'img-responsive')) }}
		</div>
        <div class="intro-text">
            <div class="intro-lead-in">
                Eat Locally. Meet Globally.
            </div>
            <div class="intro-heading">
                rigourmet
            </div>
            @if (!Auth::check())
                <div class="intro-heading">
                    <a href="#join" class="page-scroll btn btn-primary" role="button">Join Us</a>
                    <p>Already a member?</p>
                    <a href="" class="join-link btn btn-primary" role="button">Log In</a>
                </div>

            @endif
        </div>
    </div>
@stop

@section('content')
    @if (View::exists('site.homepage.description'))
        @include('site.homepage.description')
    @endif

    @if (View::exists('site.homepage.join'))
        @include('site.homepage.join')
    @endif

    @if (View::exists('site.homepage.events'))
        @include('site.homepage.events')
    @endif

    @if (View::exists('site.homepage.team'))
        @include('site.homepage.team')
    @endif

    @if (View::exists('site.homepage.extra'))
        @include('site.homepage.extra')
    @endif

    @if (View::exists('site.homepage.contact'))
        @include('site.homepage.contact')
    @endif
@stop