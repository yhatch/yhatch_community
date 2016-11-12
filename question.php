<?php 
	session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Community</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/community/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="/community/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="/community/images/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="/community/css/styles.css">
    <link rel="stylesheet" href="/community/css/blog_part.css">
  </head>



  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

            <div class="mdl-cell mdl-cell--12-col" id="flag_reason_msg" style = "display:none;">
          <div class="innerFlag_bg">
        <span id="close_reason_msg" class="close_parent"><span>x</span></span>
        <header>Report</header>
      <ul class="demo-list-item mdl-list">
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
            <input type="radio" id="option-1" class="mdl-radio__button" name="report_options" value="1">
            <span class="mdl-radio__label"><strong>Harassment:</strong> Insulting or disparaging towards an individual or group</span>
          </label>
        </li>
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
            <input type="radio" id="option-2" class="mdl-radio__button" name="report_options" value="2">
            <span class="mdl-radio__label"><strong>Spam:</strong> Content is promoting unrelated  products and links</span>
          </label>
        </li>
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
            <input type="radio" id="option-3" class="mdl-radio__button" name="report_options" value="3">
            <span class="mdl-radio__label"><strong>Irrelevant:</strong> The question or comment is not related or relevant to this website or context</span>
          </label>
        </li>
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
            <input type="radio" id="option-4" class="mdl-radio__button" name="report_options" value="4">
            <span class="mdl-radio__label"><strong>Vulgarity:</strong> Content contains vulgarity or vulgar images</span>
          </label>
        </li>
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
            <input type="radio" id="option-5" class="mdl-radio__button" name="report_options" value="5">
            <span class="mdl-radio__label"><strong>Joke Answer:</strong> Not a sincere answer</span>
          </label>
        </li>
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
            <input type="radio" id="option-6" class="mdl-radio__button" name="report_options" value="6">
            <span class="mdl-radio__label"><strong>Incorrect:</strong> Incorrect response to the question</span>
          </label>
        </li>
        <li class="mdl-list__item">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-7">
            <input type="radio" id="option-7" class="mdl-radio__button" name="report_options" value="7">
            <span class="mdl-radio__label"><strong>Copied:</strong> The answer has been copied from an earlier answer without an ackowledgement</span>
          </label>
        </li>
      </ul>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect report_submit" onclick="submitReport();">
        Report
      </button>
      </div>
    </div>




    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--grey-50 mdl-color-text--grey-800">
        <div id="top_header" class="mdl-layout__header-row mdl-color--grey-50 mdl-color-text--grey-800 is-border">
           <span class="mdl-layout-title">Giftzapp</span>
           <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
             
              <?php 
      $loggedOut = $_REQUEST['logged_out'];
      
      if($loggedOut == 'yes'){

        $_SESSION['name'] = '';
        $_SESSION['email'] = '';

      }

      
    ?>  
  

    <?php 
      
      $userName = urldecode(base64_decode($_REQUEST['name']));
      $userEmail = urldecode(base64_decode($_REQUEST['email']));
      $userId = urldecode(base64_decode($_REQUEST['community_id']));
      
	

      $host =  $_SERVER['HTTP_HOST'];
      $reqUri = $_SERVER["REQUEST_URI"];

      $hostFull = $host.$reqUri;


      $arr1 = explode('/',$hostFull);

      $hostName = $arr1[0]."/".$arr1[1]."/";	

      if($userName == ''){

       $userName = $_SESSION['name'];
       $userEmail = $_SESSION['email']; 
       $userId =  $_SESSION['user_id'];  	
      }

      if($userName != ''){

       $_SESSION['name'] = $userName;
       $_SESSION['email'] = $userEmail;
	     $_SESSION['user_id'] = $userId;
	if($_SESSION['timeout'] == ''){
	$_SESSION['timeout'] = time();
	}
  
       ?>
        

         
              <a class="mdl-navigation__link mdl-color-text--light-blue-700" href=""><?php echo $userName;?></a>
            <div>
               <form action = "http://commonlogin.yhatch.com?redirect_uri=<?php echo $hostName ?>" method = "post">
                <input type="hidden" name="action_val" value="logout">          
                <input class="mdl-navigation__link mdl-color-text--light-blue-700 mdlBtn_log" type="submit" name="login" value="Logout">
             </form>
          </div>  
       <?php }else{?>
      
          <div>
              <form action = "http://commonlogin.yhatch.com?redirect_uri=<?php echo $hostName ?>" method = "post">
                  <input class="mdl-navigation__link mdl-color-text--light-blue-700 mdlBtn_log" type="submit" name="login" value="Login">
              </form>
          </div>
      <?php } ?>

              
            </nav>
        </div>
