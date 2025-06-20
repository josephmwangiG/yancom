<script setup lang="ts">
import { object, string, type InferType } from "yup";
import type { FormSubmitEvent } from "@nuxt/ui";
const { $axios } = useNuxtApp();
let loading = ref(false);

const schema = object({
  email: string().email("Invalid email").required("Required"),
  name: string().required("Required"),
  phone: string().required("Required"),
  message: string().required("Required"),
});

type Schema = InferType<typeof schema>;

const state = reactive({
  email: undefined,
  name: undefined,
  phone: undefined,
  message: undefined,
});

const toast = useToast();
async function onSubmit(event: FormSubmitEvent<Schema>) {
  loading.value = true;
  const res = await $axios.post("/mailer/mailer.php1", state);
  loading.value = false;

  if (res.status == 200 || res.status == 201) {
    toast.add({
      title: "Success",
      description:
        "Message submitted. Our representative will get back to you soon.",
      color: "success",
      duration: 5000,
    });

    state.name = undefined;
    state.email = undefined;
    state.phone = undefined;
    state.message = undefined;
  } else {
    toast.add({
      title: "Error",
      description: "The form could not be submitted. Try again later",
      color: "error",
      duration: 5000,
    });
  }
}

useHead({
  title: "Contact us",
  meta: [{ name: "description", content: "Contact us" }],
});
</script>

<template>
  <main class="">
    <Banner title="Talk to Us" />
    <section class="bg-neutral-100 py-10 px-3">
      <div class="mx-auto max-w-[1280px]">
        <!--Kenya office-->
        <div class="hidden">
          <h1 class="text-3xl font-bold text-primary-500 my-3">Our Office</h1>
          <div class="grid md:grid-cols-3 gap-8">
            <div data-aos="fade-up">
              <h5 class="text-xl text-primary-500 font-bold my-2">
                Get In Touch
              </h5>
              <div class="space-y-3">
                <div>
                  <h6 class="font-bold">Call Us</h6>
                  <p>
                    <a href="tel:+ 254 713 190763" class="underline"
                      >+254 758 723112</a
                    >
                  </p>
                  <p>
                    <a href="tel:+ 254 713 190763" class="underline"
                      >++254 722 956148</a
                    >
                  </p>
                </div>
                <div>
                  <h6 class="font-bold">Opening Hours</h6>
                  <p><span class="font-bold">Mon-Fri: </span> 9am-5pm</p>
                  <p>
                    <span class="font-bold"
                      >Saturday/ Sunday/ Public Holidays:
                    </span>
                    CLOSED
                  </p>
                </div>
              </div>
            </div>

            <div data-aos="fade-up">
              <h5 class="text-xl text-primary-500 font-bold my-2">
                Address and Mail
              </h5>
              <div class="space-y-3">
                <div class="hidden">
                  <h6 class="font-bold">Address</h6>
                  <p>
                    Madonna House Annex
                    <br />
                    Off Westlands Road, Mpaka Rd, Nairobi, Kenya
                  </p>
                </div>
                <div>
                  <h6 class="font-bold">Email</h6>
                  <p>
                    <a
                      href="mailto:info@hrdigitalconsultingltd.com"
                      class="underline"
                      >info@hrdigitalconsultingltd.com</a
                    >
                  </p>
                </div>
              </div>
            </div>

            <!-- <div data-aos="fade-up hidden">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.299234124604!2d36.803150409513904!3d-1.2786644768970192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173fc261c85d%3A0xc5db81b7b61f20ae!2sMadonna%20House%20Annex!5e0!3m2!1sen!2ske!4v1744307513656!5m2!1sen!2ske"
                width="100%"
                height="350"
                style="border: 0"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="flex justify-center">
        <div
          data-aos="fade-up"
          class="p-8 bg-[url(@/assets/images/img3.webp)] w-full md:w-1/2"
        >
          <div class="bg-white p-5 rounded-md">
            <UForm :schema="schema" :state="state" @submit="onSubmit">
              <h2 class="text-2xl font-bold my-5 mb-10">
                Send us a message
              </h2>
              <div class="space-y-5">
                <div>
                  <UFormField label="Name" name="name" required>
                    <UInput
                      placeholder="Enter your name"
                      size="xl"
                      :ui="{ root: 'w-full' }"
                      v-model="state.name"
                    />
                  </UFormField>
                </div>

                <div>
                  <UFormField label="Email" name="email" required>
                    <UInput
                      placeholder="Enter your email"
                      type="email"
                      size="xl"
                      :ui="{ root: 'w-full' }"
                      v-model="state.email"
                    />
                  </UFormField>
                </div>

                <div>
                  <UFormField label="Phone" name="phone" required>
                    <UInput
                      placeholder="Enter your phone"
                      size="xl"
                      :ui="{ root: 'w-full' }"
                      v-model="state.phone"
                    />
                  </UFormField>
                </div>

                <div>
                  <UFormField label="Message" name="message" required>
                    <UTextarea
                      :rows="5"
                      placeholder="Enter your message"
                      :ui="{ root: 'w-full' }"
                      v-model="state.message"
                    />
                  </UFormField>
                </div>

                <div>
                  <UButton
                    :label="loading ? 'Submitting' : 'Submit'"
                    size="xl"
                    type="submit"
                    class="px-10 bg-[#4db972]"
                  />
                </div>
              </div>
            </UForm>
            <p class="text-xs text-gray-500 my-10">
              Privacy Notice: We value your privacy. All the information you
              provide through this form will be handled with utmost
              confidentiality and in compliance with data protection laws. We do
              not share your information with third parties without your
              consent.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>

<style scoped></style>
