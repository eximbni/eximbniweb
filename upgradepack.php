<?php
require ("header.php");
?>
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">   
        <link rel="stylesheet" href="dist/css/select2.css"> 
        
<style type="text/css">
   
.select2-purple .select2-dropdown .select2-search__field:focus,.select2-container--default .select2-purple .select2-search--inline .select2-search__field:focus,.select2-container--default .select2-purple.select2-dropdown .select2-search__field:focus,.select2-purple .select2-container--default .select2-dropdown .select2-search__field:focus,.select2-purple .select2-container--default .select2-search--inline .select2-search__field:focus,.select2-purple .select2-container--default.select2-dropdown .select2-search__field:focus{border:1px solid #b8a2e0}.select2-container--default .select2-purple .select2-results__option--highlighted,.select2-purple .select2-container--default .select2-results__option--highlighted{background-color:#f15822;color:#fff}.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected],.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected]:hover,.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected],.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected]:hover{background-color:#f15822;color:#fff}.select2-container--default .select2-purple .select2-selection--multiple:focus,.select2-purple .select2-container--default .select2-selection--multiple:focus{border-color:#f15822}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:#f15822;border-color:#643ab0;color:#fff}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{color:rgba(255,255,255,.7)}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove:hover,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover{color:#fff}.select2-container--default .select2-purple.select2-container--focus .select2-selection--multiple;

.price-header
{
  background: red; padding: 10px; text-align: center; box-shadow: 1px 2px 2px rgba(51, 51, 51, 0.5); font-size: 16px; text-transform: uppercase;
}
.price-desc
{
      text-align: center;
    color: #2196F3;
    font-size: 16px;
    padding: 10px;
    background: #fff;
    margin: 1px 10px;
}
label
{
	color : #000;
	float : left;
}
</style>


          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="eximApp" ng-controller="dashCtrl">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Upgrade Packages</li>
                    </ol>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

<!--  Start Main Containt Inserted Here Ganesh  -->

    <!-- Main content -->



    <section class="content" ng-app="eximApp" > 

      <div class="container-fluid" ng-controller="chapterCtrl">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Upgrade Packages</h3><br>
                <span class="text-success">{{ message }}</span>
              </div>
            <form name="addpackageForm" >

                <div class="card-body" style="overflow: auto;">
                  <div class="row">
                    <div class="form-group col-md-12">
                       <div class="table-responsive">
       <table width="100%">
         <tbody>
                                  <tr class="row">
									  <th width="33%" class="col-md-2" style="background: red; padding: 10px; text-align: center; box-shadow: 1px 2px 2px rgba(51, 51, 51, 0.5); font-size: 16px; text-transform: uppercase; margin: 0 10px;"> Package Plan Features </th> 
                                      <th width="33%" class="col-md-3" style="background: red; padding: 10px; text-align: center; box-shadow: 1px 2px 2px rgba(51, 51, 51, 0.5); font-size: 16px; text-transform: uppercase; margin: 0 10px;" ng-repeat="heads in subscriplist"> {{heads.plan_name}}</th>
                                  </tr>                            
                                  <tr class="row">
                                      <td class="col-md-2 price-desc"> Banners</td>
                                      <td class="col-md-3 price-desc" ng-repeat="banr in subscriplist" > {{banr.banners}} </td>
                                  </tr>
                                  <tr class="row">
									  <td class="col-md-2 price-desc" > Chapters</td>
                                      <td class="col-md-3 price-desc" ng-repeat="cht in subscriplist" > {{cht.chapters}} 
                                          <input type="hidden" id="upgchapter_{{cht.id }}" value="{{ cht.chapters }}">
                                      </td>
                                  </tr>
								  <tr class="row">
								      <td class="col-md-2 price-desc" > Select Option</td>
                                      <td class="col-md-3 price-desc" ng-repeat="cht in subscriplist" > {{cht.selectOption}} 
                                          <input type="hidden" id="upgchapter_{{cht.id }}" value="{{ cht.selectOption }}">
                                      </td>
                                  </tr>
                                  <tr class="row">
									  <td class="col-md-2 price-desc"> HS Codes Access</td>
                                      <td class="col-md-3 price-desc" ng-repeat="hco in subscriplist" > {{hco.hscodes}} 
                                          <input type="hidden" id="upghscode_{{hco.id }}" value="{{ hco.hscodes }}">
                                      </td>
                                  </tr>  
                                  <tr class="row">
									  <td class="col-md-2 price-desc" > Chat Option</td>
                                      <td class="col-md-3 price-desc" ng-repeat="cha in subscriplist"><span ng-if="(cha.chat=='1')">YES</span><span ng-if="(cha.chat=='0')">NO</span></td>
                                  </tr>
								  <tr class="row">
									  <td class="col-md-2 price-desc" > Buyers</td>
                                      <td class="col-md-3 price-desc" ng-repeat="cha in subscriplist" > {{cha.chat_buyers}} </td>
                                  </tr>
								  <tr class="row">
									  <td class="col-md-2 price-desc" > Sellers</td>
                                      <td class="col-md-3 price-desc" ng-repeat="cha in subscriplist" > {{cha.chat_sellers}} </td>
                                  </tr>
								  <tr class="row">
									  <td class="col-md-2 price-desc" > Audio & Video Calls</td>
                                      <td class="col-md-3 price-desc" ng-repeat="cha in subscriplist" > {{cha.chat_audioVideoCalls}} </td>
                                  </tr>
								  <tr class="row">
									  <td class="col-md-2 price-desc"> Webinar</td>
                                      <td class="col-md-3 price-desc" ng-repeat="webi in subscriplist" > {{webi.webinar}} </td>
                                  </tr>
                                  
                                  <tr class="row">
									  <td class="col-md-2 price-desc"> Inbox</td>
                                      <td class="col-md-3 price-desc" ng-repeat="inb in subscriplist" > {{inb.inbox}} </td>
                                  </tr> 

                                  <tr class="row">
									  <td class="col-md-2 price-desc"> Lead Posting</td>
                                      <td class="col-md-3 price-desc" ng-repeat="lpost in subscriplist" > {{lpost.leadpost}} </td>
                                  </tr>
								  <tr class="row">
									  <td class="col-md-2 price-desc"> Buy Leads</td>
                                      <td class="col-md-3 price-desc" ng-repeat="lpost in subscriplist" > {{lpost.buyLeads}} </td>
                                  </tr>
								  <tr class="row">
									  <td class="col-md-2 price-desc"> Sell Leads</td>
                                      <td class="col-md-3 price-desc" ng-repeat="lpost in subscriplist" > {{lpost.sellLeads}} </td>
                                  </tr>

                                  <tr class="row">
									  <td class="col-md-2 price-desc"> RFQ</td>
                                      <td class="col-md-3 price-desc" ng-repeat="lpost in subscriplist" > {{lpost.rfq}} </td>
                                  </tr>
								  
								  <tr class="row">
									  <td class="col-md-2 price-desc"> Credits</td>
                                      <td class="col-md-3 price-desc" ng-repeat="crd in subscriplist" > {{crd.credits}} 
                                          <input type="hidden" id="cred_{{crd.id }}" value="{{ crd.credits }}">
                                          <input type="hidden" id="plancost_A{{crd.id }}" value="{{ crd.plan_cost }}">
                                          <input type="hidden" id="plancost_M{{crd.id }}" value="{{ crd.monthly_cost }}">
                                      </td>
                                  </tr>
                                  <tr class="row">
									  <td class="col-md-2 price-desc"> Duration</td>
                                      <td class="col-md-3 price-desc" ng-repeat="pland in subscriplist" > {{pland.plan_duration}} 
                                          <input type="hidden" id="dura_{{pland.id }}" value="{{ pland.plan_duration }}">
                                      </td>
                                  </tr>  
                                  

                                  <tr class="row" ng-if="(subscription_id =='40')">
                                      <td class="col-md-2 price-desc"> </td>

                                      <td class="col-md-3 price-desc" ng-repeat="btnid in subscriplist" > <input type="button"  value="GET" class="btn btn-success btn-block" ng-click="getcol(btnid.id)"> </td>
                                  
                                  </tr> 
                                  <tr class="row" ng-if="!(subscription_id =='40')">
                                      <td class="col-md-2 price-desc"> </td>

                                      <td class="col-md-3 price-desc" ng-repeat="btnid in subscriplist" > <input type="button"  value="GET" class="btn btn-success btn-block" ng-click="getcol(btnid.id)" ng-disabled="!(btnid.id > subscription_id)"> </td>
                                  
                                  </tr> 

                              </tbody>
                        </table>

                          <div class="upgrade">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <label > Select Chapters * <span class="text-success" id="maxchap" >*</span></label> <span class="text-danger" id="error_maxchap"></span>
                              <div class="select2-purple">
                                <select class="select2" multiple="multiple" data-placeholder="Select Chapters" data-dropdown-css-class="select2-purple" name="chapter[]" id="chapter" ng-model="subcribechapters" onchange="return checkOptions()" style="width:100%"> <!-- ng-change="gethscode()" -->
                                  <option value="" >Select Chapters</option>
                                  <option ng-repeat="chap in subcrichapterlist" value="{{ chap.id }}" > {{ chap.chapter_name }}</option>                                                                      
                                </select>
                                <button class="btn btn-success pull-right" onclick="cancelSelection()" style="display:none;" id="cselect">Edit Selection</button>
                              </div>
                                  <input type="hidden" id="chaptermaxlength" ng-model="chaptermaxlength">
                                  <input type="hidden" ng-model="pack_id" id="pack_id">
                                  <input type="hidden" ng-model="duration" id="duration">
                                  <input type="hidden" ng-model="credits" id="credits">
								  <input type="hidden" ng-model="rfq" id="rfq">								  
                                  <input type="hidden" ng-model="selectedchcnt" id="selectedchcnt" >
                                  <input type="hidden" ng-model="ptype" id="ptype" value="Upgrade">
                                  <input type="hidden" ng-model="plancost" id="plancost" >
                                  <input type="hidden" ng-model="plancostA" id="plancostA" >
                                  <input type="hidden" ng-model="plancostM" id="plancostM" >
                                  <input type="hidden" ng-model="durationA" id="durationA" >
                                  <input type="hidden" ng-model="durationM" id="durationM" >                            
                            </div>
                            <!-- /.form-group -->
                          </div>

                           <div class="upgrade paymentplan">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label>Select Payment Plan* </label> <span class="text-danger" id="error_pay_plan"></span>
                              <div class="row form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                                  <label >
                                    <input type="radio" class="paymentplan" name="paymentplan" id="paymentplanA" value="1"> Annual ( <span id="plancostAText"> </span> )
                                  </label>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                                  <label >
                                    <input type="radio" class="paymentplan" name="paymentplan" id="paymentplanM" value="0"> Month ( <span id="plancostMText"> </span> )
                                  </label>
                                </div>

                              </div>
                            </div> 
                          </div>

                          <div class="row upgrade">
                              <div class="col-md-12">
                                  <button type="button" class="btn btn-block btn-success pull-right" ng-click="addpackage()" >Upgrade Package</button>
                              </div> 
                          </div>    

                       </div>
                    </div>   
                  </div>
               </div>     

            </form>
            
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!--  Start Main Containt Inserted Here Ganesh  -->




          </div>

  <!-- /.content-wrapper -->
        <script type="text/javascript"  src="js/jquery.min.js"></script>
        <!-- Select2 -->
        <script src="plugins/select2/js/select2.full.min.js"></script>           
<script type="text/javascript">

$(document).ready(function(){
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    }); 

});

function cancelSelection(){
    document.getElementById("chapter").removeAttribute("disabled");
}

function checkOptions(){
   
    var chmaxlen = $("#chaptermaxlength").val();
      // console.log("on chapter click : ",chmaxlen);
      // console.log(" => ",$('.select2-selection__choice').length);

    if (chmaxlen <= $('.select2-selection__choice').length) { 
              
        $("#chapter").attr('disabled','disabled');
        document.getElementById("cselect").style.display='block';
        $("#error_maxchap").html('');
        //$("#error_maxchap").html("You have exceeded max number of Chapters");
        //alert("You have exceeded max number of Chapters");
        return false;
          
    }else{
          
          if ($(this).is(':selected')){
              var chacount = ($(this).siblings(":selected").length) + 1;
               $("#selectedchcnt").val(chacount);              
          }else{
             var deselect = ($("#selectedchcnt").val()) -1 ;
              $("#selectedchcnt").val(deselect);
             var deselectedattr = $(this).attr('value');               
          }
          $("#error_maxchap").html('');
        }

}

</script>         
<script>
$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        /* Applying the top margin on modal dialog to align it vertically center */
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   
});
</script>
<?php
require ("footer.php");
?>