<!--         <div class="mdl-layout--large-screen-only mdl-layout__header-row secHeadNav">
        </div> -->


<?php 

 $question = urldecode($_SERVER['REQUEST_URI']);
 $myArray = explode('-', $question);
 $question = str_replace('-',' ',$question);




									$chkpg = $_REQUEST['pg'];
									$q_id = end($myArray);

										if ($chkpg > 1){
											displayQues($chkpg, $q_id);
										}else{
											displayQues(1, $q_id);
										}
															

								function displayQues($pageNo, $q_id){	
									// echo "question id".$q_id;
									$login = 'your-username@xyz.com';
									$password = 'yourpassword';
									$url = 'http://clients.yhatch.com/api/v3/reply_response/tour_api_token/';
									$ch = curl_init();
									$data = array("page" => $pageNo, "question_id" => $q_id); 
									$data_string = json_encode($data);
									curl_setopt($ch, CURLOPT_URL,$url);
									curl_setopt($ch, CURLOPT_POST,1);
									curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
									curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
									curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
									curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");

								$resp = curl_exec($ch);
								// Close request to clear up some resources
								curl_close($ch);
								// print_r($resp);


								$json = json_decode($resp, true);
								$newArr = $json['Items'];
								$newJson = json_encode($newArr);
								$jsonde = json_decode($newJson);

								$totalPages = $json['total_pages'];
								
								$_SESSION['totalpg'] = $totalPages; 

								 echo '<div class="mdl-layout mdl-layout__header-row headerQuestion">';
                       echo '<div class="mdl-ques-section">';
						               echo '<div class="comment mdl-color-text--grey-900">';
						               echo '<header class="comment__header">';
						                echo '<div class="comment__avatar mdl-shadow--2dp">';
						                $uName = $json['user_name'];
                              			$fletter = $uName[0];
						                echo '<span class="get_letter">'.$fletter.'</span>';
						                echo '</div>';
						                 echo '<div class="comment__author">';
			                               echo '<p>'.$json['user_name'].'</p>';
			                               echo '<!-- <span>2 days ago</span> -->';
			                               echo '<a class="web_site_name_top" href="'.$json['location_url'][0].'">'.$json['location_url'][0].'</a>';
			                             echo '</div>';
			                           echo '</header>';
			                             echo '<div class="comment__text">';
				                          echo '<h1>'.$json['message'].'</h1>';
				                           echo '</div>';
						                echo '</div>';
						         		 echo '<nav class="comment__actions">';
								         	echo '<div class="mdl-layout-spacer"></div>';
									     	echo '<div class="rightsection">';
			                                   echo '<a class="web_site_name" href="'.$json['location_url'][0].'">'.$json['location_url'][0].'</a>';
		                               		echo '</div>';
	                               		echo '</nav>';
	                      echo '</div>';         
						        echo '</div>';


						      echo '</header>';
						      echo '<main class="mdl-layout__content">';
                  $totRply = $json['total_reply'];
                  if ($totRply == 1) {
                     echo '<h4 class="totalReplyQues">'.$json['total_reply'].' REPLY</h4>';
                  }else{
                     echo '<h4 class="totalReplyQues">'.$json['total_reply'].' REPLIES</h4>';
                  }
                   
						        echo '<div class="mdl-layout__tab-panel is-active" id="overview">';

               //    				echo '<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--4dp postSection">';
               //    				   echo '<div class="topSectionNav">';
			            //             echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon reportTopBtn" id="questionDropBtn">';
			            //                echo '<i class="material-icons">more_vert</i>';
			            //              echo '</button>';
			            //              echo '<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="questionDropBtn">';
			            //                echo '<li class="mdl-menu__item">Report</li>';
			            //              echo '</ul>';
			            //              echo '</div>';
						         // echo '<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">';
						         //       echo '<div class="comment mdl-color-text--grey-700">';
						         //       echo '<header class="comment__header">';
						         //        echo '<div class="comment__avatar mdl-shadow--2dp">';
						         //        $uName = $json['user_name'];
               //                			$fletter = $uName[0];
						         //        echo '<span class="get_letter">'.$fletter.'</span>';
						         //        echo '</div>';
						         //         echo '<div class="comment__author">';
			            //                    echo '<p>'.$json['user_name'].'</p>';
			            //                    echo '<!-- <span>2 days ago</span> -->';
			            //                    echo '<a class="web_site_name_top" href="'.$json['location_url'][0].'">'.$json['location_url'][0].'</a>';
			            //                  echo '</div>';
			            //                echo '</header>';
			            //                  echo '<div class="comment__text">';
				           //                echo '<a>'.$json['message'].'</a>';
				           //                 echo '</div>';
						         //        echo '</div>';
						         // 		 echo '<nav class="comment__actions">';
								       //   	echo '<div class="mdl-layout-spacer"></div>';
									     	// echo '<div class="rightsection">';
			            //                        echo '<a class="web_site_name" href="'.$json['location_url'][0].'">'.$json['location_url'][0].'</a>';
		             //                   		echo '</div>';
	              //                  		echo '</nav>';
	              //                  echo '</div>';
	              //                  echo '</section>';

	                               echo '<div class="mdl-rply-section" id="question_replies">';

                  				foreach ($jsonde as $result) {
                  					echo '<section class="section--center mdl-grid mdl-grid--no-spacing answer_list" id="answer_list">'; 
                  					echo '<div class="topSectionNav">';
			                        echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon reportTopBtn" id="questionDropBtn'.$result->reply_id.'">';
			                           echo '<i class="material-icons">more_vert</i>';
			                         echo '</button>';
			                         echo '<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="questionDropBtn'.$result->reply_id.'">';
			                           echo '<li class="mdl-menu__item" id="flagQuesme_'.$result->question_id.'" onClick="flagQuesMe(this);">Report</li>';
			                         echo '</ul>';
			                         echo '</div>';  
			                         echo '<div class="mdl-color-text--A700 mdl-card__supporting-text idreplies">';
			                         echo '<div class="comment mdl-color-text--grey-A700">';  
			                         echo '<header class="comment__header">';
						                echo '<div class="comment__avatar mdl-shadow--2dp">';
						                $uRName = $result->user_name;
                              			$fRletter = $uRName[0];
						                echo '<span class="get_letter">'.$fRletter.'</span>';
						                echo '</div>';
						                 echo '<div class="comment__author">';
			                               echo '<p>'.$result->user_name.'</p>';
			                               echo '<!-- <span>2 days ago</span> -->';			                              
			                             echo '</div>';
			                           echo '</header>'; 
			                           echo '</div>';
			                            echo '<div class="comment__text">';
				                          echo '<p class="get_quest">'.$result->message.'</p>';
				                        echo '</div>';  

				           echo '<nav class="comment__actions">';
                           $reply_votes = $result->likes;
				
                           if ($reply_votes != 0) {
                             echo '<span class="q_upvotes mdl-color-text--red-A400" id="upvotes_ques_'.$result->reply_id.'">'.$result->likes.'</span>';
                           }else{
			    echo '<span class="q_upvotes mdl-color-text--red-A400" style = "display:none;" id="upvotes_ques_'.$result->reply_id.'"></span>';
			   }	
                             echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="voteBtnId_'.$result->reply_id.'" onClick="voteThisQuestion(this, 0);">';
                               echo '<i class="material-icons mdl-color-text--red-A400" id="quesIdIcon_'.$result->reply_id.'" role="presentation">favorite_border</i><span class="visuallyhidden">like comment</span>';
                             echo '</button>';
                             echo '<button id="demo-menu-lower-right_'.$result->reply_id.'" class="mdl-button mdl-js-button mdl-button--icon">';
                              echo '<i class="material-icons mdl-color-text--red-400">share</i>';
                              echo '</button>';

                              echo '<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right_'.$result->reply_id.'">';
                              echo '<li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">';
                                 echo '<span class="visuallyhidden">Twitter</span>';
                               echo '</button><span class="shareBtn">Twitter</span></li>';
                              echo '<li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">';
                                echo ' <span class="visuallyhidden">Facebook</span>';
                               echo '</button><span class="shareBtn">Facebook</span></li>';
                              echo '<li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">';
                                 echo '<span class="visuallyhidden">Google Plus</span>';
                               echo '</button><span class="shareBtn">Google Plus</span></li>';
                            echo '</ul>';

                               echo '<div class="mdl-layout-spacer"></div>';
                              

                           echo '</nav>';

                                      echo '</div>'; 
                  					echo '</section>';
                  				}
                          echo ' <div class="mdl-card__actions comments_text_area" id="comments_area">';
                          echo ' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">';
                             echo '<textarea rows=3 class="mdl-textfield__input" id="comment"></textarea>';
                             echo '<label for="comment" class="mdl-textfield__label">Join the discussion</label>';
                           echo '</div>';
                           echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" onclick = "saveReply('.$q_id.');">';
                             echo '<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>';
                           echo '</button>';
                         echo '</div> ';
                  				echo '</div>';
                  				
	
                             }
              



