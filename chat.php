<?php
    include("config.php");
    if(isset($_POST['chatroom_name'])){
        
    $uploaddir = 'api/uploads/';
    $filename = $_POST["user_ids"].$_FILES['profileimg']['name'];

    if ($_FILES["profileimg"]["size"] > 25000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    echo $uploadfile = $uploaddir.$_POST["user_ids"].basename($_FILES['profileimg']['name']);
    /* Upload file */
    if (move_uploaded_file($_FILES['profileimg']['tmp_name'], $uploadfile)) {
        //move_uploaded_file($_FILES['bannerimg']['tmp_name'],$uploadfile);
 
        $mime = $_FILES['profileimg']['type'];
        if(strstr($mime, "video/")){
            $filetype = "video";
        }else if(strstr($mime, "image/")){
            $filetype = "image";
        }else if(strstr($mime, "audio/")){
            $filetype = "audio";
        }else if(strstr($mime, "application/")){
            $filetype = "doc";
        }else{
            $filetype = $mime;
        } 
        
        $chatroom = $_POST['chatroom_name'];
    	$posted_by = $_POST["user_ids"];
    	$other_id = $_POST["other_ids"];
    	$file_path = $filename;
    	$file_type = $filetype;
    	$posted_time = date("d-m-y H:i:s");
    	$addchat = "insert into chatmessages (chatroom,posted_by,other_id,file_path,posted_time,file_type) values ('$chatroom','$posted_by','$other_id','$file_path','$posted_time','$file_type')";
    	$res = mysqli_query($conn,$addchat);
    	if($res){
    	    $outp=1;
    	}
    	else{
    	    $outp=0;
    	}   	    
    	    
		
    	}
		else{
			//echo "File Not Uploaded. Please try again.";
		}
    }

    require("header.php");
?>

        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">   
        <link rel="stylesheet" href="dist/css/select2.css"> 
 <style type="text/css">
   
.select2-purple .select2-dropdown .select2-search__field:focus,.select2-container--default .select2-purple .select2-search--inline .select2-search__field:focus,.select2-container--default .select2-purple.select2-dropdown .select2-search__field:focus,.select2-purple .select2-container--default .select2-dropdown .select2-search__field:focus,.select2-purple .select2-container--default .select2-search--inline .select2-search__field:focus,.select2-purple .select2-container--default.select2-dropdown .select2-search__field:focus{border:1px solid #b8a2e0}.select2-container--default .select2-purple .select2-results__option--highlighted,.select2-purple .select2-container--default .select2-results__option--highlighted{background-color:#f15822;color:#fff}.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected],.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected]:hover,.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected],.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected]:hover{background-color:#f15822;color:#fff}.select2-container--default .select2-purple .select2-selection--multiple:focus,.select2-purple .select2-container--default .select2-selection--multiple:focus{border-color:#f15822}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:#f15822;border-color:#643ab0;color:#fff}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{color:rgba(255,255,255,.7)}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove:hover,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover{color:#fff}.select2-container--default .select2-purple.select2-container--focus .select2-selection--multiple;

</style>
<style type="text/css">
	.card-row {
/*        margin-bottom: 2%; */

    margin: 8px;
    border-radius: 2px;
    width: calc(100% - 24px);
    background: #fff;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    
    }
    
	
    .search{
        padding: 4px 20px;
        border-radius: 0px;
        background-position: left 4px center;
        /*font-size: 1.2rem;*/
        font-weight: 200;
       /* line-height: 1rem;*/
        color: #141414;
        background-color: #fff;
        
        border-radius: 30px !important;
        /*box-shadow: none !important;*/
        border: 1px solid #a5a5a5;      
        
        display: block;
        width: 98%;
        /* border: 0;*/
        font-family: inherit;
    
    }

    .btncls1{
        color: #fff;
        border-radius: 64px;
        padding: 0 0.6rem; 
        height: 1.9em;
        font-size: 0.9rem;   
        overflow: hidden;    
        font-weight: normal;
        text-transform: uppercase;     
        text-align: center;
        position: relative;
        z-index: 0;
        display: inline-block;
        text-overflow: ellipsis;
        text-transform: none;
        white-space: nowrap;
        cursor: pointer;
        vertical-align: top;
        transition: background-color, opacity 100ms linear;
        user-select: none;
        contain: content;       
        border: 0;
        font-family: inherit;
        font-style: inherit;
        font-variant: inherit;
        line-height: 1;      
    
    }


 .wh{
			height: 50%;
			margin: 0;
			background: #eee;
	       /* background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);*/
		}

		.whchat{
		/*	margin-top: auto;*/
			margin-bottom: auto;
		}
		.wcard{
			height: 500px;
			border-radius: 15px !important;
			/*background-color: rgb(236, 229, 226) !important;*/
			background-color: #e5ddd5;
		}
		.wcontacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.wcard-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
			background-color: #f7f7f7;
		}
	 .wcard-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
			background-color: #f0f0f0;
	}
		.wcontainer{
			align-content: center;
		}
		.whsearch{
			border-radius: 15px 0 0 15px !important;
			/*background-color: rgba(0,0,0,0.3) !important;*/
			border:0 !important;
			color:#919191 !important;
			background-color: #fff !important;
		}
		.whsearch:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.whtype_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
		
		.whtype_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.whattach_btn{
	        border-radius: 15px 0 0 15px !important;
        	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: #919191 !important;
			cursor: pointer;
		}
		
		.whattach_filp_btn{
	        border-radius: 15px 0 0 15px !important;/*
        	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;*/
			color: #919191 !important;
			cursor: pointer;
		}		
		
		.whsend_btn{
	      /*  border-radius: 0 15px 15px 0 !important;*/
	        background-color: #fff !important;
	       /* background-color: rgba(0,0,0,0.3) !important;*/
		/*	border:0 !important;*/
			color: #919191  !important;
			cursor: pointer;
		}
		.whsearch_btn{
			border-radius: 0 15px 15px 0 !important;
			/*background-color: rgba(0,0,0,0.3) !important;*/
			border:0 !important;
			color: #919191  !important;
			cursor: pointer;
			background-color: #fff !important;
		}
		.whcontacts{
			list-style: none;
			padding: 0;
		}
		.whcontacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 1px !important;
			background-color: #fff !important;
		}
	.whactive{
			background-color: rgba(193, 143, 143, 0.3);
	}
		.whuser_img{
			height: 50px;
			width: 50px;
			border:1.5px solid #f5f6fa;
		
		}
		.whuser_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.whimg_cont{
			position: relative;
			height: 50px;
			width: 60px;
	}
	.whimg_cont_msg{
			height: 40px;
			width: 40px;
	}
	.whonline_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.whoffline{
		background-color: #c23616 !important;
	}
	.whuser_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.whuser_info span{
		font-size: 20px;
		color: #303030;
	}
	.whuser_info p{
	font-size: 10px;
	color: #919191;
	/*color: rgba(255,255,255,0.6);*/
	}
	.whvideo_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.whvideo_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.whmsg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #fff;
		padding: 10px;
		color: #303030;
		position: relative;
	}
	.whmsg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #dcf8c6;
		padding: 10px;
		color: #303030;
		position: relative;
	}
	.whmsg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: #919191;
		/* color: rgba(255,255,255,0.5); */
		font-size: 10px;
		width: 80px;
	}
	.whmsg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: #919191;
		font-size: 10px;
		width: 80px;
	}
	.whmsg_head{
		position: relative;
		background-color: #ededed;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}

._1Plpp {
    box-sizing: border-box;
    flex: 1 1 auto;
    font-size: 15px;
    font-weight: normal;
    line-height: 20px;
    min-height: 20px;
    min-width: 0;
    outline: none;
    width: inherit;
    will-change: width;
}

.unreadnoti{
    color: #efe7e7;
    background-color: green;
    padding: 3px;
    padding-right: 4px;
    border-radius: 31%;
    margin-left: 120px;
    font-size: 11px;
}

  /* Messages */
  
  .message {
    color: #000;
    clear: both;
    line-height: 18px;
    font-size: 15px;
    padding: 8px;
    position: relative;
    margin: 8px 0;
    max-width: 85%;
    word-wrap: break-word;
   /* z-index: -1;*/
  }
  
  .message:after {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
  }
  
  .metadata {
    //display: inline-block;
    float: right;
    padding: 0 0 0 7px;
    position: relative;
    bottom: -4px;
  }
  
  .metadata .time {
    color: rgba(0, 0, 0, .45);
    font-size: 11px;
    display: inline-block;
  }

.message:first-child {
    margin: 16px 0 8px;
  }
  
  .message.received {
    background: rgb(255, 255, 255);
    border-radius: 0px 5px 5px 5px;
    float: left;
    
  }
  
  .message.received .metadata {
    padding: 0 0 0 16px;
  }
  
  .message.received:after {
    border-width: 0px 10px 10px 0;
    border-color: transparent rgb(255, 255, 255) transparent transparent;
    top: 0;
    left: -10px;
  }
  
  .message.sent {
    background: #dcf8c6;
    border-radius: 5px 0px 5px 5px;
    float: right;
  }
  
  .message.sent:after {
    border-width: 0px 0 10px 10px;
    border-color: transparent transparent transparent #e1ffc7;
    top: 0;
    right: -10px;
  }
  .text-center
  {
	  color: #000;
  }

</style>
<script src="appJs/chatApp.js"></script>

  <div class="content-wrapper" ng-app="chatPage" ng-controller="chatCtrl">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
               
              <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link" href="#chaptertab" data-toggle="tab"> Chapter </a></li>
                      <li class="nav-item"><a class="nav-link active" href="#chattab" data-toggle="tab"> Chat  </a></li>
                      <li class="nav-item"><a class="nav-link " href="#grouptab" data-toggle="tab"> Group </a></li>
                    </ul>
              </div><!-- /.card-header -->
              <div class="card-body" >
                <div class="tab-content">
	            <div ng-show="showLoader" align="center">
	              <img src="/img/loader1.gif" width="100px" height="100px" > 
	            </div>                
                    <div class="tab-pane" id="chaptertab">
                       <div class="card-body">
                            <input class="search" placeholder="Search" ng-model="chapterssearch" >
                             
                            <div class="row col-lg-12" ng-repeat="chat in chapters | filter:chapterssearch" ng-if="chapters != 0"> 
                                
                                <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" >
                                  <div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #dad8d9; height:30px; padding:0px !important; text-align: center; color:green;">
                                       
                                      <div class="col-6" style="border-right: 0.5px solid grey;"> {{chat.chapter_name}}  </div>
                                      <div class="col-6" >SECTION : {{chat.category_id}} </div>                                   
                                  </div>
                                  <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                      <div class="col-10" > DETAILS : {{chat.ch_description}} </div>
                                      <div class="col-2" > <button type="button" class="btncls1" ng-click="chpaterchatpg(chat.chapter_id)"style="background-color: #DAA520; color:#fff;" >Show Groups</button> </div>
                                  </div>
                                  
                                    <div id="hsn_code{{chat.chapter_id}}"  class="row hsn form-group col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-repeat="hsn in hsncodes track by $index" ng-if="hsn.chapter_id == chat.chapter_id" >
                                        <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" >
                                            <div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #dad8d9; height:30px; padding:0px !important; text-align: center; color:white;">
                                                <div class="col-12" >  {{hsn.english}}  </div>                               
                                            </div>
                                            <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                                <div class="col-3" style="border-right: 0.5px solid grey;"> HSCODE : {{hsn.hscode}}  </div>
                                                <div class="col-3" style="border-right: 0.5px solid grey;"> {{chat.chapter_name}} </div>
                                                <div class="col-3" style="border-right: 0.5px solid grey;"> <b style="color:#95283e">Active users: 0</b> </div>
                                                <div class="col-3" > <b style="color:#2ba306">Online users:0</b> </div>
                                            </div>
                                            <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                                <div class="col-9"  ><div class="text-danger row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-if="chaptuserslist == 'null'" > <span align="center" > No Record Founds  </span></div>
                                             </div>
                                                <div class="col-3" > <button type="button" class="btncls1" ng-click="getHsnUsers(chat.chapter_id,hsn.hscode)" style="background-color: #DAA520; color:#fff;" >Show Group Users</button> </div>
                                            </div>

                                            <div id="u{{hsn.hscode}}"  class="row chapthsns_s form-group col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-repeat="user in chaptuserslist track by $index" ng-if="chaptuserslist !='null' " >
                                                <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" >
                                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                                        <div class="col-3"><img src="/img/Headshot.svg" style="height: 65px; width: 100px;"> </div>
                                                        <div class="col-7">
                                                            <span ng-if="user.is_online==1" style="background-color:green;"><input type="radio" checked> </span>
                                                            <span ng-if="user.is_online!=1" style="background-color:red;"> <input type="radio" selected></span>
                                                                 XXXXXXXXXX  <br> Last Active : {{user.last_active}} <br> Leads Posted last 30 Days : {{user.postedleads}}  <br>  User Type : {{user.user_type}}
                                                                 
                                                        </div>
                                                        <div class="col-2">
                                                            
                                                            <button type="button" class="btncls1" ng-click="mychatpg(user.id)"style="background-color: green; color:#fff;" >+ADD</button> 
                                                        </div>
                                                       
                                                    </div>

                                                </div> 
                                            </div>                                            
                                            
                                        </div> 
                                    </div>
                                </div>
                           </div>
                          
                     </div>                            

                    </div><!-- /chaptertab -->
                    
                    <div class="active tab-pane" id="chattab">
                        <div class="card-body wcard-body" style="felx:0rem; padding:0rem;">
                            <div class="container-fluid wh">
                    			<div class="row">
                    				<div class="col-md-4 col-xl-4 whchat"><div class="wcard mb-sm-3 mb-md-0 whcontacts_card">
                    					<div class="card-header wcard-header">
                    						<div class="input-group" style="background-color:#fff;">
                    							<input type="text" placeholder="Search..." ng-model="chatsearch" class="form-control whsearch">
                    							<div class="input-group-prepend">
                    								<span class="input-group-text whsearch_btn"><i class="fas fa-search"></i></span>
                    							</div>
                    						</div>
                    					</div>
                    					<div class="card-body contacts_body wcard-body wcontacts_body">
                    						<ui class="whcontacts" ng-repeat="sn in schat  | filter : chatsearch">
                    						<li class="whactive">
                    							<div class="d-flex bd-highlight" ng-click="getchatmsg(sn)">
                    								<div class="whimg_cont">
                    								    <div ng-if="sn.user_image==0">
                    								        <p style="background: red; color:#fff; text-align: center; width: 40px; height: 40px; padding:7px; margin:5px; border-radius:50%;">{{sn.business_name.substring(0, 1)}}</p>
                    								    </div>
                    								    <div ng-if="sn.user_image!=0">
                    								        <img style="width:40px; height:40px; border-radius: 50%; margin:4px;" src="https://eximbin.com/api/uploads/{{sn.user_image}}">
                    								    </div>
                    									 
                    									<span>{{sn.business_name}}</span> 
                    									<span class="whonline_icon" ng-if="sn.chat_status=='online'"></span>
                    									<span class="whonline_icon whoffline" ng-if="sn.chat_status!='online'"></span>
                    								</div>
                    								<div class="whuser_info">
                    									<span>{{sn.business_name}}</span> 
                    									<p>{{sn.business_name}} is <font ng-if="sn.chat_status=='online'"> online </font> <font ng-if="sn.chat_status!='online'"> Offline </font> <font ng-if="sn.unread_messages > 0" class="unreadnoti">{{sn.unread_messages}}</font></p>
                    									
                    								</div>
                    							</div>
                    						</li>
                    						</ui>
                    					</div>
                    					<div class="card-footer wcard-footer"></div>
                    				</div></div>
                    				<div class="col-md-8 col-xl-8 whchat">
                    					<div class="card wcard">
                    						<div class="card-header wcard-header whmsg_head">
                    							<div class="d-flex bd-highlight" style="height:45px;">
                    								<div class="whimg_cont">
        
                    									<div ng-if="user_image==0">
                    								        <p style="background: red; color:#fff; text-align: center; width: 40px; height: 40px; padding:7px; margin:5px; border-radius:50%;">{{business_name.substring(0, 1)}}</p>
                    								    </div>
                    								    <div ng-if="user_image!=0">
                    								        <img style="width:40px; height:40px; border-radius: 50%; margin:4px;" src="https://eximbin.com/api/uploads/{{user_image}}">
                    								    </div>
                    									<span class="whonline_icon" ng-if="chat_status=='online'"></span>
                    									<span class="whonline_icon whoffline" ng-if="chat_status!='online'"></span>
                    								</div>
                    								<div class="whuser_info col-md-10">
                    								    <span>{{business_name}}</span>
                    									<p>{{chat_status}}</p>
                    								</div>
                    
                    								   <span class="whattach_filp_btn">
                    								       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="uploadattach" name="uploadattach" >
                    								           <i class="fas fa-paperclip" onclick="uploadImage()"></i>
                    								           <input type="file" id="profileimg" style="display: none" name="profileimg" accept="image/gif,image/jpeg,image/jpg,image/png" onchange="uploadfiles()">
                    								           <input type="hidden" name="user_ids" id="user_ids" value="{{user_id}}">
                    								           <input type="hidden" name="other_ids" id="other_ids" value="{{other_id}}">
                    								           <input type="hidden" name="chatroom_name" id="chatroom_name" value="{{chatroom}}">
                    								       </form>
                    								       
                    								    </span> 
                    							</div>
                    							
                    						<!--	<span id="action_menu_btn"><i class="fas fa-ellipsis-v"  style="color: #919191;"></i></span>-->
                    							<div class="action_menu">
                    								<ul>
                    									<li><i class="fas fa-user-circle"></i> View profile</li>
                    									<li><i class="fas fa-users"></i> Add to close friends</li>
                    									<li><i class="fas fa-plus"></i> Add to group</li>
                    									<li><i class="fas fa-ban"></i> Block</li>
                    								</ul>
                    							</div>
                    						</div>
                    						<div class="card-body wcard-body msg_card_body">
                    						    <div ng-repeat="msg in chatdata | orderBy : msg.id " >
                        							<div class="d-flex justify-content-start mb-4" ng-if="user_id != msg.posted_by">
                        								<div class="message received">
                        								    {{ msg.message }}
                        								    <img ng-if="msg.file_type=='image'" src="https://eximbin.com/api/uploads/{{msg.file_path}}" height="200" width="100%"/>
                        									<video ng-if="msg.file_type=='video'" width="320" height="240" controls>
                                                                <source src="https://eximbin.com/api/uploads/{{msg.file_path}}" type="video/mp4">
                                                            </video>
                                                            <a ng-if="msg.file_type=='pdf'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <a ng-if="msg.file_type=='doc'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <span class="metadata"><span class="time">{{ msg.posted_time | date:' hh:mm a'}}</span></span>
                        								</div>
                        							</div>
                        							<div class="d-flex justify-content-end mb-4" ng-if="user_id == msg.posted_by">
                        								<div class="message sent">
                        									{{ msg.message }}
                                                            <img ng-if="msg.file_type=='image'" src="https://eximbin.com/api/uploads/{{msg.file_path}}" height="200" width="100%"/>
                        									<video ng-if="msg.file_type=='video'" width="320" height="240" controls>
                                                                <source src="https://eximbin.com/api/uploads/{{msg.file_path}}" type="video/mp4">
                                                            </video>
                                                            <a ng-if="msg.file_type=='pdf'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <a ng-if="msg.file_type=='doc'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <span class="metadata"><span class="time">{{ msg.posted_time | date:' hh:mm a'}}</span></span>
                        								</div>

                        							</div>
                                                </div>
                    						</div>
                    						<div class="card-footer wcard-footer">
                    							<div class="input-group ">
												<!--<div class="input-group-append">
                    									<span class="input-group-text whattach_btn"><!- -<i class="fas fa-paperclip"></i>- -></span>
                    								</div>-->
                    								<input type="text" ng-model="inputmsg" id="inputmsg" class="form-control _1Plpp" placeholder="Type your message..."> 
                    								<div class="input-group-append">
                    									<span class="input-group-text whsend_btn"><i class="fas fa-location-arrow" ng-click="sendMessage(user_id,chatroom)"></i></span>
                    									<span class="input-group-text whsend_btn"><i class="fas fa-microphone" style="color: #919191;"></i></span>
                    									
                    								</div>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                    			</div>
                    		</div>
                                                
    					</div>
                        
                    </div><!-- /chattab -->

                    <div class="tab-pane" id="grouptab">
                        <div class="card-body wcard-body" style="felx:0rem; padding:0rem;">
                            <div class="container-fluid wh">
                    			<div class="row">
                    				<div class="col-md-4 col-xl-4 whchat"><div class="wcard mb-sm-3 mb-md-0 whcontacts_card">
                    					<div class="card-header wcard-header">
                    						<div class="input-group" style="background-color:#fff;">
                    							<input type="text" placeholder="Search..." ng-model="grpsearch" class="form-control whsearch">
                    							<div class="input-group-prepend">
                    								<span class="input-group-text whsearch_btn"><i class="fas fa-search"></i></span> 
                    							</div>
                    							<div class="input-group-prepend">
                    							    <span class="pull-right btn btn-warning" data-toggle="modal" data-target="#creategroupModal" style="border-radius:50%; color:white;"><i class="fas fa-plus-circle" ></i></span> 
                    							</div>                    							
                    							
                    						</div>
                    					</div>
                    					<div class="card-body contacts_body wcard-body wcontacts_body">
                    						<ui class="whcontacts" ng-repeat="grp in groups | filter : grpsearch">
                    						<li class="whactive">
                    							<div class="d-flex bd-highlight" ng-click="getgrpchatmsg(grp)">
                    								<div class="whimg_cont">
                    									<img src="img/Headshot.svg" class="rounded-circle whuser_img">
<!--                    									<span class="whonline_icon" ng-if="grp.status=='1'"></span>
                    									<span class="whonline_icon whoffline" ng-if="grp.status!='1'"></span>-->
                    								</div>
                    								<div class="whuser_info">
                    									<span>{{grp.chatroom}}</span>
                    									<!--<p>{{grp.chatroom}} is <font ng-if="grp.status=='1'"> Online </font> <font ng-if="grp.status!='1'"> Offline </font></p>-->
                    								</div>
                    							</div>
                    						</li>
                    						</ui>
                    					</div>
                    					<div class="card-footer wcard-footer"></div>
                    				</div></div>
                    				<div class="col-md-8 col-xl-8 whchat">
                    					<div class="card wcard">
                    						<div class="card-header wcard-header whmsg_head">
                    							<div class="d-flex bd-highlight" style="height:45px;">
                    								<div class="whimg_cont">
                    									<img src="img/Headshot.svg" class="rounded-circle whuser_img">
<!--                    									<span class="whonline_icon" ng-if="grpchat_status=='Online'"></span>
                    									<span class="whonline_icon whoffline" ng-if="grpchat_status=='Offline'"></span>-->
                    								</div>
                    								<div class="whuser_info  col-md-10 ">
                    								    <span onclick="showinfomodal()" ng-click="getgroupinfo(grpchatroom)">{{grpchatroom}}</span>
                    									<input type="hidden" id="group_name" name="group_name" value="{{ grpchatroom }}">
                    								</div>
                    <!--								<div class="video_cam">
                    									<span><i class="fas fa-video"></i></span>
                    									<span><i class="fas fa-phone"></i></span>
                    								</div>-->
                    								   <span class="whattach_filp_btn" >
                    								       <i class="fas fa-paperclip" ng-click="uploadgrpImage(grpuser_id,grpchatroom)"></i>
                    								       <input type="file" ng-model="imgattach" id="file_input" style="display: none;"  >
                    								    </span> 
                    							</div>
                    							
                    							<!--<span id="action_menu_btn"><i class="fas fa-ellipsis-v"  style="color: #919191;"></i></span>-->
                    							<div class="action_menu">
                    								<ul>
                    									<li><i class="fas fa-user-circle"></i> View profile</li>
                    									<li><i class="fas fa-users"></i> Add to close friends</li>
                    									<li><i class="fas fa-plus"></i> Add to group</li>
                    									<li><i class="fas fa-ban"></i> Block</li>
                    								</ul>
                    							</div>
                    						</div>
                    						<div class="card-body wcard-body msg_card_body">
                    						    <!--div ng-repeat="msg in grpchatdata | orderBy : msg.id " >
                        							<div class="d-flex justify-content-start mb-4" ng-if="user_id != msg.posted_by">
                        								<div class="whmsg_cotainer">
                        								    {{ msg.message }}
                                                            <img  ng-if="msg.file_type=='image'" src="https://eximbin.com/api/uploads/{{msg.file_path}}" height="200" width="60%"/>
                        									<span class="whmsg_time">{{ msg.posted_time | date:' hh:mm a'}}</span>
                        								</div>
                        							</div>
                        							<div class="d-flex justify-content-end mb-4" ng-if="user_id == msg.posted_by">
                        								<div class="whmsg_cotainer_send">
                        									{{ msg.message }}
                                                            <img  ng-if="msg.file_type=='image'" src="https://eximbin.com/api/uploads/{{msg.file_path}}" height="200" width="100%"/>
                        									<span class="whmsg_time_send">{{ msg.posted_time | date:' hh:mm a'}}</span>
                        								</div>

                        							</div>
                                                </div-->
												<div ng-repeat="msg in grpchatdata | orderBy : msg.id " >
												<div class="d-flex justify-content-start mb-4" ng-if="user_id != msg.posted_by">
                        								<div class="message received">
														<b style="float:left">{{ msg.business_name }}</b><br/>
                        								    {{ msg.message }}
                        								    <img ng-if="msg.file_type=='image'" src="https://eximbin.com/api/uploads/{{msg.file_path}}" height="200" width="100%"/>
                        									<video ng-if="msg.file_type=='video'" width="320" height="240" controls>
                                                                <source src="https://eximbin.com/api/uploads/{{msg.file_path}}" type="video/mp4">
                                                            </video>
                                                            <a ng-if="msg.file_type=='pdf'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <a ng-if="msg.file_type=='doc'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <span class="metadata"><span class="time">{{ msg.posted_time | date:' hh:mm a'}}</span></span>
                        								</div>
                        							</div>
                        							<div class="d-flex justify-content-end mb-4" ng-if="user_id == msg.posted_by">
                        								<div class="message sent">
                        									{{ msg.message }}
                                                            <img ng-if="msg.file_type=='image'" src="https://eximbin.com/api/uploads/{{msg.file_path}}" height="200" width="100%"/>
                        									<video ng-if="msg.file_type=='video'" width="320" height="240" controls>
                                                                <source src="https://eximbin.com/api/uploads/{{msg.file_path}}" type="video/mp4">
                                                            </video>
                                                            <a ng-if="msg.file_type=='pdf'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <a ng-if="msg.file_type=='doc'" href="https://eximbin.com/api/uploads/{{msg.file_path}}"  height="200" width="60%" target="_blank" >{{msg.file_path}}</a>
                                                            <span class="metadata"><span class="time">{{ msg.posted_time | date:' hh:mm a'}}</span></span>
                        								</div>

                        							</div>
                        						</div>
                    						</div>
                    						<div class="card-footer wcard-footer">
                    							<div class="input-group ">
                    <!--								<div class="input-group-append">
                    									<span class="input-group-text whattach_btn"><!- -<i class="fas fa-paperclip"></i>- -></span>
                    								</div>-->
                    								<input type="text" ng-model="inputgrpmsg" id="inputgrpmsg" class="form-control _1Plpp" placeholder="Type your message..."> 
                    								<div class="input-group-append">
                    									<span class="input-group-text whsend_btn"><i class="fas fa-location-arrow" ng-click="sendgrpMessage(user_id,chatroom)"></i></span>
                    									<span class="input-group-text whsend_btn"><i class="fas fa-microphone" style="color: #919191;"></i></span>
                    									
                    								</div>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                    			</div>
                    		</div>
                                                
    					</div>
                        
                        
                    </div><!-- /chattab -->
                    
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

        <!-- Start Create Group Modal -->
        
          <div class="modal fade" id="creategroupModal" role="dialog">
            <div class="modal-dialog modal-md">
            <form action="" method="post">

              <div class="modal-content">
                <div class="modal-header" >
                    <div class="text-center">
                        Create New Group
                    </div> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button>          
                </div>

                <div class="modal-body" >
                    <div class="form-group">
                      <label class="form-label"> Group Name  </label> <span class="red-text" id="errorid"> {{ groupname_error }}</span>
                       <input type="text" class="form-control input" name="groupname" id="groupname" ng-model="groupname"  placeholder="Group Name" required>
                    </div>
                    <div class="form-group">
                      <label class="form-label"> Select Users </label> <span class="red-text" id="use_error"> {{ grpusers_error }}</span>
                        <div class="select2-purple">
                            <select class="select2" multiple="multiple" data-dropdown-css-class="select2-purple" name="grpusers[]" id="grpusers" ng-model="grpusers" data-placeholder="Select Users" style="width:100%" required>
                                <option value="">Select Users</option>
                                <option ng-repeat="use in group_userlists" value="{{use.id}}">{{ use.name }}</option>
                            </select>
        					  
                        </div>              
                    </div>                
                </div>
        
                 <div class="modal-footer">
                    <button type="button" class="btn btn-block" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-block" ng-click=" createGroup()" >Create Group </button>
                    
                </div>                    
            </div>

                
            </form>
              </div>
            </div>
        
        <!-- End Create Group Modal -->
		
		<!-- Start Group Information Modal -->
        
          <div class="modal fade" id="groupinfoModal" role="dialog">
            <div class="modal-dialog modal-md">
            

              <div class="modal-content">
                <div class="modal-header row" style="margin-left: 1%;margin-right: 1%;">
                    <div class="text-center col-8" id="grname" style="font-size: 20px;font-weight: bold;">
						
                    </div>
						<input type="hidden" id="adminno" value="{{ gradm }}">
						<div class="text-center col-4" ng-if="gradm==grusr">
							<button style="float:right;" onclick="showdiv()"><i class="fas fa-plus-circle"></i></button>  
						</div>
                </div>
				
                <div class="modal-body" >
                    <div class="row" ng-repeat="gri in groupinfo">
                      <label class="form-label" style="color:#000;"> {{ gri.name }} </label> <p style="float:right;color:red;" ng-if="gradm==grusr" ng-click="deluser(gri.chatroom,gri.id)"><i class="fa fa-trash" aria-hidden="true"></i></p>
					   
                    </div>                
                </div>
        
                 <div class="modal-footer">
                    <div class="select2-purple" id="grnewmem" style="display:none;float:left">
						<form class="form">
							<select class="form-control select2" multiple="multiple" data-dropdown-css-class="select2-purple" name="grpusers1[]" id="grpusers1" ng-model="grpusers1" data-placeholder="Select Users" style="width:100%" required>
								<option value="">Select Users</option>
								<option ng-repeat="use in group_userlists" value="{{use.id}}">{{ use.name }}</option>
							</select>
							<input type="text" class="form-control input" name="newgroupname" id="newgroupname" ng-model="newgroupname">
							<input type="text" class="form-control input" name="admin" id="admin" ng-model="admin" value="gri.created_by">
							<button type="button" name="newmember" ng-click="newmember()">Submit</button>  
						</form>	
                    </div>
                </div>                    
            </div>

                
            
              </div>
            </div>
        
        <!-- End Group Information Modal -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<script>
    function uploadImage(){
        $("#profileimg").click();
    }
    function uploadfiles(){
       $( "#uploadattach" ).submit();
    }
    
 	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2();
	});  
	
function validategroup(){	
    if($("#groupname").val() ===''){
        $("#errorid").text("Please enter Group Name");
        return false;
    }else{
        $("#errorid").text("");
    }

    if($("#grpusers").val() ===''){
        $("#use_error").text("Please select Group users");
        return false;
    }else{
        $("#use_error").text("");
    }   	
	
	createGroup();
}
function showdiv()
{
	//$("#grnewmem").css("display", "block");
	$("#grnewmem").toggle();
	var groupadmin = $('#adminno').val();
	console.log("Group Admin=",groupadmin);
	$("#admin").val(groupadmin);
}
function showinfomodal()
{
	$('#groupinfoModal').modal('show');
	var groupname = $('#group_name').val();
	console.log("Group Name=",groupname);
	$("#grname").html(groupname);
	$("#newgroupname").val(groupname);
}
</script>
<?php
  include('footer.php');
?>
