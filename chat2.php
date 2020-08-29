
<?php

  include('header.php');
  // include('sidebar.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script>
var app = angular.module('chatPage', []);
app.controller('chatCtrl', function($scope, $http) {
	$scope.userid = localStorage.getItem('userid');
  $scope.username = localStorage.getItem('name');
  $http.get("https://eximbin.com/api/singlechatrooms.php?user_id="+$scope.userid)
  .then(function(response) {
    $scope.schat = response.data;
	console.log(response.data);
  });
   $scope.schatName=function (){
	  $scope.chatname = $scope.chatroom;
	  console.log("My chatroom name", $scope.chatname)
  }
});
app.controller('chatchapCtrl', function($scope, $http) {
	$scope.userid = localStorage.getItem('userid');
  $scope.username = localStorage.getItem('name');
  $http.get("https://eximbin.com/api/getuserchapters.php?user_id="+$scope.userid)
  .then(function(response) {
    $scope.chapters = response.data;
	console.log(response.data);
	});
  
});
app.controller('groupCtrl', function($scope, $http,$rootScope) {
	$scope.userid = localStorage.getItem('userid');
  $scope.username = localStorage.getItem('name');
  $http.get("https://eximbin.com/api/groupchatrooms.php?user_id="+$scope.userid)
  .then(function(response) {
    $scope.groups = response.data;
	console.log("group chats:",response.data);
  });

  $http.get("https://eximbin.com/api/getgroupchatusers.php?user_id="+$scope.userid)
  .then(function(res) {
    $scope.userlists = res.data;
	 //console.log("userlists : ",res.data);
  });


  $scope.createGroup = function(){
   // console.log("Create Group input fields : ",$scope.groupname+" => "+ $scope.grpusers);
    var data ={
      group_name : $scope.groupname,
      other_id : $scope.grpusers,
      user_id : $scope.userid
    }

    console.log("Posting data : ", data);

      $http.get("https://eximbin.com/api/getcredits.php?user_id="+localStorage.getItem('userid')).then(function(response) {
         // console.log("getcredits response : ",response);
          $scope.creditsres = response.data[0].credits;

          if($scope.creditsres > 1){

            console.log("Page will go for creating room chat.");
            $http.post('https://eximbin.com/api/webcreategroupchat.php', JSON.stringify(data)).then(function (response) {
              console.log("response", response.data);

              if(response.data == 1){
               return $scope.successmsg = "Chat Room Created Successfully";
               window.location.href ="/chat.php";
              }else if(response.data == 0){
               return $scope.errormsg = "Failed to Create Chat Room";
              }else{
               return $scope.errormsg = JSON.parse(response.data);
              }
              
             // console.log("successmsg : ", $scope.successmsg+" => "+$scope.errormsg);
            });

          }else{
            alert("Please Recharge your wallet first to create group chat.");
            return $scope.errormsg = "Please Recharge your wallet first to create chat room";

          }

        });

  };

  $scope.getGroupMembers = function(chatGroupid){

     //alert(chatGroupid);
     var data ={
      chatroom : chatGroupid
     };
     console.log("Members data : ", data);
  //$http.get("https://eximbni.com/api/groupchatusers.php?chatroom="+chatGroupid).then(function(response) {
  $http.post('https://eximbin.com/api/groupchatusers.php', JSON.stringify(data)).then(function (response) {
     console.log("getGroupMemberslist : ",response.data);
    $rootScope.getGroupMemberslist = response.data;
   
  });


  };

});

