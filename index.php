<?php
  session_start();
    if(!isset($_GET['pg'])){
    header("location: index.php?pg=1");
    }else{
     $page = $_GET['pg'];
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Community</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/blog_part.css">
  </head>


  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
            <div class="mdl-cell mdl-cell--12-col" id="flag_reason_msg">
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
	$_SESSION['user_id'] = '';

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
	
      }else{

	$_REQUEST['name'] = "";
	$_REQUEST['email'] = "";
	$_REQUEST['community_id'] = "";

      }	

      if($userName != ''){

       $_SESSION['name'] = $userName;
       $_SESSION['email'] = $userEmail;
       $_SESSION['user_id'] = $userId;
       $_SESSION['timeout'] = time();
  
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
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>Community Building</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row is-border">
        </div>


	 <div>

		

	  </div>



        <div id="lowerNav" class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--grey-50 is-border">

            <a id="questApp" href="#overview" class="mdl-layout__tab mdl-color-text--grey-700 is-active">Questions</a>
            <a id="pollApp" href="#features" class="mdl-layout__tab mdl-color-text--grey-700">Polls</a>



          
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">

                <?php

                    $chkpg = $_GET['pg'];

                    if ($chkpg > 1){
                      displayQues($chkpg);
                    }else{
                      displayQues(1);
                    }


                function displayQues($pageNo){  
                  $pageCurr = $_GET['pg'];

                  $login = 'your-username@xyz.com';
                  $password = 'yourpassword';
                  $url = 'http://clients.yhatch.com/api/v3/question_response/tour_api_token/';
                  $ch = curl_init();
                  $data = array("page" => $pageNo); 
                  $data_string = json_encode($data);
                  curl_setopt($ch, CURLOPT_URL,$url);
                  curl_setopt($ch, CURLOPT_POST,1);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
                  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                  curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");


                  $resp = curl_exec($ch);

                  curl_close($ch);
                  $json = json_decode($resp, true);
                  $newArr =$json['Items'];
                  $newJson = json_encode($newArr);
                  $jsonde = json_decode($newJson);

                  $totalPages = $json['total_pages'];
                  // echo "total page ".$totalPages;
                  $_SESSION['totalpg'] = $totalPages; 

                foreach ($jsonde as $result) {
                    echo '<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp postSection">';
                        echo '<div class="topSectionNav">';
                        echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon reportTopBtn" id="btntop_'.$result->question_id.'">';
                           echo '<i class="material-icons">more_vert</i>';
                         echo '</button>';
                         echo '<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btntop_'.$result->question_id.'">';
                           echo '<li class="mdl-menu__item" id="flagQuesme_'.$result->question_id.'" onClick="flagQuesMe(this);">Report</li>';
                         echo '</ul>';
                         echo '</div>';
                       echo '<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">';
                          echo '<div class="comment mdl-color-text--grey-700">';
                           echo '<header class="comment__header">';
                             echo '<div class="comment__avatar mdl-shadow--2dp">';
                              $uName = $result->user_name;
                              $fletter = $uName[0]; 
                             echo '<span class="get_letter">'.$fletter.'</span>';
                             echo '</div>';
                             echo '<div class="comment__author">';
                               echo '<p>'.$result->user_name.'</p>';
                               echo '<!-- <span>2 days ago</span> -->';
                               echo '<a class="web_site_name_top" href="'.$result->location_url.'">'.$result->location_url.'</a>';
                             echo '</div>';
                           echo '</header>';
                           echo '<div class="comment__text">';
                          echo '<a>'.$result->message.'</a>';
                           echo '</div>';
                           echo '<nav class="comment__actions">';
                           $ques_votes = $result->likes;
                           if ($ques_votes != 0) {
                             echo '<span class="q_upvotes mdl-color-text--red-A400" id="upvotes_ques_'.$result->question_id.'">'.$result->likes.'</span>';
                           }else{
				 echo '<span class="q_upvotes mdl-color-text--red-A400"  style = "display:none;" id="upvotes_ques_'.$result->question_id.'"></span>';
			   }
                             echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="voteBtnId_'.$result->question_id.'" onClick="voteThisQuestion(this, 1);">';
                               echo '<i class="material-icons mdl-color-text--red-A400" id="quesIdIcon_'.$result->question_id.'" role="presentation">favorite_border</i><span class="visuallyhidden">like comment</span>';
                             echo '</button>';
                             echo '<button id="demo-menu-lower-right_'.$result->question_id.'" class="mdl-button mdl-js-button mdl-button--icon">';
                              echo '<i class="material-icons mdl-color-text--red-400">share</i>';
                              echo '</button>';

                              echo '<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right_'.$result->question_id.'">';
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
                               echo '<div class="rightsection">';
                               if ($result->total_replies === 0) {
					$encodedQues = urlencode($result->question_url);
                                   echo '<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp commt_btn" href="question/'.$encodedQues.'" target="_blank" disabled><span class="ttl_cmts">'.$result->total_replies.'</span><span> &nbsp;Comments</span></a>';

                                }else{
					$encodedQues = urlencode($result->question_url);
                                     echo '<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp commt_btn mdl-color--blue-400 mdl-color-text--grey-50" href="question/'.$encodedQues.'" target="_blank"><span class="ttl_cmts">'.$result->total_replies.'</span><span> &nbsp;Comments</span></a>';
                                }

                                   echo '<a class="web_site_name" href="'.$result->location_url.'">'.$result->location_url.'</a>';
                               echo '</div>';
                              

                           echo '</nav>';
                        echo ' </div>';
                          echo ' <!-- <div class="mdl-card__actions comments_text_area">';
                          echo ' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">';
                             echo '<textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>';
                             echo '<label for="comment" class="mdl-textfield__label">Join the discussion</label>';
                           echo '</div>';
                           echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">';
                             echo '<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>';
                           echo '</button>';
                         echo '</div> -->';
                       echo '</div>';

                     echo '</section>';

                }
                echo '<section class="section--footer mdl-color--white mdl-grid">';              
                                             
                        $nextPage = ($pageCurr + 1);
                        $prevPage = ($pageCurr - 1);

                         echo '<nav aria-label="Page navigation">';
                              echo '<ul class="pagination">';
                                echo '<li>';
                                  echo '<a href="?pg='.$prevPage.'" aria-label="Previous">';
                                    echo '<span aria-hidden="true">&laquo;</span>';
                                  echo '</a>';
                                echo '</li>';         
                                  for ($i=1; $i < $totalPages; $i++) { 
                                  echo "<li><a href='?pg=".$i."'>".$i."</a></li>";
                                }                           
                                
                                echo '<li>';
                                  echo '<a href="?pg='.$nextPage.'" aria-label="Next">';
                                    echo '<span aria-hidden="true">&raquo;</span>';
                                  echo '</a>';
                                echo '</li>';                 
                             echo '</ul>';
                        echo '</nav>';
                   
                  echo '</section>';

              }


                  ?>
                  

        </div>


        <div class="mdl-layout__tab-panel" id="features">
<?php
                  $chkpg = $_GET['pg'];
                    if ($chkpg > 1){
                      displayPoll($chkpg);
                    }else{
                      displayPoll(1);
                    }
                              

                function displayPoll($pageNo){  
                  $pageCurr = $_GET['pg'];
                  $login = 'your-username@xyz.com';
                  $password = 'yourpassword';
                  $url_poll = 'http://clients.yhatch.com/api/v3/poll_response/tour_api_token/';
                  $cha = curl_init();
                  $data1 = array("page" => $pageNo); 
                  $data_string_poll = json_encode($data1);
                  curl_setopt($cha, CURLOPT_URL,$url_poll);
                  curl_setopt($cha, CURLOPT_POST,1);
                  curl_setopt($cha, CURLOPT_RETURNTRANSFER,1);
                  curl_setopt($cha, CURLOPT_POSTFIELDS,$data_string_poll);
                  curl_setopt($cha, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                  curl_setopt($cha, CURLOPT_USERPWD, "$login:$password");
  
                
                $respo = curl_exec($cha);
                // Close request to clear up some resources
                curl_close($cha);
                // print_r($resp);


                $json1 = json_decode($respo, true);
                $newArr1 =$json1['Items'];
                $newJson1 = json_encode($newArr1);
                $jsonde1 = json_decode($newJson1);

                $totalPages1 = $json1['total_pages'];
                // echo "\n madhar ".$totalPages;
                $_SESSION['totalpg'] = $totalPages1; 

                foreach ($jsonde1 as $result1) {
                  $newArr2 =$result1->options;
                  $newJson2 = json_encode($newArr2);
                  $jsonde2 = json_decode($newJson2);
                  
                  $replies1 = $result1->replies1;

          echo '<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp postSection">';
          echo '<div class="topSectionNav">';
          echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon reportTopBtn" id="btntop_'.$result1->question_id.'">';
          echo '<i class="material-icons">more_vert</i>';
          echo '</button>';
          echo '<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btntop_'.$result1->question_id.'">';
          echo '<li class="mdl-menu__item" id="flagPollme_'.$result1->question_id.'" onClick="flagPollsMe(this);">Report</li>';
          echo '</ul>';
          echo '</div>';
            echo '<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">';
               echo '<div class="comment mdl-color-text--grey-700">';
                echo '<header class="comment__header">';
                echo '<div class="comment__avatar">';
                              $uName1 = $result1->user_name;
                              $fletter1 = $uName1[0]; 
                  echo '<span class="get_letter">'.$fletter1.'</span>';
                  echo '</div>';
                  echo '<div class="comment__author">';
                    echo '<p>'.$result1->user_name.'</p>';
                    echo '<!--<span>2 days ago</span> -->';
                  echo '</div>';
                echo '</header>';
                echo '<div class="comment__text">';
                  echo '<a>'.$result1->message.'</a>';
                echo '</div>';
        echo  '<div class="mdl-card__title mdl-card--expand inner_card_div">';
          echo '<div class="mdl-grid mdl-js-ripple-effect img_grig">';
          foreach ($jsonde2 as $result2) {
            echo '<div class="mdl-card mdl-shadow--2dp prod_list_poll">';
              echo '<div class="mdl-card__title mdl-card--expand inner_card" style="display: inline;">';
                echo '<a href="'.$result2->option_url.'" target="_blank" class="pollImg_href">';
                  echo '<img src="'.$result2->option_image_url.'">';
                echo '</a>';
              echo '</div>';
              echo '<div class="mdl-card__title mdl-card--expand inner_card" style="display:none;">';
                echo '<p></p>';
              echo '</div>';
              echo '<div class="mdl-card__actions mdl-card--border like_part"> ';
                echo '<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect vote_an_opt" id= "'.$result1->question_id.'_'.$result2->option_id.'" onclick= "votePollOption(this, 2);">';
                  echo '<span class="opt_count_thumb">'.$result2->total_votes.'</span>';
                    echo '&nbsp;';
                      echo '<i class="vote_for">Vote</i>';
                echo '</a>';
              echo '</div>';
            echo '</div>';
            }
          echo '</div>';
        echo '</div>';
                echo '<nav class="comment__actions">';
                $poll_votes = $result1->likes;
                    if ($ques_votes != 0) {
                      echo '<span class="p_upvotes mdl-color-text--red-A400" id="upvotes_poll_'.$result1->question_id.'">'.$result1->likes.'</span>';
                    }
                  echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="voteBtnId_'.$result1->question_id.'" onClick="voteThisPoll(this);">';
                    echo '<i class="material-icons mdl-color-text--red-A400" id="pollIdIcon_'.$result1->question_id.'" role="presentation">favorite_border</i><span class="visuallyhidden">like comment</span>';
                  echo '</button>';
                              echo '<button id="demo-menu-lower-right_'.$result1->question_id.'" class="mdl-button mdl-js-button mdl-button--icon">';
                              echo '<i class="material-icons mdl-color-text--red-400">share</i>';
                              echo '</button>';

                              echo '<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right_'.$result1->question_id.'">';
                              echo '<li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">';
                                 echo '<span class="visuallyhidden">Twitter</span>';
                               echo '</button>Twitter</li>';
                              echo '<li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">';
                                echo ' <span class="visuallyhidden">Facebook</span>';
                               echo '</button>Facebook</li>';
                              echo '<li class="mdl-menu__item"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">';
                                 echo '<span class="visuallyhidden">Google Plus</span>';
                               echo '</button>Google Plus</li>';
                            echo '</ul>';

                              echo '<div class="mdl-layout-spacer"></div>';
                               echo '<div class="rightsection">';
                               if ($result1->total_replies === 0) {
                                   echo '<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" disabled><span class="ttl_cmts">'.$result1->total_replies.'</span>&nbsp; COMMENTS';
                                   echo '</a>';

                                }else{
					$encodedQues = urlencode($result1->question_url);
                                     echo '<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp commt_btn mdl-color--blue-400 mdl-color-text--grey-50" href="poll/'.$encodedQues.'" target="_blank"><span class="ttl_cmts">'.$result1->total_replies.'</span>&nbsp; COMMENTS';
                                   echo '</a>';
                                }                              
                               echo '</div>';
                echo '</nav>';
              echo '</div>';
              echo '<!-- <div class="mdl-card__actions comments_text_area">';
                echo '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">';
                  echo '<textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>';
                  echo '<label for="comment" class="mdl-textfield__label">Join the discussion</label>';
                echo '</div>';
                echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">';
                  echo '<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>';
                echo '</button>';
              echo '</div> -->';
            echo '</div>';
          echo '</section>';
        }

        echo '<section class="section--footer mdl-color--white mdl-grid">';              
                                             
                        $nextPage1 = ($pageCurr + 1);
                        $prevPage1 = ($pageCurr - 1);

                         echo '<nav aria-label="Page navigation">';
                              echo '<ul class="pagination">';
                                echo '<li>';
                                  echo '<a href="?pg='.$prevPage1.'" aria-label="Previous">';
                                    echo '<span aria-hidden="true">&laquo;</span>';
                                  echo '</a>';
                                echo '</li>';         
                                  for ($i=1; $i <= $totalPages1; $i++) { 
                                  echo "<li><a href='?pg=".$i."'>".$i."</a></li>";
                                }                           
                                
                                echo '<li>';
                                  echo '<a href="?pg='.$nextPage1.'" aria-label="Next">';
                                    echo '<span aria-hidden="true">&raquo;</span>';
                                  echo '</a>';
                                echo '</li>';                 
                             echo '</ul>';
                        echo '</nav>';
                   
                  echo '</section>';
      }

?>

        </div>
        



        <footer class="mdl-mega-footer">
          <!-- <div class="mdl-mega-footer--middle-section">
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
    <script type="text/javascript" src="js/jquet-scrollTofixed.js"></script>
    <script src="js/community.js"></script>
    <script type="text/javascript">
      
    
    // $("#questApp").click(function(o){
    //  var queryParameters = {}, queryString = location.search.substring(1), re = /([^&=]+)=([^&]*)/g, m;
    //  while (m = re.exec(queryString)) {
    //       queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
    //   }
    //    queryParameters['type'] = 'question';
    //   //queryParameters['pg'] = '1';
    //   //location.search = $.param(queryParameters);
    //   location.hash = $.param(queryParameters);
    // });

    // $("#pollApp").click(function(o){
    //  var queryParameters = {}, queryString = location.search.substring(1), re = /([^&=]+)=([^&]*)/g, m;
    //  while (m = re.exec(queryString)) {
    //       queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
    //   }
    //    queryParameters['type'] = 'poll';
    //   //queryParameters['pg'] = '1';
    //   //location.search = $.param(queryParameters);
    //   location.hash =  $.param(queryParameters);
    // });


    function redirectToQuestion(obj, qId, replies){


      urlVal = obj.id;
      urlVal = urlVal +"&qid="+qId;
      console.log('urll'+urlVal);
      window.location = urlVal;

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
		    console.log('json dt'+JSON.stringify(data));

		    if(data.status == 'failure'){
			
		      alert(data.message);
		    }

		    if(data.status == 'success'){

		        var preVote =  parseInt($('#upvotes_ques_'+questionId).html());
		   
			if(isNaN(preVote)){
			 preVote = 0;
			}		
		        preVote++;
			
			$('#upvotes_ques_'+questionId).show();
			$('#upvotes_ques_'+questionId).html(preVote);
		     				
		    }		

		  },
		  failure: function(data){
		    console.log('json err'+JSON.stringify(data));
		  }
	     });


	}


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
	

	urlval =  'https://www.yhatch.com:3000/community_option_vote/'+userId+'/'+clientId+'/'+questionId+'/'+optionId;


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
					window.location.href = 'index.php';
					}
				}
		});

}

}
check_session = setInterval(CheckForSession, 5000);

function updateSession(){

	var str="updatesession=true";
		jQuery.ajax({
				type: "POST",
				url: "index.php",
				data: str,
				cache: false,
				success: function(res){
					
				}
		});

}

    </script>
  </body>
</html>
