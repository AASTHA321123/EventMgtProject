<!-- Display average rating -->
<div class="text-center mt-4">
    <h2 class="text-xl font-bold">Average Rating</h2>
    <div class="flex justify-center space-x-1 text-yellow-400 text-2xl">
        @for ($i = 1; $i <= 5; $i++)
            <span>{{ $i <= round($package->averageRating()) ? '★' : '☆' }}</span>
        @endfor
    </div>
    <p class="text-sm text-gray-600 mt-1">({{ number_format($package->averageRating(), 1) }}/5 from {{ $package->reviews->count() }} reviews)</p>
</div>

<!-- Review form (only for logged in users) -->
@auth
<div class="bg-white mt-10 p-6 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Write a Review</h2>
    <form action="{{ route('reviews.store', $package->id) }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="title" placeholder="Review Title" class="w-full border rounded p-2" required>
        <textarea name="description" placeholder="Your review..." rows="4" class="w-full border rounded p-2" required></textarea>

        <div class="flex items-center space-x-2">
            <label class="font-semibold">Rating:</label>
            @for ($i = 1; $i <= 5; $i++)
                <label class="cursor-pointer">
                    <input type="radio" name="rating" value="{{ $i }}" class="hidden" required>
                    <span class="text-yellow-400 text-xl">&#9733;</span>
                </label>
            @endfor
        </div>

        <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700">Submit Review</button>
    </form>
</div>
@else
    <p class="text-center text-sm mt-4 text-gray-500">Please <a href="{{ route('login') }}" class="text-pink-600 underline">login</a> to leave a review.</p>
@endauth

<!-- Display all reviews -->
<div class="mt-10">
    <h2 class="text-xl font-bold mb-4">All Reviews</h2>
    @foreach($package->reviews as $review)
        <div class="bg-gray-100 p-4 rounded mb-4">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold">{{ $review->title }}</h3>
                <div class="text-yellow-400">
                    @for ($i = 1; $i <= 5; $i++)
                        <span>{{ $i <= $review->rating ? '★' : '☆' }}</span>
                    @endfor
                </div>
            </div>
            <p class="text-sm text-gray-500">by {{ $review->user->name }} | {{ $review->created_at->diffForHumans() }}</p>
            <p class="mt-2">{{ $review->description }}</p>
        </div>
    @endforeach
</div>
