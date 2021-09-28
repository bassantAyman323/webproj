<template>
  <div>
    <div id="orders-form">
      <h2 id="h2st">BUSINESS OWNER ORDERS</h2>
      <br /><br />
      <div class="container">
        <h1 id="neww">New orders</h1>
        <input type="checkbox" checked />
        <div id="imgbox1">
          <div>
            <ul>
              <li v-for="index2 in list" :key="index2">
                <div id="imgbox2">
                  <input type="checkbox">
                  <label
                    >New order1
                    <div id="drr" class="dropdown">
                      <button class="dropbtn">More info</button>
                      <div class="dropdown-content">
                        <a href="#"
                          >information about the order<br>
                          1-date of party:<br>2-type of party:<br />3-need to
                          a planner and a photographer <br><a href="" id="see"
                            >See more..</a> 
                          </a>

                        <button id="ddecline" @click="deleteFromLisst(index)">
                          Declined
                        </button>
                        <button id="aaccept" @click="message = !message">
                          {{ message ? "Hide Message" : "Accepted" }}
                        </button>
                        <div class="themessage" id="message" v-if="message">
                          your acception is sent to the client
                        </div>
                      </div>
                    </div></label>
                </div>
              </li>
            </ul>
          </div>

          <div class="items">
            <input id="item1" type="checkbox" checked >
            <label for="item1"
              >Order1
              <div id="droo" class="dropdown">
                <button class="dropbtn">More info</button>
                <div class="dropdown-content">
                  <a href="#"
                    >information about the order<br />
                    1-date of party:<br />2-type of party:<br />3-need to a
                    planner and a photographer <br /><a href="" id="see"
                      >See more..</a
                    ></a
                  >
                </div>
              </div>
            </label>

            <input id="item2" type="checkbox" />
            <label for="item2"
              >Order2
              <div id="droo" class="dropdown">
                <button class="dropbtn">More info</button>
                <div class="dropdown-content">
                  <a href="#"
                    >information about the order<br />
                    1-date of party:<br />2-type of party:<br />3-need to a
                    planner and a photographer <br /><a href="" id="see"
                      >See more..</a
                    ></a
                  >
                </div>
              </div>
            </label>

            <input id="item3" type="checkbox" />
            <label for="item3"
              >Order3
              <div id="droo" class="dropdown">
                <button class="dropbtn">More info</button>
                <div class="dropdown-content">
                  <a href="#"
                    >information about the order<br />
                    1-date of party:<br />2-type of party:<br />3-need to a
                    planner and a photographer <br /><a href="" id="see"
                      >See more..</a
                    ></a
                  >
                </div>
              </div>
            </label>

            <input id="item4" type="checkbox" />
            <label for="item4"
              >Order4
              <div id="droo" class="dropdown">
                <button class="dropbtn">More info</button>
                <div class="dropdown-content">
                  <a href="#"
                    >information about the order<br />
                    1-date of party:<br />2-type of party:<br />3-need to a
                    planner and a photographer <br /><a href="" id="see"
                      >See more..</a
                    ></a
                  >
                </div>
              </div></label
            >

            <input id="item5" type="checkbox" />
            <label for="item5">Order5
              <div id="droo" class="dropdown">
                <button class="dropbtn">More info</button>
                <div class="dropdown-content">
                  <a href="#"
                    >information about the order<br />
                    1-date of party:<br />2-type of party:<br />3-need to a
                    planner and a photographer <br /><a href="" id="see"
                      >See more..</a
                    ></a
                  >
                </div>
              </div></label>

            <input id="item6" type="checkbox" />
            <label for="item6"
              >Order6
              <div id="droo" class="dropdown">
                <button class="dropbtn">More info</button>
                <div class="dropdown-content">
                  <a href="#"
                    >information about the order<br />
                    1-date of party:<br />2-type of party:<br />3-need to a
                    planner and a photographer <br /><a href="" id="see"
                      >See more..</a
                    ></a
                  >
                </div>
              </div></label
            >

            <h2 class="undone" aria-hidden="true">Not Done</h2>
            <h2 class="done" aria-hidden="true">Done</h2>
          </div>
        </div>

        <br /><br /><br />
      </div>
      <!-- <router-view /> -->
    </div>
  </div>
</template>
<script>
export default {
  name: "Orders",
  data() {
    return {
      message: false,
      list: ["New order2"],
    };
  },
  methods: {
    deleteFromLisst(index2) {
      this.list.splice(index2, 1);
    },
  },
};
</script>
<style scoped lang="scss">
#orders-form{
    border: 1px black solid;
  margin: 1px;
  padding: 1px;
}
#drr {
  right: -150px;
}

#h2st {
  color: #6d3572;
  background-color: white;
  text-align: center;
  font-size: 25px;
}
#message {
  color: #6d3572;
}
#see {
  color: #6d3572;
  text-align: left;
}
.dropbtn {
  background-color: white;
  color: #6d3572;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}
#droo {
  left: 200px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: white;
}

#HappyMo {
  text-align: center;
  color: white;
  background-color: #6d3572;
}
#neww {
  text-align: left;
}
#accept {
  background-color: green;
  border: none;
  /* color: white; */
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

#decline {
  background-color: #ff1a1a;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#aaccept {
  background-color: green;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#ddecline {
  background-color: #ff1a1a;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  min-height: 100%;
  font-style: normal;
}


.container {
  max-width: 450px;
  margin: 0 auto;
  background-color: #6d3572;
  color: #fff;
  font-style: normal;
  user-select: none;
}

h1 {
  margin: 0;
  padding: 20px;
  background-color: #6d3572;
  font-size: 1.8em;
  text-align: center;
}

.items {
  display: flex;
  flex-direction: column;
  padding: 20px;
  counter-reset: newundone-items undone-items done-items;
}

h2 {
  position: relative;
  margin: 0;
  padding: 10px 0;
  font-size: 1.2em;
}

h2::before {
  content: "";
  display: block;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: -20px;
  width: 5px;
  background-color: #6d3572;
}

h2::after {
  display: block;
  float: right;
  font-weight: normal;
}

.undone {
  order: 3;
}

.undone::after {
  content: " (" counter(undone-items) ")";
}
.done {
  order: 1;
}

.done::after {
  content: " (" counter(done-items) ")";
}


input {
  display: block;
  height: 53px;
  margin: 0 0 -53px -9999px;
  order: 4;
  outline: none;
  counter-increment: undone-items;
}

input:checked {
  order: 2;
  counter-increment: done-items;
}

label {
  display: block;
  position: relative;
  padding: 15px 0 15px 45px;
  border-top: 1px dashed #fff;
  order: 4;
  cursor: pointer;
  animation: undone 0.5s;
}

label::before {
  content: "\f10c"; /* circle outline */
  display: block;
  position: absolute;
  top: 11px;
  left: 10px;
  font: 1.5em "FontAwesome";
}

label:hover,
input:focus + label {
  background-color: rgba(255, 255, 255, 0.2);
}

input:checked + label {
  order: 2;
  animation: done 0.5s;
}

input:checked + label::before {
  content: "\f058"; /* circle checkmark */
}

@keyframes undone {
  0% {
    opacity: 0;
    background-color: red;
    transform: translateY(-20px);
  }
  50% {
    opacity: 1;
    background-color: red;
  }
}
@keyframes done {
  0% {
    opacity: 0;
    background-color: green;
    transform: translateY(20px);
  }
  50% {
    opacity: 1;
    background-color: green;
  }
}
</style>