app.controller('addchatCtrl', function($scope, $http) {
	$scope.userid = localStorage.getItem('userid');
	$scope.username = localStorage.getItem('name');

  $http.get("https://eximbin.com/api/getuserchapters.php?user_id="+$scope.userid).then(function(response) {
    console.log("userchapter : ",response.data);
    $scope.userchapter = response.data;
  
  });
	
  
  $scope.getLevel3 = function() {
    var ch_id = $scope.adduserchapter;
    //console.log("sellchapter name : ",ch_id);
    if (!ch_id) {
      alert("Please select a Chapter");
      return;
    }else{

    $http.get("https://eximbin.com/api/getlevel3.php?chapter_id="+ch_id).then(function(response) {
      console.log("userlevel3 : ",response.data);
      $scope.userlevel3 = response.data;
      
    });

    }
    
  };


  $scope.gethsncode = function() {
    var level_id = $scope.adduserlevel3;
	var country_id = localStorage.getItem("country_id");
	var user_id = localStorage.getItem("userid");
    console.log("Country name : ",country_id);
	console.log("Level : ",level_id);
    if (!level_id) {
      alert("Please select a Level 3");
      return;
    }else{

    $http.get("https://eximbin.com/api/getwebhscodes.php?hscode="+level_id+"&country_id="+country_id+"&user_id="+user_id).then(function(response) {
      console.log("userhsncode : ",response.data);
      $scope.userhsncode = response.data;
      
    });

    }
    
  };


  $scope.getuserlist = function() {
    var hsncode_id = $scope.adduserhsncode;
    //console.log("sellchapter name : ",ch_id);
    if (!hsncode_id) {
      alert("Please select a HSCode");
      return;
    }else{

    $http.get("https://eximbin.com/api/getwebhscodeusers.php?finalhs="+hsncode_id).then(function(response) {
      console.log("userslist : ",response.data);
      $scope.userslist = response.data;
      
    });

    }
    
  };


  $scope.addNewUser =  function(){

var other_id = $scope.selectedusers;
var userid = localStorage.getItem('userid');

    if(userid !='' || other_id !=''){
      var chatUserData = {
        other_id : other_id,
        user_id : userid
      };
      console.log("chat User Data "+chatUserData);

      $http.post('https://eximbin.com/api/lead_chat.php', JSON.stringify(chatUserData)).then(function (response) {
        console.log("response", response.data);
        if(response.data == 1){
          alert("Create chat successfully");
          $scope.successresmsgs = "";
          $scope.successresmsgs = "Create chat successfully";
          $scope.errorresmsgs ="";
          window.location.href ="/chat.php";
        }else if(response.data == 2){
          alert("Already added in to chat");
          $scope.successresmsgs = "";
          $scope.errorresmsgs ="";
          $scope.errorresmsgs = "Already added in to chat";
          
          window.location.href ="/chat.php";
        }else{
          alert("Create chat failed, Please try again. ");
          $scope.errorresmsgs = "";
          $scope.errorresmsgs = "Create chat failed, Please try again. ";
          $scope.successresmsgs ="";
        }

         $('#createchatModal').modal('hide');

      });      

    }


  };



});


app.controller('createCtrl', function($scope, $http) {
	$scope.userid = localStorage.getItem('userid');
  $scope.username = localStorage.getItem('name');
  $http.get("https://eximbin.com/api/getgroupchatusers.php?user_id="+$scope.userid)
  .then(function(res) {
    $scope.groupusers = res.data;
	console.log(res.data);
  });
});



