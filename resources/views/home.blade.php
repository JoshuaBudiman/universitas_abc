@extends('layouts.main')

@section('content')
<div class="card text-center">
    <div class="row justify-content-center">
        <h1>Welcome To Universitas ABC</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum lorem risus, ac interdum erat porta quis. Nam vel lacus diam. Phasellus mollis libero neque. Etiam sagittis, orci sit amet eleifend sagittis, turpis nunc auctor elit, quis rhoncus nisl magna eu odio. Nam quis tortor congue, sagittis dui ac, interdum ipsum. Mauris nec nisl et ex hendrerit porta sit amet vel est. Donec id tortor leo. Quisque velit est, volutpat quis dolor sit amet, convallis laoreet massa. Nunc luctus nisl vel vestibulum placerat. Proin vestibulum quam ac luctus tincidunt. Morbi id fringilla sem. Ut in neque rhoncus, eleifend odio at, ultricies lacus. Donec condimentum, nisi at rutrum scelerisque, urna justo ultrices metus, a cursus turpis nulla quis sem.</p>
        <button><a class="btn" href={{ route('dosen.index') }}> Dosen </a></button>
    </div>
</div>
@endsection