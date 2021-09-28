<template>
  <div id="app">
    <div class="container">
      <h2>OCCASION HISTORY</h2>
      <div class="row">
        <div class="col-md-2">
          <a href="#">
            <b-img
              src="https://i.pinimg.com/564x/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg"
              class="rounded-circle"
              width="100"
              height="100"
            ></b-img>
          </a>
        </div>
        <div class="col-md-8">
          <h4>Name: {{post2.Name}}</h4>
        </div>
        <div class="col-md-2">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
        <div class="col-md-8">
          <h4>Where: {{post2.where}}</h4>
          <h4>When: {{post2.when}}</h4>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="col-md-2">
          <a href="#">
            <b-img
              src="https://i.pinimg.com/564x/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg"
              class="rounded-circle"
              width="100"
              height="100"
            ></b-img>
          </a>
        </div>
        <div class="col-md-8">
          <h4>Name: {{post.Name}}</h4>
        </div>
        <div class="col-md-2">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
        <div class="col-md-8">
          <h4>Where: {{post.where}}</h4>
          <h4>When: {{post.when}}</h4>
        </div>
      </div>
      <div>
        <h2>RECENT OCCASION</h2>
        <div class="row">
          <div class="col-md-2">
            <a href="#">
              <b-img
                src="https://i.pinimg.com/564x/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg"
                class="rounded-circle"
                width="100"
                height="100"
              ></b-img>
            </a>
          </div>
          <div class="col-md-8">
            <h4>Name: {{post3.Name}}</h4>
          </div>
          <div class="col-md-2">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="col-md-8">
            <H4>Where: {{post3.where}}</H4>
            <H4>When: {{post3.when}}</H4>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-2">
            <a href="#">
              <b-img
                src="https://i.pinimg.com/564x/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg"
                class="rounded-circle"
                width="100"
                height="100"
              ></b-img>
            </a>
          </div>
          <div class="col-md-8">
            <h4>Name: {{post4.Name}}</h4>
          </div>
          <div class="col-md-2">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="col-md-8">
            <h4>Where: {{post4.where}}</h4>
            <h4>When: {{post4.when}}</h4>
          </div>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from '@vue/composition-api'
export default defineComponent({
  setup() {
    
  },

  data() {
    return {
      search: "",
      post: 
        {
          Name: "Loa",
          when: "23/4/2020",
          where: "Alex",
        },
        post2:
           {
             Name: "Ali",
             when: "5/5/2020",
             where: "Alex",
        },
       post3: 
        {
          Type:"Royal",
          Name: "safir",
          when: "5/5/2021",
          where: "Alex",
        },
        post4:
        {
          Name: "Ahmed",
          when: "12/4/2021",
          where: "Alex",
        },
 
    }
   
  },
})
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
img {
  vertical-align: middle;
  float: left;
}
.title {
  background-color: #6d3572;
  color: white;
  right: 0;
}

.row {
  margin-top: 100px;
}
h2 {
  background-color: #6d3572;
  color: white;
  right: 0;
}
h4 {
  color: #6d3572;
}
h5 {
  color: #6d3572;
}
footer img {
  width: 200px;
  height: 150px;
}

#footer {
  background: #6d3572;
  /*height: 200px;*/
}

#footer a {
  color: white;
  text-decoration: none;
}

p {
  color: white;
}

#copyright {
  font-size: 15px;
}

#BottomLogo {
  color: white;
}
.checked {
  color: #6d3572;
}
body .carousel-control-prev-icon,
body .carousel-control-next-icon {
  background-color: #6d3572;
}
body .no-padding {
  padding-left: 0;
  padding-right: 0;
}
div.stars {
  width: 300px;
  display: inline-block;
}
</style>
