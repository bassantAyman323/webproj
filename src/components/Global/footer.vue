<template>
  <div id="footer">
    <div id="footer">
      <div class=" container-fluid ">
        <div class="row ">
          <!-- First col:Logo-->

          <div class="col-sm-1 justify-content-center" id="BottomLogo">
            <img src="../../assets/Logo.png" >
          </div>
          <!-- End of first col-->

          <!-- second col:copy rights-->
          <div class=" col-sm-10 justify-content-center">
            <div class="row justify-content-sm-center ">
              <a href="www.facebook.com "> Follow Us</a>
            </div>
            <div class="row justify-content-sm-center ">
              <p></p>
            </div>

            <div class="row justify-content-sm-center ">
              <p id="copyright">
                &copy; Happy Moments. All Rights Reserved.2020
              </p>
            </div>

            <div class="row justify-content-sm-center ">
              <p>
                <a href=" terms.html ">Terms & Conditions</a> |
                <a href="PrivacyPolicy.html ">Privacy Policy</a> |
                <a href="use.html ">Terms of Use</a>
              </p>
            </div>
          </div>
          <!--end of second col-->

          <!--Third col: FAQ-->
          <div class="col-sm-1">
            <div class="row justify-content-sm-center ">
              <a href="faqs.html ">FAQ</a>
            </div>
            <div class="row justify-content-sm-center ">
              <a href="Contact.html ">Contact</a>
            </div>
            <div class="row justify-content-sm-center ">
              <a href="About.html ">About us</a>
            </div>

            <!--End of third col-->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "AppFooter",
};
</script>
<style scoped>
footer img {
  width: 200px;
  height: 100px;
}

#footer {
  background: #6d3572;
  font-size: x-large ;
  /*height: 200px;*/
}

#footer a {
  padding: 10px;
  margin: 5px;
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
</style>
