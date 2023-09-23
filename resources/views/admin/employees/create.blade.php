<x-admin-layout>
    <div class="relative w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 ml-5 mt-5">
        <svg class="hide absolute w-24 h-24 text-gray-400 -ml-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
        </svg>
    </div>

    <!-- component -->
    <header>
        <ul
            class=" flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mr-2">
                <a href="/admin/employees" aria-current="page"
                    class="inline-block p-4 text-blue-600  rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Personal
                    Details</a>
            </li>
            <div class="mr-2">
                <a href="/admin/employees/bg"
                    class="inline-block p-4 text-gray-600 rounded-t-lg dark:bg-gray-800 dark:text-blue-500">Background</a>
            </div>
            <li class="mr-2">
                <a href="/admin/users"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                    HR
                    & Accounts</a>
            </li>
            <li class="mr-2">
                <a href="/admin/employees/work"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Work
                    Experiences</a>
            </li>
            <li class="mr-2">
                <a href="/admin/employees/reference"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Character
                    References</a>
            </li>
            <li class="mr-2">
                <a href="/admin/employees/payroll"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Payroll
                    Details</a>
            </li>
            <li class="mr-2">
                <a href="/admin/employees/identifications"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Identifications</a>
            </li>
        </ul>
    </header>


    <div class="flex justify-between">
        <h1 class="text-2xl font-semibold p-4">Create Employee</h1>
    </div>
    <x-splade-form :for="$form" />

</x-admin-layout>
