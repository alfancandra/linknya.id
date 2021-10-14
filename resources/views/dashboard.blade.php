@extends('template.template')

@section('content')
<section id="home">
    <div class="bg-holder" style="background:#424D83;background-position:center;background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row align-items-center">
            @livewire('shortlink.create')
        </div>
    </div>
</section>
@endsection
        
        