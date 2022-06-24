<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar tarefa') }}
        </h2>
    </x-slot>
    <x-bladewind::notification />

<x-bladewind::card>

    <form method="get" class="signup-form">

        <x-bladewind::input
            name="fname"
            required="true"
            placeholder="Full Name"
            error_message="You will need to enter your full name" />

        <div class="flex gap-4">

            <x-bladewind::input
                name="email"
                required="true"
                label="Email" />

            <x-bladewind::input
                name="mobile"
                label="Mobile"
                numeric="true" />

        </div>

        <x-bladewind::textarea
            required="true"
            name="bio"
            error_message="Yoh! write something nice about yourself"
            show_error_inline="true"
            label="Describe yourself"></x-bladewind::textarea>

        <div class="text-center">

            <x-bladewind::button
                name="btn-save"
                has_spinner="true"
                type="primary"
                can_submit="true"
                class="mt-3">
                Sign Up Today
            </x-bladewind::button>

        </div>

    </form>

</x-bladewind::card>
</x-app-layout>