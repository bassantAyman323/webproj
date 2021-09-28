<template>
  <div class="container">
    <div class="card">
      <form
        action="http://localhost/final-project/src/Api/request.php"
        method="POST"
        @submit="validationform"
      >
        <div class="row">
          <div class="col">
            "service name"
            <div class="form__error" v-if="!$v.servicename.required">
              *This field is required.
            </div>
            <input
              type="text"
              class="form-control"
              id="validationCustom01"
              value=""
              name="servicename"
              v-model="admin.servicename"
              v-model.trim="$v.servicename.$model"
              required
            />
          </div>
          <div class="col">
            "Category name"
            <div class="form__error" v-if="!$v.category.required">
              *This field is required.
            </div>
            <select
              class="custom-select"
              name="category"
              id="validationCustom04"
              v-model="admin.category"
              v-model.trim="$v.category.$model"
              required
            >
              <option selected name="category" value="wedding halls">
                wedding halls
              </option>
              <option name="category" value="wedding planners">
                wedding planners
              </option>
              <option name="category" value="cars">cars</option>
              <option name="category" value="photographers">
                photographers
              </option>
              <option name="category" value="make-up artist">
                make-up artist
              </option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <h3 class="validationCustom02" id="h">Personal Information</h3>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="validationCustom01"
              ><i class="fa fa-user"></i>First name</label
            >
            <div class="form__error" v-if="!$v.firstname.required">
              *This field is required.
            </div>
            <input
              type="text"
              class="form-control"
              id="firstname"
              value="bassant"
              name="firstname"
              v-model="admin.firstname"
              v-model.trim="$v.firstname.$model"
              required
            />
          </div>
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="validationCustom02"
              ><i class="fa fa-user"></i>Last name</label
            >
            <div class="form__error" v-if="!$v.lastname.required">
              *This field is required.
            </div>
            <input
              type="text"
              class="form-control"
              id="validationCustom02"
              name="lastname"
              value="ayman"
              v-model="admin.lastname"
              v-model.trim="$v.lastname.$model"
              required
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="validationCustom01"
              ><i class="fa fa-envelope"></i>Email</label
            >
            <div class="form__error" v-if="!$v.email.required">
              *This field is required.
            </div>
            <input
              type="Email"
              class="form-control"
              required
              name="email"
              v-model="admin.email"
              placeholder="john@example.com"
              v-model.trim="$v.email.$model"
            />
          </div>
          <div class="col-md mb-3">
            <label class="validationCustom01"
              ><i class="fa fa-address-card-o"></i>Address</label
            >
            <input
              type="text"
              class="form-control"
              required=""
              name="address"
              v-model="admin.address"
              placeholder="542 W. 15th Street"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="validationCustom04"
              ><i class="fa fa-institution"></i>City</label
            >
            <select
              class="custom-select"
              name="city"
              id="validationCustom04"
              v-model="admin.city"
              required
            >
              <option selected name="city" value="Alex">Alex</option>
              <option name="city" value="Giza">Giza</option>
              <option name="city" value="Cairo">Cairo</option>
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
          </div>
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="Phone">Phone number</label>
            <div class="form__error" v-if="!$v.phone.required">
              *This field is required.
            </div>
            <input
              type="tel"
              class="form-control"
              name="phone"
              placeholder="123-12-123"
              v-model="admin.phone"
              v-model.trim="$v.phone.$model"
              pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
            />
          </div>
        </div>

        <div class="form-row">
          <h3 class="validationCustom02">Occassion information</h3>
        </div>
        <br />
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="validationCustom01">Type of occassion</label>
            <input
              type="text"
              class="form-control"
              value="Wedding"
              v-model="admin.type1"
              required
            />
          </div>

          <div class="col-md-6 mb-3">
            <label class="validationCustom01">Number of guests</label>
            <input
              type="number"
              class="form-control"
              v-model="admin.noofguests"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label class="validationCustom01">Budget</label>
            <input
              type="text"
              class="form-control"
              name=""
              v-model="admin.budget"
            />
          </div>
          <div class="col-md-6">
            <label class="validationCustom01">Additional needs</label>
            <input
              type="text"
              class="form-control"
              name=""
              v-model="admin.additionalneeds"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-2">
            <label class="validationCustom01">Place</label>
          </div>
          <div class="col-md-1 mb-6">
            <input
              type="radio"
              class="form-control"
              v-model="admin.place"
              id="indoor"
              name="Place"
              value="Indoor"
              checked=""
            />
            <label class="validationCustom01"> In-door</label><br />
          </div>
          <div class="col-md-1 mb-6">
            <input
              class="form-control"
              type="radio"
              v-model="admin.place"
              id="Outdoor"
              name="Place"
              value="Outdoor"
            />
            <label class="validationCustom01">Out-Door</label><br />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-2">
            <label class="validationCustom01"> Style</label>
          </div>
          <div class="col-md-1 mb-6">
            <input
              class="form-control"
              v-model="admin.styl"
              type="radio"
              id="formal"
              name="style"
              value="formal"
            />
            <label class="validationCustom01">Formal</label><br />
          </div>
          <div class="col-md-1 mb-6">
            <input
              class="form-control"
              v-model="admin.styl"
              type="radio"
              id="casual"
              name="style"
              value="casual"
            />
            <label class="validationCustom01">Casual</label><br />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3">
            <label class="validationCustom01"
              >Name of service and category
            </label>
          </div>
          <div class="col-md-9">
            <p class="impo">important</p>
            <textarea
              class="form-control"
              v-model="admin.service"
              id="textarea"
              name="service"
              required
            ></textarea>
          </div>
        </div>

        <br />
        <div class="form-row">
          <div class="col-md-3">
            <label class="validationCustom01">Childreen included</label>
          </div>
          <div class="col-md-1">
            <input
              type="checkbox"
              v-model="admin.childreen"
              class="form-control"
              name=""
              checked
            />
          </div>
        </div>

        <div class="form-row">
          <h3 class="validationCustom02">Payment</h3>
        </div>

        <div class="form-row">
          <label for="fname" class="request">Accepted Cards</label>
          <div class="icon-container">
            <i class="fa fa-cc-visa" style="color: navy"></i>
            <i class="fa fa-cc-amex" style="color: blue"></i>
            <i class="fa fa-cc-mastercard" style="color: red"></i>
            <i class="fa fa-cc-discover" style="color: orange"></i>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="cname" class="validationCustom01">Name on Card</label>
            <input
              class="form-control"
              type="text"
              v-model="admin.cardname"
              placeholder="bassant"
            />
          </div>
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="ccnum"
              >Credit card number</label
            >
            <input
              class="form-control"
              type="text"
              id="ccnum"
              v-model="admin.cardno"
              name="cardnumber"
              placeholder="1111-2222-3333-4444"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="expmonth">Exp Month</label>
            <input
              class="form-control"
              type="text"
              v-model="admin.expmonth"
              id="expmonth"
              name="expmonth"
              placeholder="September"
            />
          </div>
          <div class="col-md-6 mb-6">
            <label class="validationCustom01" for="expyear">Exp Year</label>
            <input
              class="form-control"
              v-model="admin.expyear"
              type="text"
              id="expyear"
              name="expyear"
              placeholder="2018"
            />
          </div>
        </div>
        <div class="form-row" id="center">
          <div class="col-md-6 mb-3">
            <label class="validationCustom01" for="cvv">CVV</label>
            <input
              class="form-control"
              v-model="admin.cvv"
              type="text"
              id="cvv"
              name="cvv"
              placeholder="352"
            />
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              v-model="admin.agree"
              value=""
              id="invalidCheck"
              required
            />
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="impo">You must agree before submitting.</div>
          </div>
        </div>

        <input type="submit" @click="send()" id="app" value="Apply" />
      </form>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import {
  required,
  minLength,
  maxLength,
  alphaNum,
  email,
  sameAs,
} from "vuelidate/lib/validators";
export default {
  data() {
    return {
      email: "",
      firstname: "",
      lastname: "",
      category: "",
      servicename: "",
      phone: "",
      errors: [],
      admin: {
        maxchars: 20,
        firstname: "",
        lastname: "",
        city: "",
        phone: "",
        address: "",
        email: "",
        type1: "",
        noofguests: "",
        budget: "",
        additionalneeds: "",
        place: "",
        styl: "",
        service: "",
        childreen: "",
        cardname: "",
        cardno: "",
        expmonth: "",
        expyear: "",
        cvv: "",
        agree: "",
        servicename: "",
        category: "",
        maxchar: 10,
      },
    };
  },
  validations: {
    email: {
      required,
      email,
    },
    firstname: {
      required,
      //  minLength: minLength(4),
      // maxLength: maxLength(12),
      alphaNum,
    },
    lastname: {
      required,
      alphaNum,
    },
    phone: {
      required,
    },
    servicename: {
      required,
    },
    category: {
      required,
    },
  },
  methods: {
    send() {
      var data = new FormData();
      data.append("firstname", this.admin.firstname);
      data.append("lastname", this.admin.lastname);
      data.append("city", this.admin.city);
      data.append("phone", this.admin.phone);
      data.append("address", this.admin.address);
      data.append("email", this.admin.email);
      data.append("type1", this.admin.type1);
      data.append("noofguests", this.admin.noofguests);
      data.append("budget", this.admin.budget);
      data.append("additionalneeds", this.admin.additionalneeds);
      data.append("place", this.admin.place);
      data.append("styl", this.admin.styl);
      data.append("service", this.admin.service);
      data.append("childreen", this.admin.childreen);
      data.append("cardname", this.admin.cardname);
      data.append("cardno", this.admin.cardno);
      data.append("expmonth", this.admin.expmonth);
      data.append("expyear", this.admin.expyear);
      data.append("cvv", this.admin.cvv);
      data.append("agree", this.admin.agree);
      data.append("servicename", this.admin.servicename);
      data.append("category", this.admin.category);
      axios
        .post(
          "http://localhost/final-project/src/Api/api.php?action=send",
          data
        )
        .then((res) => {
          if (res.data.error) {
            alert("error");
          } else {
            alert(res.data.message);
          }
        })

        .catch((err) => {
          console.log("Error", err);
        });
    },
    validationform: function (e) {
      this.errors = [];
      if (this.admin.firstname == "") {
        this.errors.push("firstname can't be empty");
      }
      if (this.admin.lastname == "") {
        this.errors.push("lastname can't be empty");
      }
      if (!this.errors.length) {
        return true;
      }
      e.preventDefault();
    },
  },
};
</script>

