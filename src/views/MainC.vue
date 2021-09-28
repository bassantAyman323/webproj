<template>
  <div>
    <!--Start of top reviews section-->
    <section id="topReviews">
      <div class="col-sm-10 ml-auto mr-auto text-center">
        <h2 id="reviewTitle">Top Reviews</h2>
        <swiper class="swiper" :options="swiperOption">
          <swiper-slide>
            <div class="reviews">
              <p id="title">Halls</p>
              <div class="review">
                <div class="review-info">
                  <span class="author-name">{{ reviews.reviewer[0] }}</span
                  ><br />
                </div>
                <div class="widget-review-body">
                  <div class="review-body">
                    <span>{{ reviews.content[0] }}</span>
                  </div>
                </div>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="reviews">
              <p id="title">Planners</p>
              <div class="review">
                <div class="review-info">
                  <span class="author-name">{{ reviews.reviewer[1] }}</span
                  ><br />
                </div>
                <div class="widget-review-body">
                  <div class="review-body">
                    <span>{{ reviews.content[1] }}</span>
                  </div>
                </div>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="reviews">
              <p id="title">Photographers</p>
              <div class="review">
                <div class="review-info">
                  <span class="author-name">{{ reviews.reviewer[2] }}</span
                  ><br />
                </div>
                <div class="widget-review-body">
                  <div class="review-body">
                    <span>{{ reviews.content[2] }}</span>
                  </div>
                </div>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="reviews">
              <p id="title">Make-up Artists</p>
              <div class="review">
                <div class="review-info">
                  <span class="author-name">{{ reviews.reviewer[3] }}</span
                  ><br />
                </div>
                <div class="widget-review-body">
                  <div class="review-body">
                    <span>{{ reviews.content[3] }}</span>
                  </div>
                </div>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="reviews">
              <p id="title">Car Rental Agencies</p>
              <div class="review">
                <div class="review-info">
                  <span class="author-name">{{ reviews.reviewer[4] }}</span
                  ><br />
                </div>
                <div class="widget-review-body">
                  <div class="review-body">
                    <span>{{ reviews.content[4] }}</span>
                  </div>
                </div>
              </div>
            </div>
          </swiper-slide>
          <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
      </div>
    </section>

    <!--end of reviews section-->

    <hr class="sectioner" />

    <!--start of categories section-->

    <section id="categories">
      <div class="container">
        <p id="reviewTitle">Take a Look at Our Categories</p>
        <!--JS Implementation-->
        <ul class="list-unstyled">
          <li
            class="media"
            id="hidden"
            data-aos="fade-up"
            data-aos-duration="3000"
            data-aos-ease="ease-in-back"
          >
            <img src="../assets/Halls.png" class="mr-3 align-self-center" />
            <div class="media-body align-self-center">
              <h5 class="mt-0 mb-1">Lorem ipsum dolor</h5>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat
              veritatis autem impedit numquam reprehenderit accusamus id
              voluptate magni odit mollitia. Esse sunt omnis iste voluptatem
              exercitationem numquam, rerum porro quis. Lorem ipsum, dolor sit
              amet consectetur adipisicing elit. Placeat veritatis autem impedit
              numquam reprehenderit accusamus id voluptate magni odit mollitia.
              Esse sunt omnis iste voluptatem exercitationem numquam, rerum
              porro quis.
            </div>
          </li>
          <li
            class="media my-4"
            id="hidden"
            data-aos="fade-up"
            data-aos-duration="3000"
            data-aos-ease="ease-in-back"
          >
            <div class="media-body align-self-center">
              <h5 class="mt-0 mb-1">Lorem ipsum dolor</h5>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat
              veritatis autem impedit numquam reprehenderit accusamus id
              voluptate magni odit mollitia. Esse sunt omnis iste voluptatem
              exercitationem numquam, rerum porro quis. Lorem ipsum, dolor sit
              amet consectetur adipisicing elit. Placeat veritatis autem impedit
              numquam reprehenderit accusamus id voluptate magni odit mollitia.
              Esse sunt omnis iste voluptatem exercitationem numquam, rerum
              porro quis. Lorem ipsum, dolor sit amet consectetur adipisicing
              elit. Placeat veritatis autem impedit numquam reprehenderit
              accusamus id voluptate magni odit mollitia. Esse sunt omnis iste
              voluptatem exercitationem numquam, rerum porro quis.
            </div>
            <img src="../assets/Planner.png" class="ml-3 align-self-center" />
          </li>
          <li
            class="media"
            id="hidden"
            data-aos="fade-up"
            data-aos-duration="3000"
            data-aos-ease="ease-in-back"
          >
            <img
              src="../assets/Photographer.png"
              class="mr-3 align-self-center"
            />
            <div class="media-body align-self-center">
              <h5 class="mt-0 mb-1">Lorem ipsum dolor</h5>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat
              veritatis autem impedit numquam reprehenderit accusamus id
              voluptate magni odit mollitia. Esse sunt omnis iste voluptatem
              exercitationem numquam, rerum porro quis.
            </div>
          </li>
          <li
            class="media my-4"
            id="hidden"
            data-aos="fade-up"
            data-aos-duration="3000"
            data-aos-ease="ease-in-back"
          >
            <div class="media-body align-self-center">
              <h5 class="mt-0 mb-1">Lorem ipsum dolor</h5>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat
              veritatis autem impedit numquam reprehenderit accusamus id
              voluptate magni odit mollitia. Esse sunt omnis iste voluptatem
              exercitationem numquam, rerum porro quis. Lorem ipsum, dolor sit
              amet consectetur adipisicing elit. Placeat veritatis autem impedit
              numquam reprehenderit accusamus id voluptate magni odit mollitia.
              Esse sunt omnis iste voluptatem exercitationem numquam, rerum
              porro quis. Lorem ipsum, dolor sit amet consectetur adipisicing
              elit. Placeat veritatis autem impedit numquam reprehenderit
              accusamus id voluptate magni odit mollitia. Esse sunt omnis iste
              voluptatem exercitationem numquam, rerum porro quis.
            </div>
            <img src="../assets/Artist.png" class="ml-3 align-self-center" />
          </li>
          <li
            class="media"
            id="hidden"
            data-aos="fade-up"
            data-aos-duration="3000"
            data-aos-ease="ease-in-back"
          >
            <img src="../assets/Cars.png" class="mr-3 align-self-center" />
            <div class="media-body align-self-center">
              <h5 class="mt-0 mb-1">Lorem ipsum dolor</h5>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat
              veritatis autem impedit numquam reprehenderit accusamus id
              voluptate magni odit mollitia. Esse sunt omnis iste voluptatem
              exercitationem numquam, rerum porro quis.
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!--end of categories section-->

    <hr class="sectioner" />

    <feedback />
  </div>
