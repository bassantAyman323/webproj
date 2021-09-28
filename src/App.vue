<template>
  <div id="app">
    <AppHeader />
    <router-view />
    <AppFooter />
  </div>
</template>

<script>
import AppHeader from "@/components/Global/navbar.vue";
import AppFooter from "@/components/Global/footer.vue";
export default {
  components: {
    AppHeader,
    AppFooter,
  },
};
</script>

<style lang="scss"></style>
