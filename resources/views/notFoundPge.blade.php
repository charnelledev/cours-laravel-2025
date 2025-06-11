@extends('layouts.website.layout-website')

@section('content')


<div class="content bg-amber-50">
    <div class="container mx-auto my-5">
        <div class=" text-white text-2xl p-4 rounded-md mb-4">
            <h1 class="text-center">404-Page Not Found</h1>
            <p class="text-center">The page you are looking for does not exist.</p>
        </div>
        <div class="text-center">
            <a href="{{ route('products.index') }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Go to Home</a>
        </div>
    </div>
</div>

@endsection