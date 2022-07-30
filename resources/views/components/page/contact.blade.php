<section id="contact">
    <div class="container mx-auto">
        <div class="w-3/5 min-w-fit lg:w-4/5 relative z-20 mx-auto">
            @component('components.util.error-message')
                
            @endcomponent
            <form action="@route('send.email')" method="POST" class="mx-4" autocomplete="off" id="email_author_form">
                @csrf
                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="relative z-0 col-span-1">
                        <x-form.input type="text" name="name" id="nameJS" tag="nameLabel" icon="person" value="{{ old('name') }}" class="dark:border-dark-600">Your name</x-form.input>
                        @error('name')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="relative z-0 col-span-1">
                        <x-form.input type="text" name="phone" id="phoneJS" tag="phoneLabel" icon="phone_android" value="{{ old('phone') }}" class="dark:border-dark-600">Your phone</x-form.input>
                        @error('phone')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="relative z-0 col-span-2">
                        <x-form.input type="email" name="email" id="emailJS" tag="emailLabel" icon="email" value="{{ old('email') }}" class="dark:border-dark-600">Your email</x-form.input>
                        @error('email')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="relative z-0 col-span-2">
                        <x-form.textarea name="message" id="messageJS" tag="messageLabel" icon="edit" value="{{ old('message') }}" class="dark:border-dark-600">Message</x-form.textarea>
                        @error('message')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>
                    <x-form.button  type="submit" id="contactBTN">send message</x-form.button>
                </div>
            </form>

        </div>
    </div>
</section>