<style scoped lang="scss">
#app {
  /* font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; */
  /* text-align: center; */
  color: #6d3572;
  font-size: 17px;
}
.error {
  color: red;
  background-color: rgb(160, 160, 160);
}
/* #nav {
  padding: 8px;
} */

#nav a {
  /* font-weight: bold; */
  color: #6d3572;
  font-size: 8px;
}

#nav a.router-link-exact-active {
  color: #6d3572;
  font-size: 8px;
}
#LogIn,
#search,
#SignUp {
  color: #6d3572;
  border: 1px solid #83719b;
  background-color: white;
  margin: 1px;
}
#menu {
  color: #6d3572;
  border-radius: 0.1em;
  background-color: white;
  cursor: pointer;
  margin-top: 0.5mm;
  font-size: 22px;
  align-content: center;
  size: 15%;
}
#search2 {
  color: white;
  border: 1px solid #83719b;
  background-color: #83719b;
  cursor: pointer;
}
button:hover {
  filter: blur(0.5px);
}

#DropMenu {
  color: #6d3572;
  background-color: white;
  margin-top: 0.5mm;
}

nav a {
  text-decoration: none;
  color: #6d3572;
}

#Content {
  color: rgb(136, 127, 127);
  font-size: xx-large;
  font-family: monospace;
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
/*
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}*/

/* Float four columns side by side */
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

#a {
  color: #6d3572;
  font-size: 20px;
  text-decoration-line: unset;
  text-decoration-thickness: 2px;
}
/* #lst1{
  display:none;
} */
#toggle {
  color: #6d3572;
  size: 10%;
}
#bCard {
  width: 100%;
}
#button {
  size: 20%;
}
.impo {
  color: red;
}
.form__input {
  border: none;
  outline: none;
  border-bottom: 1px solid #eee;
  font-size: 1em;
  padding: 5px;
  display: block;
  margin: 10px 0 5px 0;
}

.form__error {
  color: red;
  font-size: 0.75em;
  padding-left: 10px;
}

.form__submit {
  background-color: #0033cc;
  display: inline-block;
  color: white;
  padding: 10px 20px;
  text-align: center;
  cursor: pointer;
  margin-top: 30px;
}
.form__input-shake {
  animation: shake 0.2s;
  animation-iteration-count: 3;
}

@keyframes shake {
  0% {
    transform: translateX(0px);
  }
  25% {
    transform: translateX(2px);
  }
  50% {
    transform: translateX(0px);
  }
  75% {
    transform: translateX(-2px);
  }
  100% {
    transform: translateX(0px);
  }
}
</style>
