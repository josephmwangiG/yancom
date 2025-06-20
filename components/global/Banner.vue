<template lang="">
  <div class="relative h-[20vh] min-h-[200px] lg:min-h-[300px] flex overflow-y-clip">
    <!-- Overlays and Backgrounds -->
    <div class="absolute top-0 h-[20vh] min-h-[200px] lg:min-h-[300px] full-viewport-width z-0">
      <img
        src="@/assets/images/yencom-bg.webp"
        alt="yencom background"
        class="object-cover z-0 h-full w-full"
      />
    </div>
    <div
      class="absolute top-20 h-[20vh] min-h-[200px] lg:min-h-[300px] full-viewport-width opacity-20 z-0"
    >
      <img
        src="@/assets/images/bg-halftone.webp"
        alt="yencom background"
        class="object-cover h-full w-full object-top"
      />
    </div>
    <div
      class="absolute top-0 h-full min-h-[200px] lg:min-h-[300px] full-viewport-width opacity-[0.84] bg-[#0e2116]"
    ></div>
    <div
      class="relative z-10 h-[calc(20vh-100px)] min-h-[200px] lg:min-h-[300px] mt-20 lg:mt-28 mx-auto w-fit max-w-3xl text-center"
    >
      <h2
        class="text-white text-xl lg:text-5xl font-medium text-center leading-10"
      >
        {{ title }}
      </h2>

    </div>
  </div>
</template>
<script lang="ts" setup>
const props = defineProps({
  title: {
    type: String,
    required: true,
  },
});
</script>
