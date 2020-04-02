<div class="bg-secondary border-t border-primary">
	<div class="container mx-auto px-16 pt-10 pb-6">
		<div class="flex flex-wrap">
			<!-- Technology !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left">
				<h5 class="uppercase mb-2 font-bold">Tech we use</h5>
				<ul class="mb-4">
					@foreach([
						'PHP',
						'Laravel',
						'Tailwindcss',
						'Vuejs',
						'Html',
					] as $tech)
						<li class="mt-2 text-sm">
							{{ ucwords($tech) }}
						</li>
					@endforeach
				</ul>
			</div>
			<!-- // Technology !-->

			<!-- Portfolio !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left">
				<h5 class="uppercase mb-2 font-bold">Portfolio</h5>
				<ul class="mb-4">
					@foreach($portfolios->take(5) as $post)
						<li class="mt-2">
							<a href="{{ $post->getUrl() }}" class="hover:underline text-secondary hover:text-orange-500 text-sm">
								{{ \Illuminate\Support\Str::limit($post->title, 30) }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
			<!-- // Portfolio !-->

			<!-- Useful !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left">
				<h5 class="uppercase mb-2 font-bold">Useful</h5>
				<ul class="mb-4">
					@foreach([
    					['title' => 'Terms', 'uri' => 'terms'],
    					['title' => 'Privacy', 'uri' => 'privacy'],
    					['title' => 'Contact', 'uri' => 'contact']
   			 		] as $link)
						<li class="mt-2">
							<a
								href="/pages/{{ $link['uri'] }}"
								class="hover:underline text-secondary hover:text-orange-500 text-sm"
							>
								{{ $link['title'] }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
			<!-- // Useful !-->

			<!-- Website !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left">
				<h5 class="uppercase mb-2 font-bold">{{ $page->siteName }}</h5>
				<div class="flex flex-col">
					<span class="text-sm">Contact: help&commat;{{ strtolower($page->sitename) }}.com</span>
					<span class="text-sm">Enquiries: enquiries&commat;{{ strtolower($page->sitename) }}.com</span>
				</div>
				<div class="mt-4">
					<i class="text-3xl mdi mdi-facebook-box"></i>
					<i class="text-3xl mdi mdi-twitter-box"></i>
				</div>
			</div>
			<!-- // Website !-->
		</div>
	</div>
</div>