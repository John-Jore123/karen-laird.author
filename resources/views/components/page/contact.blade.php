<section id="contact">
    <div class="container mx-auto">
        <div class="w-3/5 min-w-fit lg:w-4/5 relative z-20 mx-auto">

            <div x-data="{show:true}" x-init="setTimeout(() => show = false, 1500)" x-show="show"> 
                @if (Session::has('message'))
                    <div class="alert alert-success text-center">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>

            <form action="@route('send.email')" method="POST" class="mx-4" autocomplete="off" id="email_author_form">
                @csrf
                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="relative z-0 col-span-1">
                        <x-form.input type="text" name="name" id="name" icon="person" value="{{ old('name') }}" {{ $attributes->class([ 'dark:border-dark-600' ]) }}>Your name</x-form.input>
                        {{-- <span class="error-text name_error"></span> // UNDERT_TEST --}} 
                        {{-- @error('name')
                            <span class="w-auto text-red-500">{{ $message }}</span>
                        @enderror --}}
                        {{-- class="@error('name') is-invalid @enderror" 
                                @error('name')
                                    <strong>{{ $message }}</strong>
                            @enderror --}}
                    </div>
                    <div class="relative z-0 col-span-1">
                        <x-form.input type="text" name="phone" id="phone" icon="phone_android" value="{{ old('phone') }}" {{ $attributes->class([ 'dark:border-dark-600' ]) }}>Your phone</x-form.input>
                        {{-- <span class="error-text phone_error"></span> // UNDERT_TEST --}}
                        {{-- @error('phone')
                            <span class="w-auto text-red-500">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div class="relative z-0 col-span-2">
                        <x-form.input type="email" name="email" id="email" icon="email" {{ $attributes->class([ 'dark:border-dark-600' ]) }}>Your email</x-form.input>
                        {{-- <span class="error-text email_error"></span> // UNDERT_TEST --}}
                        {{-- @error('email')
                            <span class="w-auto text-red-500">{{ $message }}</span>
                        @enderror --}}
                        {{-- class="@error('email') is-invalid @enderror"
                            @error('email')
                                <strong>{{ $message }}</strong>
                            @enderror --}}
                    </div>
                    <div class="relative z-0 col-span-2">
                        <x-form.textarea name="message" id="message" icon="edit" {{ $attributes->class([ 'dark:border-dark-600' ]) }}>Message</x-form.textarea>
                        {{-- <span class="error-text message_error"></span> // UNDERT_TEST --}}
                        {{-- @error('message')
                            <span class="w-auto text-red-500">{{ $message }}</span>
                        @enderror  --}}
                        {{-- class="@error('message') is-invalid @enderror"
                                @error('message')
                                <strong>{{ $message }}</strong>
                            @enderror --}}
                    </div>
                    <x-form.button  type="submit" id="contactBTN">send message</x-form.button>
                </div>
            </form>

        </div>
    </div>
</section>