</script>
<style>
 .user-bubble{
    text-align: left;
    width: 35%;
    overflow-wrap: break-word;
    margin-bottom: 2%;
	color: rgb(0, 0, 0);
    margin-right: 1%;
	margin-left: 1%;
	padding-left:20px;
    min-height: 40px;
    border: 1px solid rgb(240, 240, 240);
    border-top-left-radius: 19px;
    border-top-right-radius: 19px;
    border-bottom-right-radius: 19px;
    background: rgb(240, 240, 240);
	opacity:0.6;

    }
    .user-bubble1{
        text-align: right;
        min-width: 35%;
        overflow-wrap: break-word;
        margin-bottom: 2%;
        margin-left: 1%;
		margin-right: 1%;
		padding-right:20px;
        color:rgb(5, 0, 0);
        min-height: 40px;
        border: 1px solid #b8f7ac;
        border-top-left-radius: 19px;
        border-top-right-radius: 19px;
        border-bottom-left-radius: 19px;
        background: #b8f7ac;
		opacity:0.6;
    }
	#ex2 {
  overflow-y: scroll
	}
	ul {
  list-style-type: none;
 }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-app="chatPage">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2">
            <!-- <h1 class="m-0 text-dark">Update Profile</h1> -->
        
          </div><!-- /.col -->
          <div class="col-sm-4">
            <!-- <h1 class="m-0 text-dark">Update Profile</h1> -->
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Chat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3" style="max-height:440px; min-height:440px; background:#fff;">
            <div class="card card-success card-outline" style="max-height:440px; min-height:440px; background:#fff;">
              <div class="card-header" ng-controller="groupCtrl">
                <h3 class="card-title">Chat Details</h3>
                <span class="text-success"> {{ successmsg }} {{ successresmsgs }} </span>
                <span class="text-danger"> {{ errormsg }} {{ errorresmsgs }} </span>
              </div>
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item" style="width:50%"><a class="nav-link active" href="#chat" data-toggle="tab">Users</a></li>
                  <li class="nav-item" style="width:50%"><a class="nav-link" href="#group" data-toggle="tab">Groups</a></li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body" id="ex2">
                <div class="tab-content">
                  <div class="active tab-pane" id="chat" ng-controller="chatCtrl">
				  <div class="form-group row" style="margin-left:170px">
                        <input type="button" class="pull-right btn btn-warning" data-toggle="modal" data-target="#createchatModal"  value="+" style="border-radius:50%"> 
                      </div>
                      <div class="form-group row" ng-repeat="sn in schat" style="border-bottom:2px solid #d8d8d8">
                       <a href="#"> <div class="col-md-3"><img src="img/Headshot.svg" height="40px"/></div> <div class="col-md-9" id="{{sn.chatroom}}" onclick="getRoom(this.id)">{{sn.business_name}}</label></a>
					</div>
                      
                  </div>
				  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="chapters" ng-controller="chatchapCtrl">
                      <div class="form-group row" ng-repeat="ch in chapters">
                        <label class="col-form-label" onclick="return showhsn('1');">Chapter {{ch.chapter_id}}</label>
                      </div>
				  </div>
               <!-- /.tab-pane -->

                  <div class="tab-pane" id="group" ng-controller="groupCtrl">
                    
                       <div class="form-group row" style="margin-left:170px">
                        <input type="button" class="pull-right btn btn-warning" data-toggle="modal" data-target="#creategroupModal"  value="+" style="border-radius:50%"> 
                      </div>  
                      <div class="form-group row" ng-repeat="gr in groups">
                        <label class="col-form-label" id="{{gr.chatroom}}"  onclick="getgRoom(this.id)" ng-click="getGroupMembers(gr.chatroom)"><a href="#" style="color:orange">{{gr.chatroom}}</a></label>
                      </div>
                  </div>
                  <!-- /.tab-pane -->                 

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
		  
		  <div class="col-md-9"> 
		  <div class="row" >
		  <div class="col-md-12" ng-controller="groupCtrl" style="background-image: linear-gradient(black, grey); color:#fff; padding-left:20px; min-height:40px; border-top-left-radius:20px; border-top-right-radius:20px " >
		  <p id="roomname" >  </p>
        <div class="row table-responsive col-12"  id="memberList" style="display: none" >
          <table class="table table-striped" width="100%">
            <tbody>
              <tr align="center">
                <td> Group Members </td>
              </tr>
              <tr ng-repeat="memberName in getGroupMemberslist"> 
                <td style="color:orange"> {{memberName.business_name}} </td>
              </tr>
            </tbody>
          </table>
         
        </div>
      </div>
		  <div class = "col-md-12" style="height:360px; background-color:#fff; background-image: url('img/chat1.svg');  background-repeat: no-repeat; background-size: 100% 100%; border-radius5px;overflow-y: scroll;">
		  <div class="messages" id="chatBox">
		  <ul>
		  		  
		  </ul>
		  </div>
		  </div>
		  <div class = "col-md-12">
		  <input type="hidden" id="chatroomID" value=""/>
		  <input type="text" class="message-input" id="msgipt" style="width:93%; height:40px; border-radius:20px; font-size:15px; "> 
		  <button class="submit" onclick="newMessage()" style="background-image: linear-gradient(orange, white, green); width:40px; height:40px; border-radius:50%; text-align:center;"><img src="img/send.svg" height="15px", style="padding-left:5px; padding-bottom:5px"/></button>
		  
		  </div>
		  </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->

