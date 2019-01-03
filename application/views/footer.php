<style type="text/css">
      label > input{ /* HIDE RADIO */
        visibility: hidden; /* Makes input not-clickable */
        position: absolute; /* Remove input from document flow */
      }
      label > input + img{ /* IMAGE STYLES */
        cursor:pointer;
        border:2px solid transparent;
      }
      label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
        border:2px solid #f00;
      }
      div#exampleModal {
          overflow: hidden;
      }
      button.btn.btn-secondary {
          z-index: 0;
      }
</style>
      <footer id="website-footer" class="bg-dark">

        <div class="subscribe-wrap">
          <div class="container">
            <div class="row clearfix">
              <div class="col-md-4">
                <div class="fbox">
                  <h4><?php echo !empty(FOOTER_BIG_EN)?FOOTER_BIG_EN:''; ?></h4>
                  <p>
                  <?php echo !empty(FOOTER_SMALL)?FOOTER_SMALL:'' ?> &nbsp;
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="fbox">
                  <h4><?php echo !empty(SUBSCRIBE)?SUBSCRIBE:'' ?></h4>
                  <form action="" method="">
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" placeholder="<?php echo !empty(EMAIL)?EMAIL:'' ?>" aria-label="Email Address" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                            <button class="btn btn-secondary" name="submit"  type="submit" data-toggle="modal" data-target="#exampleModal"><?php echo !empty(SUBSCRIBE_BTN)?SUBSCRIBE_BTN:'' ?></button>

                        <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel" style="color: #111">Subscribe</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" style="margin-left: 25px;">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <form>
                                        <label>
                                          <input id="fb3" type="radio" name="fb" value="med" />
                                          <img src="<?php echo base_url();?>assets/img/dataset.png"  alt="Logo" height="90" >
                                          <p class="text-center" style="color: #111"> Datasets</p>
                                        </label>
                                      </div>

                                      <div class="col-md-6">
                                       <label>
                                        <input id="fb3" type="radio" name="fb" value="med" />
                                        <img src="<?php echo base_url();?>assets/img/dataset.png" alt="Logo" height="90">
                                        <p class="text-center"  style="color: #111"> Maps</p>
                                      </label>
                                    </div>

                                    <div class="col-md-6">
                                     <label>
                                      <input id="fb3" type="radio" name="fb" value="med" />
                                      <img src="<?php echo base_url();?>assets/img/dataset.png" alt="Logo" height="90">
                                      <p class="text-center" style="color: #111"> Publications</p>
                                    </label>
                                  </div>

                                  <div class="col-md-6">
                                   <label>
                                    <input id="fb3" type="radio" name="fb" value="med" />
                                    <img src="<?php echo base_url();?>assets/img/dataset.png" alt="Logo" height="90">
                                    <p class="text-center" style="color: #111">Contact</p>
                                  </label>
                                </div>

                                <div class="all-select" style="color: #111">
                                  <input type="radio" name="allselect"> Subscribe All
                                </div>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">Subscribe</button>
                            </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-4">
                <div class="fbox">
                  <h4><?php echo !empty(IMP_LINK)?IMP_LINK:'' ?></h4>
                  <ul class="list-group">
                    <li><i class="la la-caret-right"></i><a href="<?php echo !empty(LINK_ONE)?LINK_ONE:'' ?>" target="_blank"><?php echo !empty(ONE_NAME)?ONE_NAME:'' ?></a></li>
                    <li><i class="la la-caret-right"></i><a href="<?php echo !empty(LINK_TWO)?LINK_TWO:'' ?>" target="_blank"><?php echo !empty(TWO_NAME)?TWO_NAME:'' ?></a></li>
                    <li><i class="la la-caret-right"></i><a href="<?php echo !empty(LINK_THREE)?LINK_THREE:'' ?>" target="_blank"><?php echo !empty(NAME_THREE)?NAME_THREE:'' ?></a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-6 sec-left">
                <p class="margin-top">
                  &copy; <?php echo !empty(COPY_DATE)?COPY_DATE:'' ?> <a href="#" title=""></a><?php echo !empty(COPY_TEXT)?COPY_TEXT:'' ?>
                </p>
              </div>
              <div class="col-md-6 sec-center">
                <p class="margin-top">
                Developed by: <a href="http://naxa.com.np/"> NAXA </a> under PRAGATI Project
                </p>
              </div>
              <div class="col-md-6 sec-right">
                <p class="margin-top social-icons">

                <?php if(FACEBOOK): ?>
                  <a href="<?php echo FACEBOOK ?>" title=""><i class="fa fa-facebook"></i></a>
                <?php endif;
                 if(TWITTER): ?>
                  <a href="<?php echo TWITTER ?>" title=""><i class="fa fa-twitter"></i></a>
                <?php endif;
                  if(GOOGLE): ?>
                  <a href="<?php echo GOOGLE ?>" title=""><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>




      <script type="text/javascript">
          document.onreadystatechange = function () {
            var state = document.readyState
            if (state == 'interactive') {
             // document.getElementById('contents').style.visibility="hidden";
           } else if (state == 'complete') {
            setTimeout(function(){
             document.getElementById('interactive');
             document.getElementById('load').style.visibility="hidden";
             document.getElementById('website-header').style.visibility="visible";
           },1000);
          }
        }
      </script>

      <!--counter-->
      <script type="text/javascript">

      $(document).ready(function() {
        $('#hydropower').DataTable({
           dom: 'Bfrtip',



        });

        $('#hydropower2').DataTable({
           dom: 'Bfrtip',


           buttons: [
        'copy','csv', 'excel', 'pdf', 'print'

   ]



        });





      } );
      </script>

  </body>

</html>
