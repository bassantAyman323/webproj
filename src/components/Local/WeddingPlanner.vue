<template>
  <div class="Weddingplanners">


    <h4 class="date" style="padding:5px">Here is all the Wedding planers</h4>

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
            <div
              id="demo1"
              v-for="Weddingplanner in filteredWeddingplanners"
              v-bind:key="Weddingplanner.id"
            >
              <post2 :post="Weddingplanner"></post2>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import post2 from "@/components/Local/post2.vue";
export default {
  components: {
    post2,
  },
  data() {
    return {
      search: "",
      Weddingplanners: [
        {
          message: "Loa",
          price: "$19",
          id: 1,
        },
        {
          message: "Ali",
          price: "$20",
          id: 2,
        },
        {
          message: "Fatma",
          price: "$300",
          id: 3,
        },
        {
          message: "Lila",
      price: "$200",
          id: 4,
        },
        {
          message: "Doha",
 

          price: "$300",
          id: 5,
        },
 
      ],
    };
  },
  computed: {
    filteredWeddingplanners() {
      let Weddingplanners = this.Weddingplanners;
      let query = this.search;

      if (query) {
        Weddingplanners = Weddingplanners.filter(function(row) {
          return Object.keys(row).some(function(key) {
            return (
              String(row[key])
                .toLowerCase()
                .indexOf(query) > -1
            );
          });
        });
      }

      return Weddingplanners;
    },
  },

  name: "Wedding planner",
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
  font-size: xx-large;
  color: rgb(136, 127, 127);
}
</style>
