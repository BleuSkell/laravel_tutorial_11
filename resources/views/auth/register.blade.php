<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="First name">First name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="First name" id="First name" required/>
                            
                            <x-form-error name="First name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="Last name">Last name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="Last name" id="Last name" required/>
                            
                            <x-form-error name="Last name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="Email">Email</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="Email" id="Email" type="email" required/>
                            
                            <x-form-error name="Email"/>
                        </div>
                    </x-form-field> 

                    <x-form-field>
                        <x-form-label for="Password">Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="Password" id="Password" type="password" required/>
                            
                            <x-form-error name="Password"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="Password_Confirmation">Confirm Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="Password_Confirmation" id="Password_Confirmation" type="password" required/>
                            
                            <x-form-error name="Password_Confirmation"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>