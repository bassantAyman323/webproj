<template>
  <div id="demo1">

      <b-card
        img-src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.F_rkDaul_M6UXpT_Z4HK9QHaE8%26pid%3DApi&f=1"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
      >
        <b-card-text id="demo1">
          <router-link to="/profile2" id="demo2">profile</router-link>
          <router-view></router-view
        ></b-card-text>
        <b-card-text id="demo1">
          {{ post.message }}
        </b-card-text>

        <b-card-text id="demo1">
          {{ "Price:" + post.price }}
        </b-card-text>
        <b-card-text id="demo1">
          <count></count>
        </b-card-text>

        <router-link to="/services/request"
          ><a class="button" variant="primary">Request</a></router-link
        >
      </b-card>
    </div>
 
</template>
<script>
import count from "@/components/Local/count.vue";

export default {
  props: ["post"],
  components: {
    count,
  },
};
</script>
<style scoped>
#demo1 {
  color: #6d3572;
 margin: 5px;
  padding: 5px;
}
.card button:hover {
  opacity: 0.7;
}
.button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #6d3572;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
#heart {
  color: red;
}
#count {
  color: black;
}
#demo2 {
  font-size: xx-large;
  color: #6d3572;
  text-decoration: none;
}
</style>
