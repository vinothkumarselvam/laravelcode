@extends('layouts.app')

@section('title', 'About Us')


@section('content')
        <div class="content container pt-5">
                <!-- IF else case -->

                <div class="row mb-4">
                        @if ($hours < 8)
                        <div class="alert alert-success">
                        Good Morning, <strong>{{ $name }}.</strong>
                        </div>
                        @elseif ($hours > 12 && $hours < 19)
                                <div class="alert alert-warning">
                                        Good Afternoon, <strong>{{ $name }}.</strong>
                                </div>
                        @else
                                <div class="alert alert-danger">
                                        Good Night, <strong>{{ $name }}.</strong>       
                                </div>
                        @endif
                </div>

                <!-- Switch Case -->

                <div class="row">
                @switch($userID)
                        @case($userID >= 10)
                                <button type="button" class="btn btn-secondary">Completed</button>
                                @break

                        @case($userID > 5)
                                <button type="button" class="btn btn-success">WIP</button>
                                @break
                        
                        @case($userID == 1)
                                <button type="button" class="btn btn-primary">Start</button>
                                @break

                        @default
                                 <button type="button" class="btn btn-dark">Start</button>
                 @endswitch
                </div>

                
                <!-- Switch Case -->



                <div class="jumbotron">
                    <h1 class="display-4">Hi Vinoth {{ $name }}</h1>
                    <p class="lead">{{ $company }} simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <a class="btn btn-primary btn-lg" href="/home" role="button">Home Page</a>
                </div>
        </div>
@endsection