<!-- Start Create Group Modal -->

  <div class="modal fade" id="creategroupModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
            <div class="text-center ">
                Create New Group
            </div> 
            <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <form ng-controller="groupCtrl">
        <div class="modal-body" >
            <div class="form-group">
              <label class="form-label"> Group Name  </label>
               <input type="text" class="form-control input" name="groupname" id="groupname" ng-model="groupname"  placeholder="Group Name" required>
            </div>
            <div class="form-group">
              <label class="form-label"> Select Users</label>
              <div class="select2-green">
                <select  multiple="multiple" data-placeholder="Select A Users"  name="grpusers[]" ng-model="grpusers" style="width:100%" required>
                  <option ng-repeat="use in userlists" value="{{use.id}}">{{use.name}}</option>
                </select>
              </div>
            </div>                
        </div>

            <button type="button" class="btn btn-success btn-block" data-dismiss="modal"  ng-click="createGroup()" >Create Group </button>
            
          </form>           
        </div>
<!--         <div class="modal-footer">
          <button type="button" class="btn btn-block" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>

<!-- End Create Group Modal -->
<!-- Start Create chatuser Modal -->

  <div class="modal fade" id="createchatModal" role="dialog" ng-controller="addchatCtrl">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
            <div class="text-center ">
                Add New User
            </div> 
            <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <form name="addUserForm" >
          <div class="modal-body" >
              <div class="form-group">
                <label class="form-label"> Select Chapter</label>
                <div class="select2-green">
                  <select class="form-control" ng-model="adduserchapter" style="width:100%" ng-change="getLevel3()" required>
                    <option value=""> Select Chapter </option>
                    <option ng-repeat="userch in userchapter" value="{{userch.chapter_id}}">{{userch.chapter_name}}</option>
                  </select>
                </div>
              </div>

             <div class="form-group">
                <label class="form-label"> Select Level 3</label>
                <div class="select2-green">
                  <select class="form-control" ng-model="adduserlevel3" style="width:100%" ng-change="gethsncode()" required>
                    <option value=""> Select Level 3 </option>
                    <option ng-repeat="userl3 in userlevel3" value="{{userl3.hscode}}">{{userl3.english}}</option>
                  </select>
                </div>
              </div>  

             <div class="form-group">
                <label class="form-label"> Select HSCode</label>
                <div class="select2-green">
                  <select class="form-control" ng-model="adduserhsncode" style="width:100%" ng-change="getuserlist()" required>
                    <option value=""> Select HSCode </option>
                    <option ng-repeat="userhsn in userhsncode" value="{{userhsn.hscode}}">{{userhsn.hscode}}</option>
                  </select>
                </div>
              </div> 
              
              <div class="form-group">
                <label class="form-label"> Select User</label>
                <div class="select2-green">
                  <select class="form-control" ng-model="selectedusers" style="width:100%" required>
                    <option value=""> Select User </option>
                    <option ng-repeat="userlst in userslist" value="{{userlst.id}}">{{userlst.name}}</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-success" ng-click="addNewUser()" >Add To Chat</button>
              </div>

          </div>
            
        </form>           
      </div>
    </div>
  </div>