?>
</div>
 <footer class="mdl-mega-footer">
<!--           <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Features</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Updates</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Details</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Spec</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Technology</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">How it works</a></li>
                <li><a href="#">Patterns</a></li>
                <li><a href="#">Usage</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contracts</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div> -->
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              Community Powered By yHatch
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="http://yhatch.com/">Learn More</a></li>
              <!-- <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li> -->
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="/community/js/jquet-scrollTofixed.js"></script>
    <script src="/community/js/community.js"></script>
    <script type="text/javascript">

		  function saveReply(question_id){

	      
		      replyText = $('#comment').val();

		      console.log('save reply'+replyText);


		      if(replyText == ''){
			  alert('Please enter reply text');
		      }else{
			  questionReply(question_id, replyText);  
		      }

	      

	          }


	
	function questionReply(questionId, replyText) {
  
	    localEmp = 0;
	    clientId = 2;
	    clientName = "giftzapp";

            if(!checkLoggedIn()){
	       alert('please login to reply');
	      return;   

	     }else{

	      userId = "<?php echo $_SESSION['user_id'];?>";
	      userName = "<?php echo $_SESSION['name'];?>";
	      roomName = "eldew";
	      userColor = "4a4a4a";
	      userAvatar = "tesspng";

	      urlval =  'http://chats.yhatch.com/community_reply/'+userId+'/'+userName+'/'+userColor+'/'+userAvatar+'/'+questionId+'/'+clientId+'/'+clientName+'/'+replyText+'/'+localEmp+'/'+roomName;

	      console.log(urlval);

	      $.ajax({
		  url: 'http://chats.yhatch.com/communit_reply/'+userId+'/'+userName+'/'+userColor+'/'+userAvatar+'/'+questionId+'/'+clientId+'/'+clientName+'/'+replyText+'/'+localEmp+'/'+roomName,
		  dataType: 'jsonp',          
		  jsonpCallback: "callback",           
		  type: 'POST',
		  success: function (data) {
		    console.log('json dt'+data);

		    if(data.status == 'failure'){
		      alert(data.message);
		    }

		    if(data.status == 'success'){
			$('#comment').val('');

			replyId  =  data.reply_id;
			userName =  data.user_name;
			firstLetter = userName.charAt(0)
			replyTpl = getReplyTemplate(questionId, replyId, replyText, userName, firstLetter);			
			$(replyTpl).insertBefore('#comments_area');
						
		    }	

		  },
		  failure: function(data){
		    console.log('json err'+JSON.stringify(data));
		  }
	     });


	  }


}


