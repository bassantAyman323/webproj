<template>
  <div>
    <!--start of feedback section / JS implementation-->
    <section id="feedback">
      <h1 class="section-header">FEED-BACK</h1>
      <div class="reviewList">
        <div class="contact-wrapper">
          <form
            class="form-horizonal"
            role="form"
            method="POST"
            action="http://localhost/final-project/src/Api/feedback.php">
            <div class="form-group">
              <div class="col-sm-12">
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="NAME"
                  name="name"
                  v-model="feedback.reviewer"
                  value=""
                />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="EMAIL"
                  name="email"
                  v-model="feedback.email"
                  value=""
                />
              </div>
            </div>
            <textarea
              class="form-control"
              rows="10"
              cols="9"
              placeholder="What do you think of our website"
              name="message"
              v-model="feedback.message"
            ></textarea>
            <button class="btn" id="submit" @click="review()" type="submit">Send</button>
          </form>
        </div>
      </div>
    </section>
    <!--end of feedback section-->
  </div>
</template>

<script>
import axios from "axios";
export default {
  data(){
    return{
      feedback: {
        reviewer:"",
        email:"",
        message:""
      }
    }
  },
  methods: {
    review() {
      var data = new FormData();
      data.append("name", this.feedback.reviewer);
      data.append("email", this.feedback.email);
      data.append("message", this.feedback.message);
      axios
        .post(
          "http://localhost/final-project/src/Api/feedback.php?action=send",
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
    }
  }
}
</script>

<style scoped>

/* Start of Feedback CSS */
#feedback {
  text-align: center;
  color: #6d3572;
  padding-top: none;
  align-content: justify center;
  -webkit-tap-highlight-color: transparent;
  padding: 20px;
}

.section-header {
  text-align: center;
  margin: 0 auto;
  padding-top: 50px;
  margin-bottom: 50px;
  text-transform: uppercase;
  letter-spacing: 6px;
  color: #6d3572;
}

.contact-wrapper {
  margin: 0 auto;
  padding-top: 20px;
  position: relative;
  max-width: 800px;
  align-content: center;
}

.form-horizonal {
  display: relative;
  font-weight: 400;
  align-content: center;
}

#submit {
  background-color: #e2a48f;
  color: white;
  border-radius: 10px;
  border: none;
  padding: 10px;
  margin: 3px;
  width: 15%;
}

.contact-wrapper textarea {
  padding-bottom: 15px;
}

/* Style Star Rating Widget */

.rating {
  border: none;
  align-content: center;
}

.rating > input {
  display: none;
}

.rating > label:before {
  margin: 5px;
  font-size: 30px;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
  font-size: 30px;
  padding-top: 8px;
}

.rating > .half:before {
  content: "\f089";
  position: absolute;
}

.rating > label {
  color: #d4e2e3;
  float: right;
}

/* Highlight Stars on Hover */

/* show gold star when clicked */

.rating>input:checked~label,
/* hover current star */

.rating:not(:checked)>label:hover,
/* hover previous stars in list */

.rating:not(:checked)>label:hover~label {
  color: #ffd700;
}

/* hover current star when changing rating */

.rating>input:checked+label:hover, .rating>input:checked~label:hover,
/* lighten current selection */

.rating>label:hover~input:checked~label, .rating>input:checked~label:hover~label {
  color: #ffd700;
}

.ratingExp {
  padding-top: 20px;
}

/* End of Feedback CSS */
</style>