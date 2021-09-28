<template>
  <div>
    <section id="stats">
      <!--Statistics section-->
      <div id="container">
        <!--content menu section-->
        <div id="sideMenu">
          <br />
          <div id="sidecontent">
            <ul class="menu">
              <li>Main</li>
              <li>Dashboard</li>
              <li>Data Table</li>
            </ul>
            <ul class="menu">
              <li>Reviews</li>
            </ul>
            <ul class="menu">
              <li>Feedback</li>
            </ul>
          </div>
        </div>
        <!--actual content section-->
        <div id="content">
          <div class="row">
            <div class="col" id="titleBar">
              <h2 id="dash">Dashboard</h2>
            </div>
            <!--navbar section-->
            <div class="col">
              <nav class="navbar nav-justified justify-content-end">
                <div class="navbar-nav flex-row">
                  <div class="col">
                    <router-link to="/home">Home</router-link>
                  </div>
                  <div class="col">
                    <router-link to="/about">About</router-link>
                  </div>
                </div>
                <!--profile view-->
                <div id="profilePic">
                  <a href="" target="_blank"><img src="" /></a>
                </div>
                <div class="options">
                  <a href="" target="_blank">
                    <div class="username">User</div>
                  </a>
                  <hr />
                  <router-link to="/orders" class="option">Orders</router-link>
                  <router-link to="/profile" class="option"
                    >Profile</router-link
                  >
                  <router-link to="/faq" class="pro"
                    ><span>Need </span> Help?</router-link
                  >
                  <router-link to="/welcome" class="logout"
                    >Log Out</router-link
                  >
                </div>
              </nav>
            </div>
          </div>
          <!--Statistics chart section/JavaScript Implementation-->
          <div class="mainChart">
            <line-chart /><br />
            <!--statistics table section-->
            <vue-table-dynamic :params="params" ref="table">
              This years data
            </vue-table-dynamic>
          </div>
        </div>
      </div>
    </section>
    <!--end of statistics section-->

    <hr id="sectioner" />

    <!--Reviews/feedback section-->
    <section id="reviews">
      <div class="menuText">Reviews</div>
      <div class="whitePage">
        <div class="review">
          <div class="container">
            <div class="row">
              <!--JS implementation-->
              <div class="col-md-3">
                <div class="card card-body" id="well">
                  <div
                    class="nav flex-column nav-pills"
                    id="reviewCategory"
                    role="tablist"
                    aria-orientation="vertical"
                  >
                    <a
                      class="nav-link"
                      id="vService"
                      data-toggle="pill"
                      role="tab"
                      aria-selected="true"
                      @click.prevent="setActive('service')"
                      :class="{ active: isActive('service') }"
                      href="#service"
                      >Service</a
                    >
                    <a
                      class="nav-link"
                      id="vAttitute"
                      data-toggle="pill"
                      role="tab"
                      aria-selected="false"
                      @click.prevent="setActive('attitude')"
                      :class="{ active: isActive('attitude') }"
                      href="#attitude"
                      >Attitude</a
                    >
                    <a
                      class="nav-link"
                      id="vClean"
                      data-toggle="pill"
                      role="tab"
                      aria-selected="false"
                      @click.prevent="setActive('cleanliness')"
                      :class="{ active: isActive('cleanliness') }"
                      href="#cleanliness"
                      >Cleanliness</a
                    >
                    <a
                      class="nav-link"
                      id="vOverall"
                      data-toggle="pill"
                      role="tab"
                      aria-selected="false"
                      @click.prevent="setActive('overall')"
                      :class="{ active: isActive('overall') }"
                      href="#overall"
                      >Overall</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="tab-content" id="reviewPanel">
                  <div
                    class="tab-pane fade"
                    :class="{ 'active show': isActive('service') }"
                    id="service"
                    role="tabpanel"
                  >
                    <div class="myRate">
                      <h3>{{ serviceReviews.reviewer[0] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ serviceReviews.content[0] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ serviceReviews.reviewer[1] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ serviceReviews.content[1] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ serviceReviews.reviewer[2] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ serviceReviews.content[2] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ serviceReviews.reviewer[3] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ serviceReviews.content[3] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ serviceReviews.reviewer[4] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ serviceReviews.content[4] }}
                    </p>
                    <hr />
                  </div>
                  <div
                    class="tab-pane fade"
                    :class="{ 'active show': isActive('attitude') }"
                    id="attitude"
                    role="tabpanel"
                  >
                    <div class="myRate">
                      <h3>{{ attitudeReviews.reviewer[0] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ attitudeReviews.content[0] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ attitudeReviews.reviewer[1] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ attitudeReviews.content[1] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ attitudeReviews.reviewer[2] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ attitudeReviews.content[2] }}
                    </p>
                  </div>
                  <div
                    class="tab-pane fade"
                    :class="{ 'active show': isActive('cleanliness') }"
                    id="cleanliness"
                    role="tabpanel"
                  >
                    <div class="myRate">
                      <h3>{{ cleanReviews.reviewer[0] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ cleanReviews.content[0] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ cleanReviews.reviewer[1] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ cleanReviews.content[1] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ cleanReviews.reviewer[2] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ cleanReviews.content[2] }}
                    </p>
                  </div>
                  <div
                    class="tab-pane fade"
                    :class="{ 'active show': isActive('overall') }"
                    id="overall"
                    role="tabpanel"
                  >
                    <div class="myRate">
                      <h3>{{ overallReviews.reviewer[0] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ overallReviews.content[0] }}
                    </p>
                    <hr />
                    <div class="myRate">
                      <h3>{{ overallReviews.reviewer[1] }}</h3>
                    </div>
                    <br /><br />
                    <p class="content">
                      {{ overallReviews.content[1] }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <hr class="sectioner" />
    <!--end of Reviews section-->
    <feedback />
  </div>
</template>

<script>
import LineChart from "../components/Local/LineChart.vue";
import Feedback from "../components/Local/Feedback.vue";
import VueTableDynamic from "vue-table-dynamic";

export default {
  data() {
    return {
      params: {
        data: [
          ["Label", "Data"],
          ["Profile Visits", 34],
          ["Requests", 14],
          ["Orders", 9],
        ],
        header: "row",
        border: false,
        height: 250,
        columnWidth: [
          {
            column: 0,
            width: 500,
          },
          {
            column: 1,
            width: 50,
          },
        ],
      },
      activeItem: "home",
      serviceReviews: {
        reviewer: ["Menna", "Arwa", "Bassant", "Mohamed", "Youssef"],
        content: [
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
        ],
        show: true,
      },
      attitudeReviews: {
        reviewer: ["Arwa", "Menna", "Youssef"],
        content: [
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
        ],
        show: true,
      },
      cleanReviews: {
        reviewer: ["Arwa", "Mohamed", "Youssef"],
        content: [
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
        ],
        show: true,
      },
      overallReviews: {
        reviewer: ["Menna", "Hanan"],
        content: [
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis."
        ],
        show: true,
      },
    };
  },
  components: {
    LineChart,
    Feedback,
    VueTableDynamic,
  },
  methods: {
    isActive(menuItem) {
      return this.activeItem === menuItem;
    },
    setActive(menuItem) {
      this.activeItem = menuItem;
    },
  },
};
</script>

<style scoped>
/* Start of Statistics CSS */
#sectioner {
  color: black;
}
section {
  width: 100%;
  max-width: none;
  height: fit-content;
}