function getReplyTemplate(questionId, replyId, replyMsg, userName, firstLetter){

              var stringVal = '<section class="section--center mdl-grid mdl-grid--no-spacing answer_list" id="answer_list"> '
                            +'<div class="topSectionNav">'
                              +'<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon reportTopBtn" id="questionDropBtn'+replyId+'">'
                                +' <i class="material-icons">more_vert</i>'
                               +'</button>'
                               +'<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="questionDropBtn'+replyId+'">'
                                 +'<li class="mdl-menu__item" id="flagQuesme_'+questionId+'" onClick="flagQuesMe(this);">Report</li>'
                               +'</ul>'
                            +' </div>  '
                               +'<div class="mdl-color-text--A700 mdl-card__supporting-text idreplies">'
                                 +'<div class="comment mdl-color-text--grey-A700">  '
                                 +' <header class="comment__header">'
                                 +' <div class="comment__avatar mdl-shadow--2dp">'
                            
                                  +' <span class="get_letter">'+firstLetter+'</span>'
                                +' </div>'
                                 +' <div class="comment__author">'
                                    +' <p>'+userName+'</p>'                                                                    
                                  +' </div>'
                                 +' </header> '
                                 +'</div>'
                                 +' <div class="comment__text">'
                                 +' <p class="get_quest">'+replyMsg+'</p>'
                               +' </div>  '

                          +' <nav class="comment__actions">';
                                                     
				stringVal += '<span class="q_upvotes mdl-color-text--red-A400" style = "display:none;" id="upvotes_ques_'+replyId+'"></span>'
                            +' <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="voteBtnId_'+replyId+'" onClick="voteThisQuestion(this, 0);">'
                            +'<i class="material-icons mdl-color-text--red-A400" id="quesIdIcon_'+replyId+'" role="presentation">favorite_border</i><span class="visuallyhidden">like comment</span>'
                            +' </button>'
                            +' <button id="demo-menu-lower-right_'+replyId+'" class="mdl-button mdl-js-button mdl-button--icon">'
                              +'<i class="material-icons mdl-color-text--red-400">share</i>'
                              +'</button>'

                              +'<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right_'+replyId+'">'
                             +' <li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">'
                                 +'<span class="visuallyhidden">Twitter</span>'
                              +' </button><span class="shareBtn">Twitter</span></li>'
                             +' <li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">'
                                +' <span class="visuallyhidden">Facebook</span>'
                              +' </button><span class="shareBtn">Facebook</span></li>'
                             +' <li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">'
                               +'  <span class="visuallyhidden">Google Plus</span>'
                             +'  </button><span class="shareBtn">Google Plus</span></li>'
                           +' </ul>'

                               +'<div class="mdl-layout-spacer"></div>'
                              

                          +' </nav>'

                                      +'</div> '
                            +'</section>';
               
return stringVal;
}

