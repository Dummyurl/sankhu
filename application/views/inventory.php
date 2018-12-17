<style>
  #map-table-jana{
    margin: 20px 0px 60px;
    background: #fff;
    overflow: hidden;
  }

  #reportable{
    overflow: auto;
    margin: 0.5em;
  }
  .responstable {
    margin: 1em 0em;
    width: 100%;
    overflow: hidden;
    background: #FFF;
    color: #000;
    border-radius: 0px;
    border: 1px solid #1f5cb2;
    font-size: 16px;
  }
  .responstable tr {
    border: 1px solid #D9E4E6;
  }
  .responstable tr:nth-child(odd) {
    background-color: #EAF3F3;
  }
  .responstable th {
    display: none;
     border: 1px solid transparent;
    background-color: lightslategray;
    color: #FFF;
    padding: 1em;
  }
  .responstable th:first-child {
    display: table-cell;
    text-align: center;
  }
  .responstable th:nth-child(2) {
    display: table-cell;
  }
  .responstable th:nth-child(2) span {
    display: none;
  }
  .responstable th:nth-child(2):after {
    content: attr(data-th);
  }
  @media (min-width: 480px) {
    .responstable th:nth-child(2) span {
      display: block;
    }
    .responstable th:nth-child(2):after {
      display: none;
    }
  }
  .responstable td {
    display: block;
    word-wrap: break-word;
    max-width: 7em;
  }
  .responstable td:first-child {
    display: table-cell;
    text-align: center;
    border-right: 1px solid #D9E4E6;
  }
  @media (min-width: 480px) {
    .responstable td {
      border: 1px solid #D9E4E6;
    }
  }
  .responstable th, .responstable td {
    text-align: left;
    margin: .5em 1em;
  }
  @media (min-width: 480px) {
    .responstable th, .responstable td {
      display: table-cell;
      padding: 0.3em;
    }
  }
  #map-table-jana .text-center h3{

  }

  #map-table-jana .report-down{
    padding: 12px;
    border-bottom: 1px solid #e7e7e7;
  }

  #map-table-jana .repo_filter{
    margin: 30px auto 15px;
  }

  .upalab{
    margin: 20px 0px 60px;
  }

  .upalab .list-group-flush li a {
    color: #333;
  }
  .available{
    margin: 30px 0px;
  }
  .nav-sidebar ul li{
  padding: 0;
  }

  .nav-sidebar ul li a{
  display: block;
  padding: .75rem 1.25rem;
  }

  .nav-sidebar ul li a.active{
  background: rgba(32,87,175,.9);
  color: #FFF;
  }
