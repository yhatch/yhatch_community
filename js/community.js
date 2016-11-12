$(document).ready(function() {

console.log("call to fix it 1 ");
  $('#top_header').scrollToFixed();



}); /* ======================================== end of document ready ======================================== */

function voteThisQuestion(elem){
	var id = $(elem).attr("id");	
	ques_id = id.substr(id.indexOf("_") + 1);
	var countquesVote = $('upvotes_ques_'+ques_id).html();
    console.log("current question clicked "+ques_id+ " id for votes "+countquesVote);
    $('#quesIdIcon_'+ques_id).html($('#quesIdIcon_'+ques_id).text() == 'favorite_border' ? 'favorite' : 'favorite_border');
}


function voteThisPoll(elem){
	var id = $(elem).attr("id");
	ques_id = id.substr(id.indexOf("_") + 1);
    console.log("current poll clicked "+ques_id);
    $('#pollIdIcon_'+ques_id).html($('#pollIdIcon_'+ques_id).text() == 'favorite_border' ? 'favorite' : 'favorite_border');
}


function flagQuesMe(elem){
  var id = $(elem).attr('id');
  ques_id = id.substr(id.indexOf("_") + 1);
  $('#flag_reason_msg').show();
}

function flagPollsMe(elem){
  var id = $(elem).attr('id');
  ques_id = id.substr(id.indexOf("_") + 1);
  $('#flag_reason_msg').show();
}


$('.close_parent').click(function(){
  $('#flag_reason_msg').hide();
});



