// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },
  modules: ["@nuxt/ui", "@nuxt/icon", "nuxt-aos"],
  colorMode: {
    preference: "light",
  },
  css: ["~/assets/css/main.css"],
});