<!-- End Create chatuser Modal -->

    </div>

<?php
  include('footer.php');
?>


<script type="text/javascript">
  $(document).ready(function(){
    //alert();
    $(".hsncode").hide();
    $(".hsnuserlist").hide();
    $(".userchat").hide();
    
  });


  function openchat(id){
    //alert("Chat window is open for User "+id+". Please start chat with User "+id+".");
    $(".userchat").show();
    $('#userchatdiv').show();
    $("#userspanid").text("User "+id);
    $("#usernamespanid").text("User "+id);
    
    //window.open("http://localhost/eximbniweb/dashboard.php");
  }

  function showhsn(chapterid){
    $(".hsncode").hide();
    $("#hsncode"+chapterid+"").show();
  }

  function showhsnusers(hsnid){
    //alert(hsnid);
    $(".hsnuserlist").hide();
    $("#hsnuserlist"+hsnid+"").show();

  }
  
</script>
<script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-app.js"></script>


<script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-analytics.js"></script>

<script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>

<script>

  $(".messages").animate({ scrollTop: $(document).height() }, "fast");
  var user_id;

  function newMessage() {
    
    message = $(".message-input").val();
    if($.trim(message) == '') {
      return false;
    }
    writeUserData(message);
  };

  $('.submit').click(function() {
    newMessage();
  });

  $(window).on('keydown', function(e) {

    if (e.which == 13) {
      newMessage();
      return false;
    }
  });
</script>

<script>
var config = {
     apiKey: "AIzaSyBFrMz4BBAqC9M2w5oJVEiy-epVNia5OZw",
  authDomain: "eximbni-5ea11.firebaseapp.com",
  databaseURL: "https://eximbni-5ea11.firebaseio.com",
  projectId: "eximbni-5ea11",
  storageBucket: "eximbni-5ea11.appspot.com",
  messagingSenderId: "300835160464",
  
		};
	
firebase.initializeApp(config);
var user = firebase.auth().signInAnonymously();

    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        // User is signed in.
        var isAnonymous = user.isAnonymous;
        user_id = user.uid;
      } else {
        // User is signed out.
      }
	});
	
function getRoom(clicked_id){
	var type="user-bubble1";
	 $('.messages ul').empty();
	var chRoom = document.getElementById(clicked_id).innerHTML;
	document.getElementById("chatroomID").value = clicked_id;
	console.log(chRoom);
	document.getElementById("roomname").innerHTML=chRoom;
	var db_ref = firebase.database().ref('/chat/'+clicked_id);
	 db_ref.on('child_added',function (data) {
		 console.log("chat data:", data.val().message);
		 $('<li class="'+type+'" id="cmsg"><p>' + data.val().message + '</p></li>').appendTo($('.messages ul'));
		 
		 
    });
}
function getgRoom(clicked_id){
	var type="user-bubble";
	 $('.messages ul').empty();
	var chRoom = document.getElementById(clicked_id).innerHTML;
  var chRoomText = document.getElementById(clicked_id).textContent;
	document.getElementById("chatroomID").value = clicked_id;
  chRoom = '<span onclick="showGroupMembers()" >'+chRoom+'</span>';
	console.log(chRoom);
	document.getElementById("roomname").innerHTML=chRoom;
	var db_ref = firebase.database().ref('/chat/'+clicked_id);
	 db_ref.on('child_added',function (data) {
		 console.log("chat data:", data.val().message);
		 $('<li class="'+type+'" id="cmsg"><p>' + data.val().message + '</p></li>').appendTo($('.messages ul'));
		 
		 
    });
}
function writeUserData(message) {
	var chatroom = document.getElementById("chatroomID").value;
	var db_ref = firebase.database().ref('/chat/'+chatroom);
      db_ref.push({
          user_id: user_id,
          message: message
      });
	  document.getElementById("msgipt").value="";
  }

function showGroupMembers(){
  $("#memberList").toggle();
}

</script>
