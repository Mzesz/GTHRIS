<x-admin-layout>
    <h1 class="text-2x1 font-semibold p-4">New User</h1>

    <x-splade-form :action="route('admin.users.store')" class="p-4 bg-white rounded-md space-y-2 grid grid-rows-3 gap-6 grid-cols-4">
        <x-splade-input name="username" label="Username" />
        <x-splade-input name="first_name" label="First Name" />
        <x-splade-input name="last_name" label="Last Name" />
        <x-splade-input name="email" label="Email address" />
        <x-splade-input name="employee_number" label="Employee No." />
        <x-splade-input type="password" name="password" label="Password" />
        <x-splade-input type="password" name="password_confirmation" label="Password Confirmation" />
        <x-splade-select label="Roles" name="roles[]" :options="$roles" multiple relation choices />
        <x-splade-select label="Permissions" name="permissions[]" :options="$permissions" multiple relation choices />
        <x-splade-submit />
    </x-splade-form>
</x-admin-layout>
