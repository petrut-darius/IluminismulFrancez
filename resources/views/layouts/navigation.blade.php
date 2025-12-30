<nav class="relative">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center text-green-500">
          thepdi
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <x-nav-link :href="route('home')" :active='Route::currentRouteName() == "home"'>Home</x-nav-link>
            <x-nav-link :href="route('introducere')" :active="Route::currentRouteName() == 'introducere'">Introducere</x-nav-link>
            <x-nav-link :href="route('nuanta_generala')" :active='Route::currentRouteName() == "nuanta_generala"'>Nuanta Generala</x-nav-link>

            <x-nav-link :href="route('caracteristicile_generale')" :active='Route::currentRouteName() == "caracteristicile_generale"'>Caracteristicile Generale</x-nav-link>
            <x-nav-link :href="route('context_motivatie')" :active='Route::currentRouteName() == "context_motivatie"'>Context & Motivatie</x-nav-link>
            <x-nav-link :href="route('filosofi_reprezentativi')" :active='Route::currentRouteName() == "filosofi_reprezentativi"'>Filosofii reprezentativi</x-nav-link>
            <x-nav-link :href="route('impact')" :active='Route::currentRouteName() == "impact"'>Impact</x-nav-link>

            @auth
                <x-nav-link :href="route('impact')" :active='Route::currentRouteName() == "impact"' class="!text-red-700">Teste</x-nav-link>
            @endauth

        </div>
        </div>
      </div>

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        @auth
        <div x-data="{open: false}" class="relative ml-3">
            <x-nav-link @click='open = !open' class="cursor-pointer" :active="Route::currentRouteName() == 'profile.edit'">
                User menu
            </x-nav-link>

            <div x-show="open"
                @click.away="open = false"
                x-transition
                class="absolute right-0 mt-2 w-48 rounded-md bg-white shadow-lg p-3">
                <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your profile</a> -->
                <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                see your test pass-rate
                link catre ig-u meu?

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" @click.prevent="$el.closest('form').submit()" class="hover:!bg-red-600 hover:!border-red-600">Log out!</x-dropdown-link>
                </form>
            </div>
        </div>
        @endauth

        @guest
            <x-nav-link :href="route('login')" :active="Route::currentRouteName() == 'login'" class="!text-lg hover:bg-green-600 hover:rounded hover:!text-white hover:!border-green-600 hover:shadow-xl">Log in!</x-nav-link>
            <x-nav-link :href="route('register')" :active="Route::currentRouteName() == 'register'" class="ml-4 !text-lg hover:bg-green-600 hover:rounded hover:!text-white hover:!border-green-600 hover:shadow-xl">Register!</x-nav-link>
        @endguest
      </div>

    </div>
  </div>

  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <x-nav-link-minimized :href="route('home')" :active='Route::currentRouteName() == "home"'>Home</x-nav-link-minimized>
        <x-nav-link-minimized :href="route('introducere')" :active="Route::currentRouteName() == 'introducere'">Introducere</x-nav-link-minimized>
        <x-nav-link-minimized :href="route('nuanta_generala')" :active='Route::currentRouteName() == "nuanta_generala"'>Nuanta Generala</x-nav-link-minimized>

        <x-nav-link-minimized :href="route('caracteristicile_generale')" :active='Route::currentRouteName() == "caracteristicile_generale"'>Caracteristicile Generale</x-nav-link-minimized>
        <x-nav-link-minimized :href="route('context_motivatie')" :active='Route::currentRouteName() == "context_motivatie"'>Context & Motivatie</x-nav-link-minimized>
        <x-nav-link-minimized :href="route('filosofi_reprezentativi')" :active='Route::currentRouteName() == "filosofi_reprezentativi"'>Filosofii reprezentativi</x-nav-link-minimized>
        <x-nav-link-minimized :href="route('impact')" :active='Route::currentRouteName() == "impact"'>Impact</x-nav-link-minimized>

        @auth
            <x-nav-link-minimized :href="route('impact')" :active='Route::currentRouteName() == "impact"' class="!text-red-700">Teste</x-nav-link-minimized>
        @endauth
    </div>
  </el-disclosure>
</nav>
