<template lang="">
  <!-- Desktop Sticky NavBar -->
  <div
    class="sticky bg-gradient-to-r from-[#0e2116] to-[#00491a] shadow-xl w-full z-50"
  >
    <nav class="mx-auto max-w-[1240px] py-4 px-8 rounded-xl text-white">
      <div class="flex items-center justify-between">
        <NuxtLink to="/">
          <img
            src="@/assets/images/yencom-logo-white.png"
            alt="yencom logo white"
            class="h-12"
          />
        </NuxtLink>
        <ul class="hidden lg:flex items-center gap-6 font-medium">
          <li>
            <NuxtLink
              to="/"
              class="hover:underline uppercase text-[#4db972]"
              style="text-underline-offset: 4px"
              :class="currentPath === '/' ? 'font-bold text-white' : ''"
              >Home
            </NuxtLink>
          </li>
          <li>
            <NuxtLink
              to="/why-us"
              class="hover:underline uppercase text-[#4db972]"
              style="text-underline-offset: 4px"
              :class="currentPath === '/why-us' ? 'font-bold text-white' : ''"
              >Why Us
            </NuxtLink>
          </li>
          <li>
            <NuxtLink
              to="/services"
              class="hover:underline uppercase text-[#4db972]"
              style="text-underline-offset: 4px"
              :class="currentPath === '/services' ? 'font-bold text-white' : ''"
              >Our Services
            </NuxtLink>
          </li>
        </ul>
        <NuxtLink
          to="/contact"
          class="hidden lg:block rounded-full px-4 py-2 bg-[#4db972] text-base hover:bg-[hsl(141,44%,46%)] active:bg-[hsl(141,44%,42%)] text-wnite"
          >Contact Us
        </NuxtLink>
        <!-- Hamburger menu button - visible only on smaller screens -->
        <button
          @click="mobileMenuOpen = !mobileMenuOpen"
          class="lg:hidden text-white focus:outline-none"
          aria-label="Toggle menu"
        >
          <svg
            v-show="!mobileMenuOpen"
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
          <svg
            v-show="mobileMenuOpen"
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
      <!-- Mobile menu - slides down when hamburger is clicked -->
      <div
        v-show="mobileMenuOpen"
        x-transition:enter="transition-all duration-300 ease-out"
        x-transition:enter-start="max-h-0 transform opacity-0 scale-y-0"
        x-transition:enter-end="max-h-[999px] transform opacity-100 scale-y-100"
        x-transition:leave="transition-all duration-300 ease-out"
        x-transition:leave-start="max-h-[999px] transform opacity-100 scale-y-100"
        x-transition:leave-end="max-h-0 transform opacity-0 scale-y-0"
        class="sticky origin-top top-0 lg:hidden w-full py-4 z-50"
      >
        <div class="text-white rounded-b-lg">
          <ul class="flex flex-col space-y-6 border-t-1 pt-8 mt-4">
            <li>
              <NuxtLink
                @click="mobileMenuOpen = !mobileMenuOpen"
                to="/"
                class="hover:underline uppercase text-[#4db972]"
                style="text-underline-offset: 4px"
                :class="currentPath === '/' ? 'font-bold text-white' : ''"
                >Home
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                @click="mobileMenuOpen = !mobileMenuOpen"
                to="/why-us"
                class="hover:underline uppercase text-[#4db972]"
                style="text-underline-offset: 4px"
                :class="currentPath === '/why-us' ? 'font-bold text-white' : ''"
                >Why Us
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                @click="mobileMenuOpen = !mobileMenuOpen"
                to="/services"
                class="hover:underline uppercase text-[#4db972]"
                style="text-underline-offset: 4px"
                :class="
                  currentPath === '/services' ? 'font-bold text-white' : ''
                "
                >Our Services
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                @click="mobileMenuOpen = !mobileMenuOpen"
                to="/contact"
                class="lg:block rounded-full px-4 py-2 bg-[#4db972] text-base hover:bg-[hsl(141,44%,46%)] active:bg-[hsl(141,44%,42%)]"
                >Contact Us
              </NuxtLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>
<script lang="ts" setup>
const route = useRoute();
const mobileMenuOpen = ref(false);

const currentPath = computed(() => route.path);
console.log(currentPath.value);
</script>
<style lang=""></style>
