<template>
  <div>
    <div class="welcome-text">
      <h1>Have An Occassion?!</h1>
      <a href="#Registration-form">Register Now!</a>
    </div>
    <div id="wall">
      <div  id="Registration-form">
        <em>
          <h1 id="SignU">SIGN UP</h1>
          <br /><br
        /></em>

        <em> <label id="SignU" for="fname">First Name:</label><br /></em>

        <input type="text" id="inputt" name="fname" value="" />
        <br /><br />
        <em> <label id="SignU" for="lname">Last Name:</label><br /></em>

        <input type="text" id="inputt" name="lname" value="" />
        <br /><br />
        <em> <label id="SignU" for="password">Password:</label><br /></em>

        <input type="password" id="inputt" name="password" value="" />
        <br /><br />
        <em> <label id="SignU" for="email">Email Address:</label><br /></em>

        <input type="email" id="inputt" name="email" value="" /><br /><br />
        <em> <label id="SignU" for="gender">Gender:</label> <br /></em>

        <select name="gender" id="inputt"
          ><br />
          <option id="SignU" value="male">Male</option>
          <option id="SignU" value="female">Female</option> </select
        ><br />
        <br />
        <em> <label id="SignU" for="number">Phone Number:</label> <br /></em>

        <input type="phone" id="inputt" name="phone" value="" />
        <br /><br />
        <em>
          <label id="SignU" for="Date">Re-Enter Phone Number:</label> <br
        /></em>

        <input type="phone" id="inputt" name="phone" value="" />

        <br /><br />
        <em>
          <em> <label id="SignU" for="Date">The Country</label> <br /></em>

          <input type="phone" id="inputt" name="phone" value="" />
        </em>
        <br /><br />
        <em> <label id="SignU" for="about me">About Me:</label></em>
        <br /><br />
        <textarea id="textArea"></textarea>
        <br /><br /><br /><br />
        <label id="SignU"> Sign Up As..</label> <br /><br />

        <button id="butstyle" @click="message = !message">
          {{ message ? "Hide Hall Owner" : "Hall Owner" }}
        </button>
        <div v-if="message">
          <label id="SignU" for="state"
            >Type(wedding hall, villa, cafe..etc):</label
          ><br />
          <input name="state" type="text" value="" maxlength="5" />
          <br /><br />
          <label id="SignU" for="zipCode">Locatoin of the hall:</label><br />
          <input
            name="zipCode"
            type="text"
            value=""
            maxlength="5"
          /><br /><br />
          <label id="SignU" for="state">Hall contact Number:</label><br />
          <input name="state" type="text" value="" maxlength="5" />
          <br /><br />
          <label id="SignU" for="zipCode">Photos of the hall:</label><br />
          <input
            type="file"
            id="myfile"
            name="myfile"
            multiple
            maxlength="5"
          /><br /><br />
          <label id="SignU" for="state">Number of tables, chairs,...</label
          ><br />
          <input name="state" type="text" value="" maxlength="5" />
          <br /><br />
          <label id="SignU" for="zipCode">Do you have staff(band, DJ,..)?</label
          ><br />
          <input
            name="zipCode"
            type="text"
            value=""
            maxlength="5"
          /><br /><br />
          <label id="SignU" for="state">Payment/fees:</label><br />
          <input name="state" type="text" value="" maxlength="5" />
          <br /><br />
          <label id="SignU" for="zipCode">Special Offers :</label><br />
          <input
            name="zipCode"
            type="text"
            value=""
            maxlength="5"
          /><br /><br />
          <label id="SignU" for="state">Packages details:</label><br />
          <input name="state" type="text" value="" maxlength="5" />
          <br /><br />
          <label id="SignU" for="zipCode">Cancelation policy:</label><br />
          <input
            name="zipCode"
            type="text"
            value=""
            maxlength="5"
          /><br /><br />
        </div>
        <br /><br />
        <button id="butstyle" @click="message2 = !message2">
          {{ message2 ? "Hide Photographer" : "Photographer" }}
        </button>
        <div v-if="message2">
          <div class="photographer">
            <label id="SignU" for="state">Type Of cameras you use:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Your fees in hour</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Your Page in Face book:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Your Experience:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Special Packages:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Photos of previous works:</label
            ><br />
            <input
              type="file"
              id="myfile"
              name="myfile"
              multiple
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Cancelation policy:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode"></label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
          </div>
        </div>
        <br /><br />
        <button id="butstyle" @click="message3 = !message3">
          {{ message3 ? "Hide Makeup Artist" : "Makeup Artist" }}
        </button>
        <div v-if="message3">
          <div class="makeupArtist">
            <label id="SignU" for="state">Date of birth:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Your Experience:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Photos of previous woks:</label><br />
            <input
              type="file"
              id="myfile"
              name="myfile"
              multiple
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="zipCode">Certificate/Education:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Type of makeup:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Specialities:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Salary/fees of each occasion:</label
            ><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
          </div>
        </div>
        <br /><br />

        <button id="butstyle" @click="message4 = !message4">
          {{ message4 ? "Hide Planner" : "Planner" }}
        </button>
        <div v-if="message4">
          <div class="Planner">
            <label id="SignU" for="state">Date of birth:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">From when you started ?</label
            ><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">No. of occasions you have done:</label
            ><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Photos of previous works:</label
            ><br />
            <input
              type="file"
              id="myfile"
              name="myfile"
              multiple
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">New ideas you did:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Packages details:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br /><label id="SignU" for="state">Special Offers:</label
            ><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Cancelation policy</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br /><label id="SignU" for="state"
              >Salary of each occasion:</label
            ><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
          </div>
        </div>
        <br /><br />
        <button id="butstyle" @click="message5 = !message5">
          {{ message5 ? "Hide Car Agency" : "Car Agency" }}
        </button>
        <div v-if="message5">
          <div class="carAgency">
            <label id="SignU" for="state">Agency Name:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Name of the owner/s:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Agency contact Address:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">Agency Governmental Permit</label
            ><br />
            <input
              type="file"
              id="myfile"
              name="myfile"
              multiple
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Cars classes</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">how many cars</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Info about cars & drivers:</label
            ><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="state">Packages details:</label><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
            <label id="SignU" for="zipCode">cancelation policy:</label><br />
            <input
              name="zipCode"
              type="text"
              value=""
              maxlength="5"
            /><br /><br />
            <label id="SignU" for="state">Salary/fees of each occasion:</label
            ><br />
            <input name="state" type="text" value="" maxlength="5" />
            <br /><br />
          </div>
        </div>

        <br /><br /><br /><b>
          <em> <button type="button" id="buttonn">Sign Up</button> </em
          ><br /><br />
          <em>
            <button type="button" value="CLEAR" id="buttonn">Reset</button></em
          ><br /><br /></b
        ><br /><br />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Registration",
  data() {
    return {
      message: false,
      message2: false,
      message3: false,
      message4: false,
      message5: false,
    };
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.welcome-text {
  position: absolute;
  top: 0px;
  right: 0%;
  width: 600px;
  height: 300px;
  margin: 20% 30%;
  text-align: center;
}
.welcome-text h1 {
  text-align: center;
  color: #fff;
  font-size: 60px;
}
.welcome-text a {
  border: 1px solid #fff;
  padding: 10px;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
  margin-top: 20px;
  display: inline-block;
  color: #fff;
}
.welcome-text a:hover {
  background-color: #fff;
  color: black;
}
#wall {
  border: 1px black solid;
  margin: 1px;
  padding: 1px;
}
#Registration-form{
  margin: 5px;
  padding: 5px;
}
#butstyle {
  background-color: #6d3572;
  color: white;
  align-content: center;
  font-family: lato-bold;
  font-size: 20px;
}
#SignU {
  color: #6d3572;
}
#signAs {
  color: white;
  background-color: #6d3572;
}
#option {
  background-color: white;
  color: #6d3572;
}

#displayy {
  display: block;
}
#inputt {
  border-radius: 15;
  display: -webkit-box;
  margin-left: auto;
  margin-right: 85%;
}
#textArea {
  height: 100%;
  width: 100%;
}
#buttonn {
  padding: 15px 32px;
  border: 1px solid #83719b;
  background-color: #6d3572;
  color: white;
  font-family: lato-bold;
  font-size: 25px;
}

#app {
  text-align: center;
  margin: 5%;
}
#appp {
  margin: auto;
  width: 233px;
  height: 74px;
  vertical-align: middle;
  padding: 10px;
  background: white;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  font-family: lato-bold;
  font-size: 23px;
  color: white;
}

.muted {
  color: #ccc;
}

.dropbtn {
  background-color: #6d3572;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
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
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #6d3572;
}

label {
  float: none;
  width: auto;
  float: left;
  clear: left;
  padding-right: 2em;
}
body {
  font-size: 20px;
}
input {
  float: none;
  width: auto;

  padding-left: 5em;
}
button {
  border-radius: 10px;
}
input {
  border-radius: 10px;
}
textarea {
  border-radius: 10px;
}
select {
  border-radius: 10px;
}
</style>
