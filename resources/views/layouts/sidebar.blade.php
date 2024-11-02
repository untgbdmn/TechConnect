<div class="w-full max-w-[18rem]">
    <aside class="sidebar h-full justify-start">
        <section class="px-4 pt-4">
            <div class="flex flex-row gap-2 items-center">
                <img src={{ asset('logo.png') }} alt="Logo App" class="w-14 h-full">
                <div class="flex flex-col">
                    <span class="uppercase text-xl text-blue-400 font-extrabold">tech</span>
                    <span class="uppercase">connect</span>
                </div>
            </div>
        </section>
        <section class="sidebar-content h-fit min-h-[20rem] overflow-visible">
            <nav class="menu rounded-md">
                <section class="menu-section px-4">
                    <span class="menu-title">Main menu</span>
                    <ul class="menu-items">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <x-heroicon-s-home class="h-5 w-5" />
                            {{ __('Dashboard') }}
                        </x-nav-link>

                        @php
                            $activeRoutes = ['siswa.list', 'siswa.detail', 'siswa.create', 'siswa.edit'];
                            $activeClass = ['kelas.list', 'kelas.create']
                        @endphp
                        <x-nav-link :href="route('siswa.list')" :active="request()->routeIs($activeRoutes)">
                            <x-bi-person-fill class="h-5 w-5" />
                            {{ __('Students') }}
                        </x-nav-link>

                        <x-nav-link :href="route('kelas.list')" :active="request()->routeIs($activeClass)">
                            <x-bi-house-gear-fill class="h-5 w-5" />
                            {{ __('Kelas') }}
                        </x-nav-link>

                        <li>
                            <input type="checkbox" id="menu-1" class="menu-toggle" />
                            <label class="menu-item justify-between" for="menu-1">
                                <div class="flex gap-2">
                                    <x-bi-gear-fill class="h-5 w-5" />
                                    <span>Settings</span>
                                </div>

                                <span class="menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </label>

                            <div class="menu-item-collapse">
                                <div class="min-h-0">
                                    <label class="menu-item ml-6">Billing</label>
                                    <label class="menu-item ml-6">Security</label>
                                    <label class="menu-item ml-6">Notifications</label>
                                    <label class="menu-item ml-6">Integrations</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </nav>
        </section>
        <section class="sidebar-footer h-full justify-end bg-gray-2 pt-2">
            <div class="divider my-0"></div>
            <div class="dropdown z-50 flex h-fit w-full cursor-pointer hover:bg-gray-4">
                <label class="whites mx-2 flex h-fit w-full cursor-pointer p-0 hover:bg-gray-4" tabindex="0">
                    <div class="flex flex-row gap-4 p-3">
                        <div class="avatar avatar-md">
                            <img src={{ asset('pictures/profile.jpeg') }} alt="avatar" />
                        </div>

                        <div class="flex flex-col">
                            <span>{{ Auth::user()->name }}</span>
                            <span class="text-xs font-normal text-content2">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </label>
                <div class="dropdown-menu dropdown-menu-right-top ml-2 bottom-5">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
