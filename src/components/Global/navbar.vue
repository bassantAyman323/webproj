<template>
  <header>
    <div class="wrapper">
      <div class="logo">
        <img src="../../assets/Logo.png" alt="" />
      </div>
      <ul class="nav-area">
        <router-link class="nav-li" to="/"><a>Home</a></router-link>
        <router-link class="nav-li" to="/services"><a>Services</a></router-link>
        <router-link class="nav-li" to="/aboutus"><a>About Us</a></router-link>
      </ul>
    </div>
  </header>
</template>
<script>
export default {
  name: "AppHeader",
};
</script>
<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
.wrapper {
  width: 1170px;
  margin: auto;
  border-radius: 10px;
}
header {
  background-image: url("../../assets/Header.jpg");
  animation: slider 10s infinite linear;
  height: 100vh;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  position: relative;
}
@keyframes slider {
  0% {
    background-image: url("../../assets/Header1.jpg");
  }
  35% {
    background-image: url("../../assets/Header2.jpg");
  }
  75% {
    background-image: url("../../assets/Header3.jpg");
  }
}
.nav-area {
  float: right;
  list-style: none;
  margin-top: 30px;
}
.nav-area .nav-li {
  display: inline-block;
}
.nav-area a {
  color: #fff;
  text-decoration: none;
  padding: 5px 20px;
  font-size: 14px;
}
.nav-area .nav-li a:hover {
  background-color: #fff;
  color: black;
}
.logo img {
  width: 100px;
  float: left;
  height: auto;
}
</style>
