@extends('header')
@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    <div class="grid md:grid-cols-2 gap-8">
        
        {{-- Left: Contact Form --}}
        <div class="bg-white p-6 rounded-2xl shadow">
            <form action="" method="GET">

                @csrf
                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Name</label>
                    <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Email</label>
                    <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Message</label>
                    <textarea name="message" class="w-full border px-3 py-2 rounded" rows="5" required></textarea>
                </div>

                <button type="submit" class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded">
                    Send Message
                </button>
            </form>
        </div>

        {{-- Right: Google Map --}}
        <div class="rounded-2xl overflow-hidden shadow">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.091340036168!2d-122.41941558468195!3d37.77492977975908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085815642691237%3A0x8d832b9b9f13ce69!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1615910687686!5m2!1sen!2sus"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</div>

@endsection