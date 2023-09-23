<style>
    .hide {
        display: none;
    }
</style>
<script>
    window.addEventListener('load', function() {
        // Get the SVG element by its class or ID
        var svgElement = document.querySelector('formbold-mb-5');
        var svgElement = document.querySelector('.your-svg-class');
        // Remove the 'hidden' class to make it visible
        svgElement.classList.remove('hide');
    });
</script>
<x-admin-layout>

    <div class="relative w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 ml-5 mt-5">
        <svg class="hide absolute w-24 h-24 text-gray-400 -ml-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
        </svg>
    </div>

    </div>

    <!-- component -->
    <header style="">
        <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mr-2">
                <a href="/admin/employees/create"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Personal
                    Details</a>
            </li>
            <div class="mr-2">
                <a href="/admin/employees/bg"
                    class="inline-block p-4 text-blue-600 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Background</a>
            </div>
            <li class="mr-2">
                <a href="/admin/employees/hr"
                    class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">HR
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

    <div style="font-size: 20px;" class="mt-3 font-medium"><br> Educational Background </div>

    <div class="text-right -mt-18 md:-mt-10">
        <div class="p-4">
            <Link href="/admin/employees"
                class="text-right px-2 py-1 md:px-4 md:py-2 bg-blue-500 hover:bg-red-600 rounded text-white">Save</Link>
            <Link href="/admin/employees"
                class="text-right px-2 py-1 md:px-4 md:py-2 bg-gray-500 hover:bg-red-600 rounded text-white ml-2">Cancel
            </Link>
        </div>
    </div>

    <form action="https://formbold.com/s/FORM_ID" method="POST"
        class="hide grid grid-cols-1 md:grid-cols-2 md:ml-10 mt-3">
        <div class="formbold-mb-5 ">
            <label for="elementary" class="formbold-form-label"> Elementary School <br></label>
            <input type="text" name="elementary" id="elementary" placeholder="Elementary School"
                class="formbold-form-input rounded-lg md:w-[500px]" />
        </div>
        <div class="formbold-mb-5">
            <label for="elementary_year" class="formbold-form-label"> Year <br></label>
            <input type="text" name="elementary_year" id="elementary_year" placeholder="Year"
                class="formbold-form-input rounded-lg" />
        </div>
        <div class="formbold-mb-5 mt-5">
            <label for="highschool" class="formbold-form-label"> High School <br></label>
            <input type="text" name="highschool" id="highschool" placeholder="High School"
                class="formbold-form-input rounded-lg md:w-[500px]" />
        </div>
        <div class="formbold-mb-5 mt-5">
            <label for="highschool_year" class="formbold-form-label"> Year <br></label>
            <input type="text" name="highschool_year" id="highschool_year" placeholder="Year"
                class="formbold-form-input rounded-lg" />
        </div>
        <div class="formbold-mb-5 mt-5">
            <label for="senior" class="formbold-form-label"> Senior High School <br></label>
            <input type="text" name="senior" id="senior" placeholder="Senior High School"
                class="formbold-form-input rounded-lg md:w-[500px]" />
        </div>
        <div class="formbold-mb-5 mt-5">
            <label for="senior_year" class="formbold-form-label"> Year <br></label>
            <input type="text" name="senior_year" id="senior_year" placeholder="Year"
                class="formbold-form-input rounded-lg" />
        </div>
        <div class="formbold-mb-5 mt-5">
            <label for="college" class="formbold-form-label"> College <br></label>
            <input type="text" name="college" id="college" placeholder="College"
                class="formbold-form-input rounded-lg md:w-[500px]" />
        </div>
        <div class="formbold-mb-5 mt-5">
            <label for="college_year" class="formbold-form-label"> Year <br></label>
            <input type="text" name="college_year" id="college_year" placeholder="Year"
                class="formbold-form-input rounded-lg" />
        </div>
    </form>


    </div>

    </div>
    </form>



    <x-splade-form />
</x-admin-layout>