/* CONTAINER */
#container {
  display: table;
  width: 100%;
  margin: 0px auto;
  border-radius: 0px;
}

/* Side Bar */
#sideMenu {
  position: relative;
  width: 240px;
  height: 100%;
  padding: 30px;
  background: #6d3572;
  display: table-cell;
  vertical-align: top;
  color: #fff;
}
#sidecontent {
  position: relative;
  width: 200px;
  z-index: 10;
}
#sidecontent h1:first-child {
  text-shadow: 5px 5px 0px rgba(0, 0, 0, 0.2);
  font-weight: 700;
  font-size: 27px;
  margin-left: -8px;
}
.menu {
  list-style: none;
  margin: 24px 0;
  padding: 0;
  width: 100%;
}
.menu li {
  display: block;
  height: 30px;
  width: 100%;
  line-height: 30px;
  font-size: 14px;
  font-weight: 300;
  color: white;
  position: relative;
  cursor: pointer;
}
.menu li:hover {
  color: #d4e2e3;
}
.menu li:first-child {
  height: 35px;
  line-height: 35px;
  font-size: 16px;
  font-weight: 700;
  color: #ddd;
  background: rgba(0, 0, 0, 0.08);
  margin-left: -18px;
  padding: 0px 10px;
  border-radius: 8px;
  cursor: default;
}

