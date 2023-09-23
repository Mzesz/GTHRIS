<x-admin-layout>
    <header>
        <ul
            class=" flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mr-2">
                <a href="/admin/roles" aria-current="page"
                    class="inline-block p-4 text-blue-600  rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">
                    roles</a>
            </li>
            <div class="mr-2">
                <a href="/admin/permissions"
                    class="inline-block p-4 text-gray-600 rounded-t-lg dark:bg-gray-800 dark:text-blue-500">Permissions</a>
            </div>
        </ul>
    </header>
    <h1 class="text-2xl font-semibold p-4"> Roles</h1>
    <div class="p-4">
        <Link href="{{ route('admin.roles.create') }}"
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded text-white">New Role</Link>
    </div>
    </div>
    <x-splade-table :for="$roles">
        @cell('action', $role)
            <div class="space-x-2">
                <Link href="{{ route('admin.roles.edit', $role) }}"
                    class="text-green-400 hover:text-green-700 font-semibold">
                Edit</Link>
                <Link href="{{ route('admin.roles.destroy', $role) }}" method="DELETE"
                    class="text-red-400 hover:text-red-700 font-semibold" confirm="Delete this role"
                    confirm-text="Are you sure you want to delete this user?" confirm-button="Yes" cancel-button="No">
                Delete</Link>
            </div>
        @endcell
    </x-splade-table>
</x-admin-layout>
