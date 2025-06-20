<script setup lang="ts">
import Carousel from "~/components/global/Carousel.vue";

useHead({
  title: "Home",
  meta: [{ name: "description", content: "Yancom Technologies" }],
});

</script>

<template>
  <main class="relative bg-white overflow-x-hidden">
    <!-- Hero Section -->
    <section id="hero" x-bind:class="mobileMenuOpen ? '-mt-[288px]' : '-mt-20'">
      <div class="relative h-[40vh] lg:h-[50vh] min-h-[300px] lg:min-h-[400px] flex overflow-y-clip">
        <!-- Overlays and Backgrounds -->
        <div
          class="absolute top-0 h-[40vh] lg:h-[50vh] min-h-[300px] lg:min-h-[400px] full-viewport-width z-0"
        >
          <img
            src="@/assets/images/yencom-bg.webp"
            alt="yencom background"
            class="object-cover z-0 h-full w-full"
          />
        </div>
        <div
          class="absolute top-20 h-[40vh] lg:h-[50vh] min-h-[300px] lg:min-h-[400px] full-viewport-width opacity-20 z-0"
        >
          <img
            src="@/assets/images/bg-halftone.webp"
            alt="yencom background"
            class="object-cover h-full w-full object-top"
          />
        </div>
        <div
          class="absolute top-0 h-full min-h-[300px] lg:min-h-[400px] full-viewport-width opacity-[0.84] bg-[#0e2116]"
        ></div>
        <div
          class="relative z-10 h-[calc(50vh-100px)] min-h-[300px] lg:min-h-[400px] mt-20 mx-auto w-fit max-w-3xl text-center"
        >
          <h2
            class="text-white text-xl lg:text-5xl font-medium text-center leading-8 lg:!leading-16"
          >
            Yencom, helping you
            <span class="text-[#4db972] font-bold"> navigate </span>
            <br />
            the digital world.
            <br />
            with
            <span class="text-[#4db972] font-bold"> confidence </span>
          </h2>

          <p class="mt-16">
            <NuxtLink
              class="rounded-full px-6 py-3 bg-[#4db972] text-base hover:bg-[hsl(141,44%,46%)] active:bg-[hsl(141,44%,42%)] text-white"
              to="/services"
              >LEARN MORE
          </NuxtLink>
          </p>
        </div>
      </div>
      <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-10 my-14 mx-auto max-w-[1240px] px-4 lg:px-0"
      >
        <div class="img">
          <img class="w-full" src="@/assets/images/img1.webp" alt="" />
        </div>
        <div class="content text-left">
          <h1 class="text-[#172952] mb-5 font-semibold text-xl lg:text-4xl">
            Our work at Yencom is to help organizations to confidently navigate
            the digital world.
          </h1>
          <p class="text-justify">
            As businesses change to accommodate new, virtualized ways of working
            and information systems, companies are expected to make the
            necessary ICT investments to stay efficient, effective, innovative
            and secure within the digital space. Yencom offers cost-effective
            ICT Consultancy Services to ensure that your technology meets your
            requirements and the demands of the modern world.
          </p>

          <div
            class="mt-10 items-start gap-4 rounded-lg p-4 text-left mx-auto shadow-sm"
          >
            <img src="@/assets/images/speech-marks.png" alt="speech-marks" class="w-8" />
            <div class="flex flex-col gap-2">
              <i class="">
                Yencom was founded with a prime goal in mind: To be the leading
                provider of world-class ICT consultancy services globally.
              </i>
              <div class="leading-[1]">
                <p class="font-bold capitalize">Nick Mwenda</p>
                <p class="capitalize text-sm">Solutions Architect</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- About Us Section -->
  <section id="about-us" class="px-4 mt-8 text-base max-w-[1240px] mx-auto mb-20">
    <div class="flex flex-col gap-6">
      <div class="w-full flex items-center gap-2">
        <div
          class="h-[2px] flex-grow bg-gradient-to-r from-white/0 to-[#4db972]"
        ></div>
        <div class="bg-[#d1fae0] rounded-full">
          <p class="text-[#084421] text-lg font-medium px-4 py-2">
            <span>About us</span>
          </p>
        </div>
        <div
          class="h-[2px] flex-grow bg-gradient-to-r from-[#4db972] to-white/0"
        ></div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
        <div class="text-3xl lg:text-7xl col-span-1 max-w-[300px]">
          Some Words About Us
        </div>
        <div class="col-span-2">
          <div class="space-y-4">
            <p class="text-justify">
              Yencom Technologies Consulting is a premier technology consulting
              firm dedicated to empowering businesses through innovative
              solutions and strategic insights. With a team of seasoned
              professionals and industry experts, we specialize in delivering
              tailored consulting services that address the unique challenges of
              our clients across various sectors.
            </p>
            <p class="text-justify">
              At Yencom, we believe in harnessing the power of technology to
              drive efficiency, enhance productivity, and foster growth. Our
              extensive portfolio includes services in Data Protection, IT
              strategy, digital transformation, cloud computing, cybersecurity,
              and business intelligence.
            </p>
            <p class="text-justify">
              We work closely with our clients to understand their goals and
              challenges, enabling us to devise and implement strategies that
              not only meet their immediate needs but also position them for
              future success and Navigate the digital world with confidence.
            </p>
          </div>
          <!-- Mission -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10">
            <div class="col-span-1 lg:col-span-2">
              <img class="object-contain" src="@/assets/images/img2.webp" alt="" />
              <h2
                class="text-[#172952] text-[27px] font-normal lg:col-span-2 mt-10"
              >
                One Purpose,
                <span class="font-bold text-[#4db972]">One Identity</span>
              </h2>
            </div>

            <div class="col-span-1 flex items-center gap-4">
              <div class="h-full w-1.5 bg-[#4db972] rounded-full"></div>
              <div class="flex flex-col gap-1">
                <h2 class="text-xl text-[#4db972] font-semibold">
                  Our Mission
                </h2>
                <p class="leading-[1.3]">
                  To empower businesses with secure and innovative digital
                  solutions, fostering trust and excellence in the digital
                  realm.
                </p>
              </div>
            </div>
            <div class="col-span-1 flex items-center gap-4">
              <div class="h-full w-1.5 bg-[#4db972] rounded-full"></div>
              <div class="flex flex-col gap-1">
                <h2 class="text-xl text-[#4db972] font-semibold">Our Vision</h2>
                <p class="leading-[1.3]">
                  To be the premier global partner in data protection,
                  cybersecurity, and digital transformation, enabling
                  organizations to navigate the digital world with confidence
                  and agility.
                </p>
              </div>
            </div>
          </div>
          <!-- End Mission -->
        </div>
      </div>
    </div>
  </section>
  </main>
</template>

<style scoped></style>
