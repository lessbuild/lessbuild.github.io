@extends('_layouts.master')

<!-- Header -->
@push('header')
	@component('_layouts.partials.header', [
		'image' => $page->image,
		'title' => $page->title,
		'description' => $page->getExcerpt(300)
	])
		@slot('buttons')
			<a
				href="/"
				class="mr-3 bg-primary shadow border border-primary font-bold rounded py-4 px-8 uppercase tracking-wider"
			>Portfolio</a>
		@endslot
	@endcomponent
@endpush
<!-- // Header -->

@section('body')
	<div class="py-12 px-4 flex flex-col md:flex-row">

		<div class="h-full w-full md:w-1/5 border bg-white p-4 mb-4 lg:mb-0">
			<h2 class="font-bold text-darker mb-2">{{ $page->title }}</h2>
			<p class="text-sm text-dark">{!! $page->getExcerpt(200) !!}</p>
		</div>

		<div class="w-full md:w-4/5 md:px-8">
			<div class="bg-white border p-4 text-sm text-dark">
				@yield('content')

				<div class="my-4 flex">
					@foreach($page->images as $image)
						<div class="w-1/2">
							<img src="{{ $image }}" class="w-full p-2">
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop