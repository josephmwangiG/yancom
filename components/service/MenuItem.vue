<template lang="">
  <div
    class="flex rounded items-center gap-4 min-h-14 justify-between hover:text-white px-3 hover:font-semibold hover:bg-[#4db972] cursor-pointer"
    :class="active ? 'text-white rounded font-semibold bg-[#4db972]' : ''"
  >
    <p class="text-base font-normal leading-normal flex-1 truncate">
      <span class="font-bold text-xl pr-3">{{ count }}.</span> {{ title }}
    </p>
    <div class="shrink-0">
      <div
        class="flex size-7 items-center justify-center"
        data-icon="CaretRight"
        data-size="24px"
        data-weight="regular"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24px"
          height="24px"
          fill="currentColor"
          viewBox="0 0 256 256"
        >
          <path
            d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"
          ></path>
        </svg>
      </div>
    </div>
  </div>
</template>
<script setup lang="ts">
const props = defineProps({
  title: {
    type: String,
    required: true,
  },
  count: {
    type: Number,
    required: true,
  },
  active: {
    type: Boolean,
    required: true,
  },
});
</script>