function votePollOption(event, clientId){

	if(!checkLoggedIn()){

	    alert('please login to flag.');
	    return;		

	}


      objVal = event.id;

      objArr = objVal.split("_");


      questionId = objArr[0];
      optionId = objArr[1];

     
     updateOptionVote(clientId, questionId, optionId);	

       
}

function updateOptionVote(clientId, questionId, optionId){

		userId = "<?php echo $_SESSION['user_id'];?>";
	
		urlval =  'http://chats.yhatch.com/community_option_vote/'+userId+'/'+clientId+'/'+questionId+'/'+optionId;


	      $.ajax({
		  url: urlval,
		  dataType: 'jsonp',		 
		  jsonpCallback: "callback",           
		  type: 'POST',
		  success: function (data) {
		    console.log('json dt'+JSON.stringify(data));

		    if(data.voted){
		      alert('already voted');
		    }

		  },
		  failure: function(data){
		    console.log('json err'+JSON.stringify(data));
		  }
	     });

}

function checkLoggedIn(){


		userId = "<?php echo $_SESSION['user_id'];?>";
		userName = "<?php echo $_SESSION['name'];?>";
		userEmail = "<?php echo $_SESSION['email'];?>";

		  console.log('userId='+userId);  
		  console.log('username='+userName);
		  console.log('username='+userEmail);

		  if(userName == '' || userName == null || userName == 'undefined'){
		  
		    return false;
		  
		  }else{
		    return true;
		  }
	  
}

