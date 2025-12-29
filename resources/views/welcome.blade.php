<x-app-layout>
    <div class="w-[70vw]">
        <h1 class="text-4xl">HOME</h1>
        <div>
            @if(auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                <p>
                    {{ __('Your email address is unverified.') }}
                    <a href="{{ route("profile.edit") }}" class="text-green-800 hover:text-green-500 ">more info...</a>
                </p>
            @endif
        </div>
    </div>
</x-app-layout>
