<script setup>

</script> 

<template>
<aside class="flex flex-col w-20 md:w-52 min-h-screen -px-1 md:px-1 md:py-8 overflow-y-auto bg-black border-r rtl:border-r-0 rtl:border-l">
    <!-- Sidebar content here -->

    <!-- Dashboard link -->
    <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('dashboard')">
      <Link href="/admin" class="flex items-center md:p-2.5  rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
</svg>

      <span class="md:ml-2 text-xs md:text-base">Dashboard</span>
    </Link>
</div>
    <!-- Employee dropdown -->
    <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('employee')">
        <div class="flex items-center md:p-2.5 rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
</svg>


        <span class="md:ml-2 text-xs md:text-base">Employee</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.employee" class="pl-8">
        <Link href="/admin/employees" class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Employee Management</Link>
        <Link href="/admin/departments" class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Employee Groups</Link>
      </div>
    </div>
</div>
        <!-- Employee dropdown -->
        <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('payroll')">
        <div class=" items-center md:p-2.5 flex rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
</svg>


        <span class="md:ml-2 text-xs md:text-base" href="">Payroll</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.payroll" class="pl-8">
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Cutoff Management</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Transactions</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Settings</div>
      </div>
    </div>
</div>
        <!-- Employee dropdown -->
        <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('transactions')">
        <div class="flex items-center md:p-2.5 rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.25l6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185zM9.75 9h.008v.008H9.75V9zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm4.125 4.5h.008v.008h-.008V13.5zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
</svg>


        <span class="md:ml-2 text-xs md:text-base" href="">Transactions</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.transactions" class="pl-8">
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Time Entries</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Overtime</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Official Business</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">DTR Correction</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Offset</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Leave</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Leave Adjustment</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Change Schedule</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Change Restday</div>
      </div>
    </div>
</div>

<!-- Employee dropdown -->
        <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('devices')">
        <div class=" items-center md:p-2.5 flex rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5h3m-6.75 2.25h10.5a2.25 2.25 0 002.25-2.25v-15a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 4.5v15a2.25 2.25 0 002.25 2.25z" />
</svg>


        <span class="md:ml-2 text-xs md:text-base" href="">Devices</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.devices" class="pl-8">
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Devices</div>
      </div>
    </div>
</div>
        <!-- Employee dropdown -->
        <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('report')" >
        <div class="flex items-center md:p-2.5 rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
</svg>


        <span class="md:ml-2 text-xs md:text-base" href="">Report</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.report" class="pl-8">
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Reports</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Government Reports</div>
      </div>
    </div>
</div>

        <!-- Employee dropdown -->
        <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('administrator')">
        <div class="items-center md:p-2.5 flex rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>


        <span class="md:ml-2 text-xs md:text-base">Administration</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.administrator" class="pl-8">
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Announcement</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Audit Trail</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Holiday</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Leave Profile</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Leave Types</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Schedule</div>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Schedule Profile</div>
        <Link href="/admin/roles" class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">User Rights</Link>
        <div class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Remote Clock Assignment</div>
      </div>
    </div>
</div>
    <!-- Add more menu items and dropdowns as needed -->
    <div>
      <div class="p-4 text-white cursor-pointer" @click="toggleDropdown('system')">
        <div class="items-center md:p-2.5 flex rounded-md duration-300 cursor-pointer hover:bg-red-600 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden sm:inline">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>


        <span class="md:ml-2 text-xs md:text-base">System Management</span>
      </div>
      <!-- Employee submenu -->
      <div v-show="dropdowns.system" class="pl-8">
        <Link href="/admin/countries" class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">Countries</Link>
        <Link href="/admin/states" class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">States</Link>
        <Link href="/admin/cities" class="md:p-2  p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600 text-white text-xs">City</Link>
        
      </div>
    </div>
</div>

  </aside>
</template>
<script>
export default {
  data() {
    return {
      dropdowns: {
        dashboard: false,
        employee: false,
        // Add more dropdowns as needed
      },
    };
  },
  methods: {
    toggleDropdown(name) {
      this.dropdowns[name] = !this.dropdowns[name];
    },
  },

  data() {
    return {
      dropdowns: {
        dashboard: false,
        payroll: false,
        // Add more dropdowns as needed
      },
    };
  },
  methods: {
    toggleDropdown(name) {
      this.dropdowns[name] = !this.dropdowns[name];
    },
  },

  data() {
    return {
      dropdowns: {
        dashboard: false,
        transactions: false,
        // Add more dropdowns as needed
      },
    };
  },
  methods: {
    toggleDropdown(name) {
      this.dropdowns[name] = !this.dropdowns[name];
    },
  },

  data() {
    return {
      dropdowns: {
        dashboard: false,
        devices: false,
        // Add more dropdowns as needed
      },
    };
  },
  methods: {
    toggleDropdown(name) {
      this.dropdowns[name] = !this.dropdowns[name];
    },
  },

  data() {
    return {
      dropdowns: {
        dashboard: false,
        report: false,
        // Add more dropdowns as needed
      },
    };
  },
  methods: {
    toggleDropdown(name) {
      this.dropdowns[name] = !this.dropdowns[name];
    },
  },

  data() {
    return {
      dropdowns: {
        dashboard: false,
        administration: false,
        // Add more dropdowns as needed
      },
    };
  },
  methods: {
    toggleDropdown(name) {
      this.dropdowns[name] = !this.dropdowns[name];
    },
  },
};


</script>

<style scoped>
/* Add Tailwind CSS classes and custom styles as needed */
</style>