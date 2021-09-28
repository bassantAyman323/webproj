<template>
  <div class="weddingHalls">
    <h4 class="date" style="padding:5px">Here is all the wedding halls</h4>

    <div id="example">
      <form id="btns " name="myservices" class="form justify-content-center">
        <div class="myform ">
          <input
            class="form-control  form justify-content-center"
            id="search"
            v-model="search"
            type="search"
            placeholder="Search"
          />
        </div>
        <h3 class="text-center my-10" v-if="search">
          Search results for "{{ search }}"
        </h3>

        <div >
          <div class="row" name="first row">
            <div
              id="demo1"
              v-for="post in filteredProducts"
              v-bind:key="post.id"
            >
              <post :post="post"></post>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import post from "@/components/Local/post.vue";
export default {
  el: ".weddingHalls",

  name: "WeddingHalls",

  components: {
    post,
  },
  data() {
    return {
      display: "none",

      timestamp: "",
      search: "",
      posts: [
        {
          message: "loaloa",
          Location: "Alex",
          Capacity: "100",
          price: "$1900",
          id: 1,
        },
        {
          message: "Royal",
          Location: "Alex",
          Capacity: "150",
          price: "$20000",
          id: 2,
        },
        {
          message: "safir",
          Location: "Alex",
          Capacity: "80",
          price: "$2000",
          id: 3,
        },
        {
          message: "saraya",
          Location: "Alex",
          Capacity: "100",
          price: "$2000",
          id: 4,
        },
        {
          message: "moments",
          Location: "Alex",
          Capacity: "300",
          price: "$3000",
          id: 5,
        },
       
      ],

    };
  },
  computed: {
    filteredProducts() {
      let posts = this.posts;
      let query = this.search;

      if (query) {
        posts = posts.filter(function(row) {
          return Object.keys(row).some(function(key) {
            return (
              String(row[key])
                .toLowerCase()
                .indexOf(query) > -1
            );
          });
        });
      }

      return posts;
    },
    filteredcars() {
      let cars = this.cars;
      let query = this.search;

      if (query) {
        cars = cars.filter(function(row) {
          return Object.keys(row).some(function(key) {
            return (
              String(row[key])
                .toLowerCase()
                .indexOf(query) > -1
            );
          });
        });
      }

      return cars;
    },
  },
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

  props: {
    msg: String,
  },
};
</script>
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;
  margin: 10px;
  text-align: center;
  font-family: arial;
  padding: 10px;
}

.price {
  color: grey;
  font-size: 22px;
}
.Location {
  color: grey;
  font-size: 22px;
}
.Capacity {
  color: grey;
  font-size: 22px;
}

.card button {
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

.card button:hover {
  opacity: 0.7;
}
.container {
  color: rgb(136, 127, 127);
}
#name {
  color: #6d3572;
}
.row {
  padding: 10px;
}
#demo1 {
  color: #6d3572;
}
img:hover {
  filter: blur(4px);
}
.myform {
  max-width: 100%;
  font-family: arial;
  padding: 10px;
  margin-left: 50%;
}
.demo1 {
  color: red;
}

a {
  color: #00000030;
  font-size: 1.5em;
}
.date {
  text-align: center;
  font-size: xx-large;
  color: rgb(136, 127, 127);
}
#lst1 {
  display: none;
}
</style>
