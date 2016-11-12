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
    <meta name="msapplication-TileImage" content="/community/images/touch/ms-touch-icon-144x144-precomposed.png">
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
  
       ?>
        

         <script>

         var fullName = "<?php echo $userName; ?>";  
         var userId = "<?php echo $userId; ?>";  

         console.log("user name "+fullName);
         console.log("user id "+userId);

         localStorage.setItem('user_fullName', fullName);
         localStorage.setItem('user_id', userId);

         </script>  

    
              <a class="mdl-navigation__link mdl-color-text--light-blue-700" href=""><?php echo $userName;?></a>
            <div>
               <form action = "http://commonlogin.eldew.com?redirect_uri=<?php echo $hostName ?>" method = "post">
                <input type="hidden" name="action_val" value="logout">          
                <input class="mdl-navigation__link mdl-color-text--light-blue-700 mdlBtn_log" type="submit" name="login" value="Logout">
             </form>
          </div>  
       <?php }else{?>
      
          <div>
              <form action = "http://commonlogin.eldew.com?redirect_uri=<?php echo $hostName ?>" method = "post">
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
                  $url = 'http://clients.yhatch.com/api/v3/poll_answer/tour_api_token/';
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

                $newArr2 = $json['options'];
                        $newJson2 = json_encode($newArr2);
                        $jsonde2 = json_decode($newJson2);

                $totalPages = $json['total_pages'];
                
                $_SESSION['totalpg'] = $totalPages; 

                 echo '<div class="mdl-layout mdl-layout__header-row headerPoll">';
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
                  echo '<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect vote_an_opt">';
                    echo '<span class="opt_count_thumb">'.$result2->total_votes.'</span>';
                      echo '&nbsp;';
                        echo '<i class="vote_for">Vote</i>';
                  echo '</a>';
                echo '</div>';
              echo '</div>';
              }
          echo '</div>';
        echo '</div>';
                            echo '</div>';

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

               //           echo '<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--4dp postSection">';
               //              echo '<div class="topSectionNav">';
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
               //                     $fletter = $uName[0];
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
                     //      echo '<nav class="comment__actions">';
                       //     echo '<div class="mdl-layout-spacer"></div>';
                        // echo '<div class="rightsection">';
                  //                        echo '<a class="web_site_name" href="'.$json['location_url'][0].'">'.$json['location_url'][0].'</a>';
                 //                       echo '</div>';
                //                      echo '</nav>';
                //                  echo '</div>';
                //                  echo '</section>';
                                 echo '<div class="mdl-rply-section">';
                          foreach ($jsonde as $result) {
                            echo '<section class="section--center mdl-grid mdl-grid--no-spacing answer_list" id="answer_list">'; 
                            echo '<div class="topSectionNav">';
                              echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon reportTopBtn" id="questionDropBtn'.$result->reply_id.'">';
                                 echo '<i class="material-icons">more_vert</i>';
                               echo '</button>';
                               echo '<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="questionDropBtn'.$result->reply_id.'">';
                                 echo '<li class="mdl-menu__item" id="flagPollme_'.$result1->question_id.'" onClick="flagPollsMe(this);">Report</li>';
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
                           }
                             echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="voteBtnId_'.$result->question_id.'" onClick="voteThisQuestion(this);">';
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
                         echo ' <div class="mdl-card__actions comments_text_area">';
                          echo ' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">';
                             echo '<textarea rows=3 class="mdl-textfield__input" id="comment"></textarea>';
                             echo '<label for="comment" class="mdl-textfield__label">Join the discussion</label>';
                           echo '</div>';
                           echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">';
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

        </script>
   </body>
  


</html>