</style>
<div class="available">
<div class="container">
  <div class="row">
   <!-- left pane -->
   <div class="col-md-3">
     <div class="upalab">
      <div class="card">
        <!-- <div class="card-header bg-primary" style="color:#fff;">
          <h6>उपलब्ध उद्धार सामग्री</h6>
        </div> -->
        <nav class="nav-sidebar">
          <ul class="list-group list-group-flush nav tabs">
            <li  class="list-group-item "><a href="#tab1" data-toggle="tab" class="active"> खाद्य सामग्री 
              <!-- <span class="badge badge-primary badge-pill pull-right">14</span> -->
            </a></li>
            <li class="list-group-item"><a  href="#tab2" data-toggle="tab">गैरखाद्ध्य सामग्री 
              <!-- <span class="badge badge-primary badge-pill pull-right">14</span> -->
            </a></li>
            <li class="list-group-item"><a href="#tab3" data-toggle="tab">खोज तथा उद्धार सामग्री 
              <!-- <span class="badge badge-primary badge-pill pull-right">14</span> -->
            </a></li>
            <li class="list-group-item"><a  href="#tab4" data-toggle="tab" href="#">खाद्य सामग्री 
              <!-- <span class="badge badge-primary badge-pill pull-right">14</span> -->
            </a></li>
            <li class="list-group-item"><a  href="#tab5" data-toggle="tab" href="#">गैरखाद्ध्य सामग्री 
              <!-- <span class="badge badge-primary badge-pill pull-right">14</span> -->
            </a></li>
            <li class="list-group-item"><a  href="#tab6" data-toggle="tab" href="#">खोज तथा उद्धार सामग्री 
              <!-- <span class="badge badge-primary badge-pill pull-right">14</span> -->
            </a></li>
          </ul>
        </nav>
      </div>
    </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content">
          <div class="tab-pane show active" id="tab1">
            <div id="map-table-jana">
              <div class="row">
                <div class="col-md-12" style="background: #1f5cb2; color: #fff;">
                  <div class="report-down">
                    <div class="text-center"><h6>खाद्ध्य सामग्रीको सुची</h6></div>
                  </div>
                </div>
              </div>
              <div class="row" id="reportable">
               <!-- responsive table for displaying contact directory -->
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th><strong>#</strong></th>
                      <th data-th="Inventory details"><strong>सामाग्रीको नाम</strong></th>
                      <th><strong>सामाग्री भएको संस्था</strong></th>
                      <th><strong>सम्पर्क व्यक्ति</strong></th>
                      <th><strong>परिमाण </strong></th>
                      <th><strong>क्षमता</strong></th>
                      <th><strong>फोन नं</strong></th>
                      <th><strong>ठेगाना</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>रबर बुट</td>
                      <td>स प्र बल ज्वालामाइ गण<br>राप्ती गाउपलिका </td>
                      <td>जय बहादुर खड्का </td>
                      <td>30</td>
                      <td>30</td>
                      <td>9851272051</td>
                      <td>काठमाडौं</td>
                    </tr>
                     <tr>
                      <td>1</td>
                      <td>रबर बुट</td>
                      <td>स प्र बल ज्वालामाइ गण<br>राप्ती गाउपलिका </td>
                      <td>जय बहादुर खड्का </td>
                       <td>30</td>
                      <td>30</td>
                      <td>9851272051</td>
                      <td>काठमाडौं</td>
                    </tr>
                  </tbody>
                </table>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-style" id="tab2">
              <div id="map-table-jana">
              <div class="row">
                <div class="col-md-12" style="background: #1f5cb2; color: #fff;">
                  <div class="report-down">
                    <div class="text-center"><h6>गैरखाद्ध्य सामग्री</h6></div>
                  </div>
                </div>
              </div>
              <div class="row" id="reportable">
               <!-- responsive table for displaying contact directory -->
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th><strong>#</strong></th>
                      <th data-th="Inventory details"><strong>सामाग्रीको नाम</strong></th>
                      <th><strong>सामाग्री भएको संस्था</strong></th>
                      <th><strong>सम्पर्क व्यक्ति</strong></th>
                      <th><strong>परिमाण </strong></th>
                      <th><strong>क्षमता</strong></th>
                      <th><strong>फोन नं</strong></th>
                      <th><strong>ठेगाना</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-style" id="tab3">
              <div id="map-table-jana">
              <div class="row">
                <div class="col-md-12" style="background: #1f5cb2; color: #fff;">
                  <div class="report-down">
                    <div class="text-center"><h6>खाद्ध्य सामग्रीको सुची</h6></div>
                  </div>
                </div>
              </div>
              <div class="row" id="reportable">
               <!-- responsive table for displaying contact directory -->
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th><strong>#</strong></th>
                      <th data-th="Inventory details"><strong>सामाग्रीको नाम</strong></th>
                      <th><strong>सामाग्री भएको संस्था</strong></th>
                      <th><strong>सम्पर्क व्यक्ति</strong></th>
                      <th><strong>परिमाण </strong></th>
                      <th><strong>क्षमता</strong></th>
                      <th><strong>फोन नं</strong></th>
                      <th><strong>ठेगाना</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-style" id="tab4">
              <div id="map-table-jana">
              <div class="row">
                <div class="col-md-12" style="background: #1f5cb2; color: #fff;">
                  <div class="report-down">
                    <div class="text-center"><h6>खोज तथा उद्धार सामग्री </h6></div>
                  </div>
                </div>
              </div>
              <div class="row" id="reportable">
               <!-- responsive table for displaying contact directory -->
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th><strong>#</strong></th>
                      <th data-th="Inventory details"><strong>सामाग्रीको नाम</strong></th>
                      <th><strong>सामाग्री भएको संस्था</strong></th>
                      <th><strong>सम्पर्क व्यक्ति</strong></th>
                      <th><strong>परिमाण </strong></th>
                      <th><strong>क्षमता</strong></th>
                      <th><strong>फोन नं</strong></th>
                      <th><strong>ठेगाना</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-style" id="tab5">
              <div id="map-table-jana">
              <div class="row">
                <div class="col-md-12" style="background: #1f5cb2; color: #fff;">
                  <div class="report-down">
                    <div class="text-center"><h6>गैरखाद्ध्य सामग्री</h6></div>
                  </div>
                </div>
              </div>
              <div class="row" id="reportable">
               <!-- responsive table for displaying contact directory -->
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th><strong>#</strong></th>
                      <th data-th="Inventory details"><strong>सामाग्रीको नाम</strong></th>
                      <th><strong>सामाग्री भएको संस्था</strong></th>
                      <th><strong>सम्पर्क व्यक्ति</strong></th>
                      <th><strong>परिमाण </strong></th>
                      <th><strong>क्षमता</strong></th>
                      <th><strong>फोन नं</strong></th>
                      <th><strong>ठेगाना</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-style" id="tab6">
              <div id="map-table-jana">
              <div class="row">
                <div class="col-md-12" style="background: #1f5cb2; color: #fff;">
                  <div class="report-down">
                    <div class="text-center"><h6>खोज तथा उद्धार सामग्री</h6></div>
                  </div>
                </div>
              </div>
              <div class="row" id="reportable">
               <!-- responsive table for displaying contact directory -->
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th><strong>#</strong></th>
                      <th data-th="Inventory details"><strong>सामाग्रीको नाम</strong></th>
                      <th><strong>सामाग्री भएको संस्था</strong></th>
                      <th><strong>सम्पर्क व्यक्ति</strong></th>
                      <th><strong>परिमाण </strong></th>
                      <th><strong>क्षमता</strong></th>
                      <th><strong>फोन नं</strong></th>
                      <th><strong>ठेगाना</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                     <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                       <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>


