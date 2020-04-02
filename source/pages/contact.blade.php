@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->sitename }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->sitename }}" />
@endpush

<!-- Header -->
@push('header')
    @component('_layouts.partials.header', [
        'image' => 'https://i.imgur.com/3eljYNZ.png',
        'title' => $page->sitename,
        'description' => 'Do you want a professional website built in little to no time? <br>
         We pride ourselves on building your website quickly and beautifully.'
    ])
        @slot('buttons')
            <a
                href="/"
                class="mr-3 bg-ternary shadow border border-primary text-light font-bold rounded py-4 px-8 uppercase tracking-wider"
            >Portfolio</a>
            <a
                href="/"
                class="bg-primary shadow border border-primary font-bold rounded py-4 px-8 uppercase tracking-wider"
            >Contact</a>
        @endslot
    @endcomponent
@endpush
<!-- // Header -->

@section('body')

    <div class="p-4">
        <h1>Contact</h1>

        <p class="mb-8">
            Static sites are unable to handle form submissions. However, there are third-party services, like Tighten’s <a href="https://fieldgoal.io" title="FieldGoal">FieldGoal</a>, which can accept the form submission, email you the result, and redirect back to a thank you page.
        </p>

        <form action="/contact" class="mb-12">
            <div class="flex flex-wrap mb-6 -mx-3">
                <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                    <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="contact-name"
                        placeholder="Jane Doe"
                        name="name"
                        class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                        required
                    >
                </div>

                <div class="w-full px-3 md:w-1/2">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="contact-email"
                        placeholder="email@domain.com"
                        name="email"
                        class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                        required
                    >
                </div>
            </div>

            <div class="w-full mb-12">
                <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
                    Message
                </label>

                <textarea
                    id="contact-message"
                    rows="4"
                    name="message"
                    class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
                    placeholder="A lovely message here."
                    required
                ></textarea>
            </div>

            <div class="flex justify-end w-full">
                <input
                    type="submit"
                    value="Submit"
                    class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
                >
            </div>
        </form>
    </div>
@stop
