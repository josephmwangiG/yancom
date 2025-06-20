import axios from 'axios'

export default defineNuxtPlugin(() => {
  const api = axios.create({
    baseURL: 'https://hrdigitalconsultingltd.com',
    timeout: 10000
  })

  return {
    provide: {
      axios: api
    }
  }
})
