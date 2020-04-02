<div class="flex flex-col lg:flex-row border-b boder-primary shadow-xs">

	<!-- News image !-->
	<div class="w-full lg:w-1/2 bg-primary border-r">
		<img class="h-128 w-full" src="{{ $image ?? '' }}">
	</div><!-- // News image !-->

	<!-- Title and Description !-->
	<div class="w-full lg:w-1/2 bg-primary p-4 md:p-0 sm:py-6  flex justify-start">
		<div class="flex flex-col items-start justify-center md:px-10 pt-10">
			<h2 class="text-2xl mt-2 font-bold mb-2 leading-tight text-darker">
				{{ $title ?? '' }}
			</h2>
			<h3 class="text-sm font-semibold my-6 sm:mb-16 text-light">
				{!! $description ?? '' !!}
			</h3>
			<div class="flex">
				{{ $buttons ?? '' }}
			</div>
		</div>
	</div><!-- // Title and Description !-->
</div>