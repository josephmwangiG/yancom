<script setup lang="ts">
import type { ItemType } from "~/types/carousel";
import type { PropType } from "vue";

const props = defineProps({
  carousel_items: {
    type: Array as PropType<ItemType[]>, // ✅ correct use of type + TS
    required: true,
  },
});
const currentIndex = ref(0);

const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % props.carousel_items.length;
};

const prevSlide = () => {
  currentIndex.value =
    (currentIndex.value - 1 + props.carousel_items.length) %
    props.carousel_items.length;
};

// Auto-slide functionality
const slideInterval = ref();
const startAutoSlide = () => {
  slideInterval.value = setInterval(nextSlide, 10000);
};

const stopAutoSlide = () => {
  clearInterval(slideInterval.value);
};

onMounted(startAutoSlide);
onUnmounted(stopAutoSlide);
</script>

<template>
  <div class="relative w-full overflow-hidden h-[55vh]">
    <div class="w-full h-full">
      <div
        v-for="(item, index) in carousel_items"
        class="absolute inset-0 transition-opacity duration-900 ease-in-out"
        :class="{
          'opacity-100 visible': index === currentIndex,
          'opacity-0 invisible': index !== currentIndex,
        }"
      >
        <div class="relative h-full overflow-hidden">
          <img
            :src="item.image"
            :alt="item.title"
            class="h-full w-full object-cover"
          />
          <div
            class="absolute w-full h-full text-center top-0 bg-black/70 p-3 md:p-5"
          >
            <h6 class="text-white text-2xl lg:text-6xl font-bold mt-16 max-w-[600px] mx-auto">
              Empowering People,
            </h6>
            <h6 class="text-gray-300 text-xl lg:text-4xl font-bold max-w-[600px] mx-auto mt-1 md:mt-3">
              Elevating Technology
            </h6>
            <h6 class="text-gray-300 text-md lg:text-4xl font-bold max-w-[600px] mx-auto">
               &
            </h6>
            <h6 class="text-gray-300 text-xl lg:text-2xl font-bold mb-10 max-w-[600px] mx-auto">
              Sustaining Growth
            </h6>
            <h6 class="text-yellow-500 text-md lg:text-2xl font-bold my-3">
              {{ item.title }}
            </h6>
            <UButton
              label="Read More"
              :to="item.to"
              class="rounded-none px-10 py-3 bg-white text-neutral-800 hover:bg-yellow-500 hover:text-white"
            />
          </div>
          <div
            class="absolute bottom-10 left-1/2 -translate-x-1/2 flex space-x-2"
            v-if="carousel_items.length > 1"
          >
            <button
              v-for="(image, index) in carousel_items"
              :key="index"
              class="w-4 h-4 rounded-full cursor-pointer"
              @click="currentIndex = index"
              :class="index === currentIndex ? 'bg-white' : 'bg-gray-400'"
            ></button>
          </div>
          <button
            @click="prevSlide()"
            class="absolute cursor-pointer left-3 md:left-80 bottom-5 w-14 h-14 rounded-full bg-gray-800/30 text-white p-2 flex place-content-center item-center z-20"
            v-if="carousel_items.length > 1"
          >
            <UIcon
              name="ri:arrow-left-s-line"
              class="text-lg text-white self-center"
            />
          </button>
          <button
            @click="nextSlide"
            class="absolute cursor-pointer right-3 bottom-5 w-14 h-14 rounded-full bg-gray-800/30 text-white p-2 flex place-content-center item-center z-20"
            v-if="carousel_items.length > 1"
          >
            <UIcon
              name="ri:arrow-right-s-line"
              class="text-lg text-white self-center"
            />
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
