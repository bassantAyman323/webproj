<template>
  <div class="photographers">
 <h4 class="date" style="padding:5px">Here is all the photographers<b-icon icon="camera" rotate="90"></b-icon> </h4>
               <div id="example">
               <form id="btns " name="myservices" >
                    <div class="myform ">

                      <input class="form-control  " id="search" v-model="search" type="search" placeholder="Search"  >
                     </div>
                     <h3 class="text-center my-10" v-if="search" >Search results for "{{ search }}"</h3>

               <div >
                      <div class="row" name="first row" >    
                        
                        <div id="demo1" v-for="photographer in filteredphotographers" v-bind:key="photographer.id">   
                          <post4 :post="photographer"></post4>   
                     

                        </div>
                          </div>
                      </div>
          
               </form>     
             </div>             
         </div>

</template>
<script>
 import post4 from "@/components/Local/post4.vue";
export default { 
  components:{
   post4
 },
   data () {
      return {
         search:"",
        photographers:[
        {"message":"Ahmed",
  
            "price":"$19",
            id: 1,
          },
        {"message":"Ali",
   
            "price":"$20",
            id: 2,},
      
      

        ],
  
      }},
          computed: {
           filteredphotographers() {
             let photographers = this.photographers
             let query = this.search
             
             if (query) {
               photographers = photographers.filter(function (row) {
                 return Object.keys(row).some(function (key) {
                   return String(row[key]).toLowerCase().indexOf(query) > -1
                 })
               })
             }
             
             return photographers
           },},
            methods:{
           displayDate:function () {
            var today=new Date();
      var H="Day:"+today.toLocaleDateString()+"\n"+"time:"+ today.toLocaleTimeString();
 
       
            //for doing anytime in specific time in ms
       
          setTimeout(() => {this.displayDate()
            
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

ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
 
}
a {
  color: #42b983;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;

  text-align: center;
  font-family: arial;
  
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
.container{
   color:  rgb(136, 127, 127);
}
#name{
    color:  #6d3572;
}

#demo1{
  color: #6d3572;
 
}
img:hover {
  
    filter: blur(4px);
}
.myform{

  max-width: 100%;
  
  text-align: center;
  font-family: arial;
  padding: 10px;
   margin-left : 50%

}
.demo1{ color:red;
}


a{
  color: #00000030;
  font-size: 1.5em;
}
#search{
  align-content: center;
}
.date{text-align: center;
color: rgb(136, 127, 127) ;}
</style>
