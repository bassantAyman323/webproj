<template>
  <div id="services">
    
    <div>
  <b-card title="Here is all our services that our website supports it now."  id="toggle" class="date" style="border:none">
    <b-card-text class="date" >
      {{ displayDate() }}
       <div class="p-4">
    <b-icon icon="clock-fill"  font-scale="4" ></b-icon>
  </div>
      
    </b-card-text>
 
      <div class="row">
        <div class="col ">
<router-link to="/services/weddinghalls" style="text-decoration:none"  >
    <b-card img-src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.273u4OLW_tUG1hDCzwLE0gHaDt%26pid%3DApi&f=1"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
        title="Wedding halls">
   
      </b-card></router-link></div>
      <div class="col">
<router-link to="/services/weddingplanner" style="text-decoration:none" >
    <b-card img-src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.F_rkDaul_M6UXpT_Z4HK9QHaE8%26pid%3DApi&f=1"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
        title="Wedding planner">
   
      </b-card></router-link></div>
           <div class="col">
      <router-link to="/services/cars" style="text-decoration:none">
    <b-card img-src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.nzAhcWjK5x1NHJpXV4g5BQHaFj%26pid%3DApi&f=1"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
        title="Cars">
   
      </b-card></router-link></div></div>

      <div class="row">
        <div class="col-2"></div>
        <div class="col-5">
      <router-link to="/services/photographers" style="text-decoration:none">
    <b-card img-src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.mxkCrWf9oj7AuRUlaS8DqgHaE8%26pid%3DApi&f=1"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
        title="Photographer">
   
      </b-card></router-link></div>
      <div class="col">
      <router-link to="/services/make-up_artist" style="text-decoration:none" >
    <b-card img-src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.MY2B5xO3mETylo4hyerGWwHaEo%26pid%3DApi&f=1"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
        title="Make-Up Artist">
   
      </b-card></router-link></div></div>
 
    



  </b-card>

     
    </div>
  </div>
</template>
<script>
export default {
  name: "Services",
  components: {},
  methods: {
    displayDate: function() {
      var today = new Date();
      var H =
        "Day:" +
        today.toLocaleDateString() +
        "\n" +
        "time:" +
        today.toLocaleTimeString();

      //for doing anytime in specific time in ms

      setTimeout(() => {
        this.displayDate();
      }, 1000);

      return H;
    },
  },
};
</script>
<style scoped lang="scss">
#toggle {
  font-size: x-large;
  font-weight: bold;
  color: gold;
  size: 60px;
  text-align: center;
}
// .w-h,
// .wh {
 
 
//   width: 200px;
//   height: 200px;
//   text-align: center;
//   padding-top: 80px;
//   font-size: x-large;
//   display: inline-block;
//   margin: 5px;
//   position: relative;
//   left: 25%;
//   a {
//   text-underline-offset: none;
//     text-decoration: none;
//   }
// }
// .wh {
//   left: 33%;
// }
// .w-h:hover,
// .wh:hover {
//   background-color: gold;
//   a {
//     color: black;
//   }
// }
.date{
  color:gray;
}
.mb-2{
  width:270px ;
  height:200px ;
  margin: 2px;
  padding: 1px;
  border: none;
 
}
.link{
  text-underline-offset: none;
}

</style>