/* Content */
#content {
  width: calc(100% - 240px);
  height: 100%;
  padding: 25px;
  display: table-cell;
}
#titleBar {
  height: 36px;
  margin-bottom: 30px;
  margin-right: -15px;
}
#dash, .content {
  color: black;
  background: none;
}
#profilePic {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  background: #666;
  float: right;
  margin-top: -15px;
  margin-left: 16px;
  overflow: hidden;
}
#profilePic img {
  width: 100%;
}
#profilePic:hover ~ .options {
  opacity: 0.95;
  top: 65px;
  visibility: visible;
  transition: 0.2s cubic-bezier(0.565, -0.26, 0.255, 1.41);
}
.options:hover,
.options:active,
.options:focus {
  opacity: 0.95;
  top: 65px;
  visibility: visible;
  transition: 0.2s cubic-bezier(0.565, -0.26, 0.255, 1.41);
}
.options {
  position: absolute;
  visibility: hidden;
  top: 60px;
  right: 5px;
  width: 250px;
  height: 250px;
  background-color: #83719b;
  opacity: 0;
  border-radius: 5px;
  padding-top: 40px;
  transition: 0.2s cubic-bezier(0.565, -0.26, 0.255, 1.41);
}
.options:after {
  border: solid transparent;
  content: " ";
  height: 0px;
  width: 0px;
  bottom: 100%;
  right: 20px;
  position: absolute;
  border-color: transparent;
  border-width: 10px;
  border-bottom-color: #fafafa;
  margin-left: -10px;
}
.options hr {
  width: 100%;
  display: block;
  margin-bottom: 0px;
}
.options .username {
  position: absolute;
  top: 10px;
  left: 0px;
  width: 100%;
  text-align: center;
  font-size: 18px;
  font-weight: 700;
  padding-top: 5px;
  color: white;
}
.options .pro {
  position: absolute;
  bottom: 6px;
  left: 6px;
  background: #e2a48f;
  border-radius: 3px;
  color: white;
  font-size: 11px;
  padding: 7px;
  font-weight: 700;
  text-decoration: none;
}
.options .pro span {
  font-size: 0px;
  font-weight: 400;
  transition: 0.2s cubic-bezier(0.565, -0.26, 0.255, 1.41);
}
.options .pro:hover span {
  font-size: 11px;
  transition: 0.2s cubic-bezier(0.565, -0.26, 0.255, 1.41);
}
.options .logout {
  position: absolute;
  bottom: 6px;
  right: 6px;
  background: #e2a48f;
  border-radius: 3px;
  color: #fff;
  font-size: 11px;
  padding: 7px;
  font-weight: 700;
  text-decoration: none;
}
.options .option {
  display: block;
  width: 100%;
  padding: 10px 10px;
  color: white;
  cursor: pointer;
  text-decoration: none;
}
.options .option:hover {
  color: #fff;
  background: #6d3572;
}
.options .option:active {
  color: #fff;
  background: #6d3572;
}
#salesData {
  margin-bottom: 60px;
}
#totalSales {
  height: 120px;
  position: relative;
  margin-top: 24px;
  margin-bottom: 50px;
}
#totalSales .col {
  float: left;
  width: 33.33%;
  height: 100%;
}
#totalSales .col .progressTitle {
  float: left;
  margin-left: 20px;
  font-weight: 300;
  color: black;
}
.progressBar {
  float: left;
  height: 120px;
  width: 120px;
  font-size: 40px;
  text-align: center;
  line-height: 120px;
}

/* Icons */
.notification {
  display: block;
  width: 20px;
  height: 20px;
  color: white;
  text-shadow: 0px 0px 20px rgba(255, 255, 255, 0.7);
  font-weight: 700;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  background: black;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 2%;
  margin: auto;
  transition: 0.3s ease;
}
ul.menu li:hover .notification {
  text-shadow: 0px 0px 30px rgba(255, 255, 255, 1);
  transition: 0.3s ease;
}

/* Table */
table {
  width: 100%;
  border-collapse: collapse;
}
th {
  text-align: left;
  color: black;
  font-weight: 400;
  font-size: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding: 0 10px;
  padding-bottom: 14px;
}
tr:not(:first-child):hover {
  background: rgba(255, 255, 255, 0.03);
}
td {
  height: 40px;
  line-height: 40px;
  font-weight: 300;
  color: black;
  padding: 0 10px;
}
.clearFix {
  clear: both;
}
/* End of Statistics CSS */

/* Start of Reviews CSS */
#reviews {
  color: black;
  margin: 7px;
}

.whitePage {
  background: #fff;
  top: 400px;
  left: 0;
  z-index: 3;
  width: 100%;
}
.menuText {
  top: 250px;
  left: 0;
  z-index: 6;
  width: 100%;
  text-align: center;
  text-transform: uppercase;
  color:  #6d3572;
  letter-spacing: 6px;
  font-size: 40px;
}

#well {
  background: #f5dad3;
}

#reviewCategory a {
  color: black;
}

#reviewCategory a.active {
  background: #e2a48f;
  color: black;
}

#reviewCategory a:hover:not(.active) {
  background: #e2a48f;
  color: black;
}

.review {
  margin: 20px 0px 30px 0px;
}
fieldset,
label {
  margin: 0;
  padding: 0;
}

#reviewPanel .myRate {
  float: left;
}

.myRate > label:before {
  font-size: 12px;
}
#vtab,
#vtab2,
#vtab3,
#vtab4 {
  overflow-y: scroll;
  max-height: 300px;
  padding: 0 1em 0 0;
}
#vtab #vtab2,
#vtab3,
#vtab4::-webkit-scrollbar {
  background-color: #eee;
  width: 10px;
}
#vtab #vtab2,
#vtab3,
#vtab4::-webkit-scrollbar-thumb {
  border: 1px #eee solid;
  border-radius: 2px;
  background: #777;
  -webkit-box-shadow: 0 0 8px #555 inset;
  box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
#vtab #vtab2,
#vtab3,
#vtab4::-webkit-scrollbar-track {
  -webkit-box-shadow: 0 0 2px #ccc;
  box-shadow: 0 0 2px #ccc;
}

/* End of Reviews CSS */
</style>