</template>

<script>
import Feedback from "../components/Local/Feedback.vue";
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import "swiper/swiper-bundle.css";

export default {
  components: {
    Feedback,
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      reviews: {
        reviewer: ["Menna", "Arwa", "Bassant", "Mohamed", "Youssef"],
        content: [
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
          "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat veritatis autem impedit numquam reprehenderit accusamus id voluptate magni odit mollitia. Esse sunt omnis iste voluptatem exercitationem numquam, rerum porro quis.",
        ],
      },
      swiperOption: {
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      },
    };
  },
};
</script>

<style scoped>
/* Reviews CSS */
#topReviews {
  background-color: #6d3572;
  color: white;
}

.author-name {
  font-size: 30px;
}

.swiper {
  height: fit-content;
  padding-bottom: 20px;
}

#reviews {
  padding: 15px;
}

#reviewTitle {
  padding-top: 30px;
  letter-spacing: 6px;
  text-transform: uppercase;
}

#title {
  text-align: justify-center;
  letter-spacing: 6px;
  text-transform: uppercase;
  font-size: 45px;
  padding: 20px;
  color: #555;
}

.review {
  padding: 50px 0;
  color: #555;
}

.review > div {
  max-width: 500px;
  margin: auto;
}

.swiper-slide {
  background: whitesmoke;
  color: #555;
}
/* End Reviews CSS */
/* Start Categories CSS */

#hidden {
  height: 40vh;
  padding: 5px;
  margin: 8px;
}

#categories #reviewTitle {
  font-size: 30px;
  text-align: center;
}

/* End Categories CSS */
</style>