function voteThisQuestion(objVal, flag) {
	

  obj = objVal.id;

    

  spltVal = obj.split("_");

  idVal = spltVal[1];

  localEmp = 0;
  clientId = 2;


  if(flag == 1){

    questionId = idVal;
    replyId = 0;

  }else{

    replyId = idVal;
    questionId = 0;

  }

	if(!checkLoggedIn()){

		alert('please login to vote');
		return;		

	}else{

		  userId = "<?php echo $_SESSION['user_id'];?>";
		  userName = "<?php echo $_SESSION['name'];?>";
		  roomName = "";
	
		  dataVal = {
          	      'action' : 'save',
		      'user_id': userId,
		      'user_name':userName,
		      'room_name':roomName,
		      'reply_id': replyId,
		      'local_emp':localEmp,
		      'vote_type': flag,
		      'client_id': clientId,
		      'question_id': questionId

      };
     

     	urlval =  'http://chats.yhatch.com/community_vote/'+userId+'/'+userName+'/'+questionId+'/'+replyId+'/'+clientId+'/'+flag+'/'+localEmp;


	      $.ajax({
		  url: urlval,
		  dataType: 'jsonp',
		  data:dataVal,
		  jsonpCallback: "callback",           
		  type: 'POST',
		  success: function (data) {
		    //console.log('json dt'+JSON.stringify(data));

		    if(data.status == 'failure'){
		      alert(data.message);
		    }

		    if(data.status == 'success'){
		    
			var preVote =  parseInt($('#upvotes_ques_'+replyId).html());
		   
			if(isNaN(preVote)){
			 preVote = 0;
			}		
		        preVote++;
			
			$('#upvotes_ques_'+replyId).show();
			$('#upvotes_ques_'+replyId).html(preVote);
				
		    }		

		  },
		  failure: function(data){
		    console.log('json err'+JSON.stringify(data));
		  }
	     });


	}


}

var check_session;
function CheckForSession() {
	userName = "<?php echo $_SESSION['name'];?>";
	if(userName != '' && userName != null && userName != 'undefined'){
			var str="chksession=true";
			jQuery.ajax({
					type: "POST",
					url: "sess_check.php",
					data: str,
					cache: false,
					success: function(res){
						//console.log('ses'+res);
						if(res == "1") {
						alert('You has been logged out. Please login again.');
						location.reload();
						}
					}
			});
	}
}

check_session = setInterval(CheckForSession, 3000);

function updateSession(){

	var str="updatesession=true";
		jQuery.ajax({
				type: "POST",
				url: "question.php",
				data: str,
				cache: false,
				success: function(res){
					
				}
		});

}

   	    </script>
   </body>
  


</html>
