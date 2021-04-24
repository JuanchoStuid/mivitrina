@section('titleMaestro')
	| Media
@endsection

@section('style')
@endsection

@extends('layouts.master-media')

@section('title', '')
{{-- Inicio de la información --}}
@section('content-title')
    Medias
@endsection
@section('content-enlace')

@endsection
@section('content-icon')

@endsection
@section('content-call')

@endsection
@section('content-email')
    
@endsection
{{-- División del content --}}
@section('content-media')
    <div class="container">
        <div class="row">
            @foreach ($medias as $med)
                <div class="{{ $med->med_div_class }}">
                    <h3 class="small-title">
                        {{ $med->med_h3 }}
                    </h3>
                    {!! $med->med_video_audio !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection
{{-- Fin de la información --}}
@section('script')
@endsection