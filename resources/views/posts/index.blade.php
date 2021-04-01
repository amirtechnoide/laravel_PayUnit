@extends ('layouts.app')

@section('content')
<div class="flex justify-center pt-2">
    <div class="w-8/12 bg-white p-6 rounded-lg">
<h1 class="mb-4">Make a donation</h1>
        <form action="/makePayment" method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <input name="amount" id="body"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Donate something for poor people!">
                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Donate FCFA</button>
            </div>
        </form>


        @if ($posts->count())
        @foreach ($posts as $post)
        <div class="mb-4">
        <h4>Previous Donations</h4>
            <a href="" class="font-bold">You {{$post->user->name}} </a>
            <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
            <p class="mb-2">You have given <span class="text-success">{{$post->body}}</span> FCFA for participation</p>
            <div class="flex items-center">
                <!-- <form action="" method="post" class="mr-1">
            @csrf

                    <button type="submit" class="text-blue-500">like</button>
                </form> -->
                <!-- <form action="" method="post" class="mr-1">
            @csrf

                    <button type="submit" class="text-blue-500">Unlike</button>
                </form> -->
                <!-- <span>{{$post->likes->count()}} {{ Str::plural('like',$post->likes->count()) }}</span> -->
            </div>
        </div>
        @endforeach
        @else
        <p>There are no Donations history</p>
        @endif
    </div>
</div>
@endsection
