<section id="contact">
    <div class="container mx-auto">
        <div class="w-3/5 min-w-fit lg:w-4/5 relative z-20 mx-auto">
            @component('components.util.error-message')@endcomponent
            {{-- @route('send.email') --}}
            <form data-action="@route('send.email')" method="POST" enctype="multipart/form-data" class="mx-4" autocomplete="off" id="feedbackMail"> 
                @csrf
                <div class="grid gap-6 sm:grid-cols-2">
                    {{-- ### NAME ### --}}
                    <div class="relative z-0 col-span-2">
                        <x-form.input type="text" name="name" id="nameJS" tag="nameLabel" icon="person" value="{{ old('name') }}" class="dark:border-dark-600">Your name</x-form.input>
                        @error('name')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    {{-- ### EMAIL ### --}}
                    <div class="relative z-0 col-span-2">
                        <x-form.input type="email" name="email" id="emailJS" tag="emailLabel" icon="email" value="{{ old('email') }}" class="dark:border-dark-600">Your email</x-form.input>
                        @error('email')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    {{-- ### MOBILE ### --}}
                    <div class="relative z-10 col-span-2">
                        {{-- <x-form.input type="tel" name="phone" id="phoneJS" tag="phoneLabel" icon="phone_android" value="{{ old('phone') }}" class="dark:border-dark-600">Your phone number</x-form.input> --}}

                        <label id="phoneLabel" class="flex items-end space-x-4 absolute top-3 right-0 -z-10 text-sm text-white dark:text-dark-600">
                            <i class="material-icons min-w-fit min-h-fit mr-2">phone_android</i></label>

                        <input type="tel" name="phone" id="phoneJS" class="block w-full appearance-none border-0 border-b-2 border-white bg-transparent py-2.5 px-0 text-sm text-white focus:border-minsk-900 dark:focus:border-white focus:outline-none focus:ring-0 placeholder:text-white/50 dark:border-dark-600">
                        @error('phone')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    {{-- ### MESSAGE ### --}}
                    <div class="relative z-0 col-span-2">
                        <x-form.textarea name="message" id="messageJS" tag="messageLabel" icon="edit" value="{{ old('message') }}" class="dark:border-dark-600">Message</x-form.textarea>
                        @error('message')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    {{-- ### SEND BUTTON ### --}}
                    <x-form.button  type="submit" id="feedbackButton">send message</x-form.button>
                </div>
            </form>

        </div>
    </div>
</section>