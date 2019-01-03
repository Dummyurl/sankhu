<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> -->
<style type="text/css">
.input-group-addon {
    position: absolute;
    right: 10px;
    bottom: 13px;
    z-index: 2;
  }
.publish-srch {
    padding: 35px;
    border-bottom: 1px solid #eee;
}
.publish{
  padding: 35px;
}
.publish img{
  width: 100%;
  height: auto;
  object-fit: cover;
}
.publish h5{
  font-weight: bold;
  border-bottom: 1px solid #ccc;
}

.publish .publish-des{
  text-align: justify;
}



#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
.publication-item .thumb{
  height: 120px;
}
.publication-item .thumb img{

}

</style>

<?php

$pub_cat_nep='  <option value=0>सबै</option>
 <option value="muni_pub">नगरपालिकाको प्रकाशनहरु</option>
 <option value="law_act">नियम कानुनहरु</option>
 <option value="plan_politics">योजनाहरु तथा नीतिहरु</option>
 <option value="others">अन्य</option>';

$pub_cat_en='<option value=0>ALL</option>
 <option value="muni_pub">Municipal Publications</option>
 <option value="law_act">Laws and Acts</option>
 <option value="plan_politics">Plans and Policies</option>
 <option value="others">Others</option>';

 ?>


<div class="container" >
	<!-- search bar -->
  <div class="mt-2 pt-4 pb-4">
            <div class="row">
              <div class="col-md-6">
                <label for="pub_cat"><strong><?php echo $site_info['publ_type'] ?></strong></label>
              </div>
              <div class="col-md-6">
                <label for="myInput"><strong><?php echo $site_info['search'] ?></strong></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <select class="form-control" id="pub_cat">

                  <?php if ($pub_lang=='en') {
                    echo $pub_cat_en;
                  }else {
                  echo $pub_cat_nep;
                  } ?>

                </select>
              </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <input  class="form-control" id="myInput" onkeyup="myFunction()">
              </div>
              </div>
            </div>
          </div>







<!-- data Column -->
<div class="row justify-content-center mb-4 pb-3" id="filter_pub">


    <?php foreach($data as $d ){ ?>


  <div class="col-md-4 col-xl-3">
              <div class="publication-item padding bg-white" data-mh="publication">
                <div class="thumb"><img src="<?php echo base_url()?>/uploads/icons/doc.png" ></div>
                <h6 class="name" id="<?php echo $d['id'] ?>"><?php echo $d['title']?></h6>
                <p><?php echo $d['summary']?></p>
                <a href="<?php echo base_url()?>download?file=<?php echo $d['file']?> && title=<?php echo $d['title']?>" class="btn btn-primary btn-block"><?php echo $site_info['download'] ?> <i class="la la-download"></i></a>
              </div>
            </div>

  <?php } ?>


</div>


<!-- data Column -->

</div>


<script type="text/javascript">

function myFunction() {



  // Declare variables
  var input, filter, div, h6, a, i;
  input = document.getElementById('myInput');



  filter = input.value.toUpperCase();

  div = document.getElementsByClassName("myUL");

  h6 = document.getElementsByTagName('h6');


  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < h6.length; i++) {
      // a = h6[i].getElementsByTagName("a")[0];

      if (h6[i].innerHTML.toUpperCase().indexOf(filter) > -1) {

          $("#"+h6[i].id).parent().parent().css('display','');
      } else {

              $("#"+h6[i].id).parent().parent().css('display','none');
      }
  }
}

$('#pub_cat').change(function(){

var category = $(this).val();
$.ajax({
  type: "GET",
  //  data: name,
  url:  "NewsletterController/get_category_pub?cat="+category,
  beforeSend: function() {
      $('#filter_pub').empty();
      $('#filter_pub').html('<h2>Loading</h2>');
  },
  complete: function() {
    // $('#filter_pub').empty();
    // $('#filter_pub').append('<h2>Loading</h2>');
  },
  success: function (result) {

    $('#filter_pub').html('');


  var data = JSON.parse(result);
  console.log(data.length);
//console.log (data[0].summary);
  var i;


  for(i=0; i<data.length; i++){
      var div_pub = "";
    console.log(data.length);



div_pub +='<div class="col-md-4 col-xl-3">';
              div_pub +='<div class="publication-item" data-mh="publication">';
                div_pub +='<div class="thumb"><img src="'+data[i].photo+'"></div>';
                div_pub +='<h6 class="name" id="'+data[i].id+'">'+data[i].title+'</h6>';
                div_pub +='<p>'+data[i].summary+'</p>';
                div_pub +='<a href="<?php echo base_url()?>download?file=<?php echo $d['file']?> && title="'+data[i].title+'" class="btn btn-primary btn-block">डाउनलोड <i class="la la-download"></i></a>';
              div_pub +='</div>';
            div_pub +='</div>';



$('#filter_pub').append(div_pub);
console.log(div_pub);
}


  }

})
});

</script>
