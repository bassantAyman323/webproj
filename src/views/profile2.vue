<template>
  <div class="profile">
    <div class="container">
      <div class="Data">
        <div class="container">
      <h2>Wedding planner's Portoflio</h2>
      <div>
        <b-carousel
          id="carousel-1"
          v-model="slide"
          :interval="4000"
          controls
          indicators
          background="#ababab"
          img-width="1024"
          img-height="480"
          style="text-shadow: 1px 1px 2px #333;"
          @sliding-start="onSlideStart"
          @sliding-end="onSlideEnd"
        >
          <!-- Text slides with image -->
          <b-carousel-slide
            caption="Work"
            img-src="https://www.bestweddinggallery.com/wp-content/uploads/2019/10/wedding-photographer.jpg"
          ></b-carousel-slide>

          <!-- Slides with custom text -->
          <b-carousel-slide
            caption="Work"
            img-src="https://www.bestweddinggallery.com/wp-content/uploads/2019/10/wedding-photographer.jpg"
          >
          </b-carousel-slide>

          <!-- Slides with image only -->
          <b-carousel-slide
            caption="Work"
            img-src="https://www.bestweddinggallery.com/wp-content/uploads/2019/10/wedding-photographer.jpg"
          ></b-carousel-slide>

          <!-- Slides with img slot -->
          <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
          <b-carousel-slide>
            <template #img>
              <img
                class="d-block img-fluid w-100"
                width="1024"
                height="480"
                caption="Work"
                src="https://www.bestweddinggallery.com/wp-content/uploads/2019/10/wedding-photographer.jpg"
                alt="image slot"
              />
            </template>
          </b-carousel-slide>
        </b-carousel>
      </div>
    </div>
    <br>
        <h2>{{post.Type}}</h2>
        <div class="row">
          <div class="col-md-4">
            <b-img
              alt="Pic"
              class="img-fluid rounded-circle mb-3 mb-md-0"
              src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
              width="200"
              height="200"
            ></b-img>
          </div>
          <div class="col-md-7">
            <h4>Name: {{post.Name}}</h4>
            <h4>Phone: {{post.Phone}}</h4>
            <h4>E-mail: {{post.Email}}</h4>
            <router-link to="/activities" id="demo2">Activities</router-link>
            <router-view></router-view><br>
            <router-link to="/Orders" id="demo2">orders</router-link>
            <router-view></router-view>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <b-img
              alt="Pic"
              class="img-fluid rounded-circle mb-3 mb-md-0"
              src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
              width="200"
              height="200"
            ></b-img>
          </div>
          <div class="col-md-7">
            <h4>Name: {{post2.Name}}</h4>
            <h4>Phone: {{post2.Phone}}</h4>
            <h4>E-mail: {{post2.Email}}</h4>
            <router-link to="/activities" id="demo2">Activities</router-link>
            <router-view></router-view><br>
            <router-link to="/Orders" id="demo2">orders</router-link>
            <router-view></router-view>
          </div>
        </div>
      <div class="row">
          <div class="col-md-4">
            <b-img
              alt="Pic"
              class="img-fluid rounded-circle mb-3 mb-md-0"
              src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
              width="200"
              height="200"
            ></b-img>
          </div>
          <div class="col-md-7">
            <h4>Name: {{post3.Name}}</h4>
            <h4>Phone: {{post3.Phone}}</h4>
            <h4>E-mail: {{post3.Email}}</h4>
            <router-link to="/activities" id="demo2">Activities</router-link>
            <router-view></router-view><br>
            <router-link to="/Orders" id="demo2">orders</router-link>
            <router-view></router-view>
          </div>
        </div>
       <div class="row">
          <div class="col-md-4">
            <b-img
              alt="Pic"
              class="img-fluid rounded-circle mb-3 mb-md-0"
              src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
              width="200"
              height="200"
            ></b-img>
          </div>
          <div class="col-md-7">
            <h4>Name: {{post4.Name}}</h4>
            <h4>Phone: {{post4.Phone}}</h4>
            <h4>E-mail: {{post4.Email}}</h4>
            <router-link to="/activities" id="demo2">Activities</router-link>
            <router-view></router-view><br>
            <router-link to="/Orders" id="demo2">orders</router-link>
            <router-view></router-view>
          </div>
         </div> 
          <hr>
          <div class="row">
            <div class="col-md-4">
             <form action="http://localhost/final-project/src/Api/profile.php" method="post">  
             <label>Comment:</label>
              <div class="col-md-7">
               <textarea name="comment" v-model="admin.comment"></textarea>
             </div>
             <input type="submit" @click="comment()" value="send">
             </form> 
            </div>
          </div>   
    </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from '@vue/composition-api'
import axios from "axios";
export default defineComponent({
  setup() {
    
  },

  data() {
    return {
      search: "",
      admin:{comment:""},
      post: 
        {
          Type:"wedding planner",
          Name: "loa",
          Phone: "01223456745",
          Email: "loa@gmail.com",
        },
        post2:
           {
             Type:"wedding planner",
             Name: "Ali",
             Phone: "01227896745",
             Email: "Ali@gmail.com",
        },
       post3: 
        {
          Type:"wedding planner",
          Name: "fatma",
          Phone: "01098754745",
          Email: "fatma@gmail.com",
        },
        post4:
        {
          Type:"wedding planner",
          Name: "lila",
          Phone: "01111457209",
          Email: "lila@gmail.com",
        },
        post4:
        {
          Type:"wedding planner",
          Name: "Doha",
          Phone: "01111457209",
          Email: "Doha@gmail.com",
        },
 
    }
   
  },
  methods:{
    comment(){
      var data=new FormData();
      data.append('comment',this.admin.comment);
      axios.post("http://localhost/final-project/src/Api/api.php?action=comment",data).then((res)=>{
        if(res.data.error){
          alert("error")
        }else{
          alert(res.data.message);
        }
  
      })
      
      .catch((err)=>{
        console.log("Error",err);
      });
    }
  }
})
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
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
h2 {
  background-color: #6d3572;
  color: white;
  right: 0;
}
h4 {
  color: #6d3572;
  margin-right: 300;
}
h5 {
  color: #6d3572;
}
#demo2 {
  font-size: xx-large;
  color: #6d3572;
  text-decoration: none;
}
</style>
