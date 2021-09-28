<template>
  <div class="cars">
    <!-- <h1>{{ msg }}</h1> -->

    <h4 class="date" style="padding:5px">Here is all the Cars<b-icon icon="minecart"></b-icon></h4>

    <div id="example">
      <form id="btns " name="myservices">
        <div class="myform ">
          <input
            class="form-control  "
            id="search"
            v-model="search"
            type="search"
            placeholder="Search"
          />
        </div>
        <h3 class="text-center my-10" v-if="search">
          Search results for "{{ search }}"
        </h3>

        <div class="places">
          <div class="row" name="first row">
            <div id="demo1" v-for="car in filteredcars" v-bind:key="car.id">
              <post3 :post="car"></post3>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import post3 from "@/components/Local/post3.vue";
export default {
  components: {
    post3,
  },
  data() {
    return {
      search: "",
      cars: [
        {
          message: "Kia",
  
          price: "$19",
          id: 1,
        },
        {
          message: "frari",
 
          price: "$20",
          id: 2,
        },
        {
          message: "Gelly",
   
          price: "$300",
          id: 3,
        },
        {
          message: "Ford",

          price: "$200",
          id: 4,
        },
        {
          message: "OPel",
      
          price: "$300",
          id: 5,
        },
       
      ],
    };
  },
  computed: {
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

  name: "cars",
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

  text-align: center;
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
#search {
  align-content: center;
}
.date {
  text-align: center;
  color: rgb(136, 127, 127);
}
</style>
