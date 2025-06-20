<script setup lang="ts">
useHead({
  titleTemplate: "%s | Yancom Technologies",
});
</script>

<template>
  <div class="relative bg-white overflow-x-hidden">
    <UApp>
      <Navbar />
      <section>
        <slot />
      </section>
      <footer id="contact-us" class="mt-8 text-base text-center text-white">
        <div class="mx-auto bg-[#172952]">
          <div class="grid grid-cols-1 lg:grid-cols-2 mx-auto w-fit py-16 px-4 gap-8">
            <div class="col-span-1 pr-5 lg:border-r-4 lg:border-[#4db972] text-right">
              <img
                src="@/assets/images/yencom-logo-white.png"
                alt="yencom logo"
                class="h-16"
              />
            </div>
            <div class="col-span-1 text-start gap-2 lg:pl-8 mt-4 lg:mt-0 leading-8">
              <p class="text-3xl font-semibold">Contact Us</p>
              <p class="text-xl">
                For inquiries and partnerships, reach out to us at:
              </p>
              <p>info@yencom.co.ke</p>
              <p>+254 701 822881</p>
            </div>
          </div>
          <hr class="border-[#4db972] mb-4 lg:mb-8 opacity-40" />
          <div class="text-center text-white font-medium pb-5">
            © {{ new Date().getFullYear() }} Yancom Technologies |
            <span class="text-yellow-500">All Rights Reserved</span>
          </div>
        </div>
      </footer>
    </UApp>
  </div>
</template>

<style scoped></style>
