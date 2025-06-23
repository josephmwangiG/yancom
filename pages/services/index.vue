<template lang="">
  <Banner title="Our Services" />
  <!-- Services Section -->
  <section
    id="our-services"
    class="relative px-4 lg:p-8 h-fit mt-8 pb-16 text-base max-w-[1240px] mx-auto"
  >
    <!-- Main Contents -->
    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-10 mx-auto max-w-[1240px] px-4 lg:px-0"
      data-aos="fade-up"
      data-aos-duration="1000"
      data-aos-easing="ease-in-out"
    >
      <div class="img">
        <img class="w-full" src="@/assets/images/img3.webp" alt="" />
      </div>
      <div class="content text-left">
        <h1
          class="text-[#172952] mb-5 font-semibold text-xl lg:text-4xl block lg:hidden"
        >
          Yencom Services
        </h1>
        <p class="text-justify">
          We are a forward-thinking ICT consulting firm committed to delivering
          innovative, secure, and reliable technology solutions for businesses
          and homes. With a deep understanding of the evolving digital
          landscape, we provide end-to-end ICT services—from smart security
          integration and cloud computing to managed ICT support and data
          protection compliance
        </p>
        <p class="text-justify mt-5">
          At the core of our business is a passion for helping our clients
          harness the power of technology to improve operations, enhance
          security, and achieve sustainable growth.
        </p>
      </div>
    </div>
    <div
      class="relative z-10 flex flex-col gap-6 space-y-6"
      data-aos="fade-up"
      data-aos-duration="1000"
      data-aos-easing="ease-in-out"
    >
      <div class="hidden grid-cols-1 lg:grid-cols-2 gap-6 my-10 lg:grid">
        <div
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <div class="flex flex-col space-y-3">
            <h1
              class="text-[#172952] col-span-2 font-semibold text-xl lg:text-4xl hidden lg:block mb-10"
            >
              Yencom Services
            </h1>
            <ServiceMenuItem
              :count="1"
              title="DPO as a Service (DPOaaS)"
              @click="active_service = 1"
              :active="active_service == 1"
            />
            <ServiceMenuItem
              :count="2"
              title="Data Protection Compliance Audit"
              @click="active_service = 2"
              :active="active_service == 2"
            />
            <ServiceMenuItem
              :count="3"
              title="ICT-as-a-Service (ICTaaS)"
              @click="active_service = 3"
              :active="active_service == 3"
            />
            <ServiceMenuItem
              :count="4"
              title="Business Process Automation"
              @click="active_service = 4"
              :active="active_service == 4"
            />
            <ServiceMenuItem
              :count="5"
              title="Cybersecurity Awareness Training"
              @click="active_service = 5"
              :active="active_service == 5"
            />
            <ServiceMenuItem
              :count="6"
              title="Smart Security Systems"
              @click="active_service = 6"
              :active="active_service == 6"
            />
            <ServiceMenuItem
              :count="7"
              title="Project Management & ICT Implementation"
              @click="active_service = 7"
              :active="active_service == 7"
            />
          </div>
        </div>

        <div
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceOne
            v-if="active_service == 1"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
          <ServiceTwo
            v-if="active_service == 2"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
          <ServiceThree
            v-if="active_service == 3"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
          <ServiceFour
            v-if="active_service == 4"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
          <ServiceFive
            v-if="active_service == 5"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
          <ServiceSix
            v-if="active_service == 6"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
          <ServiceSeven
            v-if="active_service == 7"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
          />
        </div>
      </div>

      <!-- Mobile -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10 lg:hidden">
        <!-- Service 1 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100 mt-6"
        >
          <ServiceOne />
        </div>
        <!-- Service 2 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceTwo />
        </div>
        <!-- Service 3 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceThree />
        </div>
        <!-- Service 4 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceFour />
        </div>
        <!-- Service 5 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceFive />
        </div>
        <!-- Service 6 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceSix />
        </div>
        <!-- Service 7 -->
        <div
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          class="col-span-1 rounded-lg p-6 lg:p-10 leading-8 flex flex-col gap-2 shadow-sm bg-gray-50 hover:bg-gray-100"
        >
          <ServiceSeven />
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts" setup>
useHead({
  title: "Our Services",
  meta: [{ name: "description", content: "Our Services" }],
});

let active_service = ref(1);
</script>
