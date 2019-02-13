<html>
<head>

<?php
$id = $_GET['id'];
?>

<link rel ="styleSheet" href="styleSheet.css" type="text/css" charset="utf-8"/>
<script type='text/javascript' src='jquery-1.11.3.js'></script>
<script type='text/javascript'>
window.onload=function(){

	function showPage(div){
		document.getElementById(div).style.visibility ='visible';
		document.getElementById(div).style.display='inline';
	}

	function hidePage(div){
		document.getElementById(div).style.visibility ='hidden';
		document.getElementById(div).style.display='none';
	}

	function newShuffle(array, array2, array3, array4, array5) {
		var counter = array.length, temp, temp2, index;

		// While there are elements in the array
		while (counter > 0) {
			// Pick a random index
			index = Math.floor(Math.random() * counter);

			// Decrease counter by 1
			counter--;

			// And swap the last element with it
			temp = array[counter];
			temp2 = array2[counter];
			temp3 = array3[counter];
			temp4 = array4[counter];
			temp5 = array5[counter];

			array[counter] = array[index];
			array2[counter] = array2[index];
			array3[counter] = array3[index];
			array4[counter] = array4[index];
			array5[counter] = array5[index];

			array[index] = temp;
			array2[index] = temp2;
			array3[index] = temp3;
			array4[index] = temp4;
			array5[index] = temp5;
		}
	}

	function randomString(length, chars){
		var result = '';
		for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
		return result;
	}

	// Two Back Trials
	var twoback_a_stimList = ("Q,F,B,R,X,X,X,M,M,K,B,B,M,Q,M,X,H,B,H,X,K,Q,F,F,F,K,K,M,R,H,H,M,B,R,B,F,Q,H,Q,R,F,R,H,K,X,K,R,Q").split(",");
	var twoback_a_stimulusType = [2,2,2,2,2,2,1,2,2,2,2,2,2,2,1,2,2,2,1,2,2,2,2,2,1,2,2,2,2,2,2,2,2,2,1,2,2,2,1,2,2,1,2,2,2,1,2,2];
	var twoback_a_sequenceType = [1,1,1,1,1,2,2,1,2,1,1,2,1,1,1,1,1,1,1,1,1,1,1,2,2,1,2,1,1,1,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
	var twoback_a_nFoil = new Array(48).fill(0);
	var twoback_block_a = new Array(48).fill("a");

	var twoback_b_stimList = ("R,Q,H,K,F,F,R,B,B,B,F,M,K,H,X,B,X,H,Q,H,F,K,Q,Q,Q,K,M,K,R,X,R,B,M,H,M,R,R,F,X,F,B,H,K,M,M,Q,X,X").split(",");
	var twoback_b_stimulusType = [2,2,2,2,2,2,2,2,2,1,2,2,2,2,2,2,1,2,2,1,2,2,2,2,1,2,2,1,2,2,1,2,2,2,1,2,2,2,2,1,2,2,2,2,2,2,2,2];
	var twoback_b_sequenceType = [1,1,1,1,1,2,1,1,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,1,1,1,1,1,1,1,1,1,1,1,2,1,1,1,1,1,1,1,2,1,1,2];
	var twoback_b_nFoil = new Array(48).fill(0);
	var twoback_block_b = new Array(48).fill("b");

	var twoback_c_stimList = ("F,X,H,M,F,X,X,M,H,F,Q,R,Q,B,B,M,X,M,F,H,F,K,M,H,H,H,B,Q,B,K,K,K,R,B,R,X,Q,X,M,K,R,R,F,Q,Q,K,R,B").split(",");
	var twoback_c_stimulusType = [2,2,2,2,2,2,2,2,2,2,2,2,1,2,2,2,2,1,2,2,1,2,2,2,2,1,2,2,1,2,2,1,2,2,1,2,2,1,2,2,2,2,2,2,2,2,2,2];
	var twoback_c_sequenceType = [1,1,1,1,1,1,2,1,1,1,1,1,1,1,2,1,1,1,1,1,1,1,1,1,2,2,1,1,1,1,2,2,1,1,1,1,1,1,1,1,1,2,1,1,2,1,1,1];
	var twoback_c_nFoil = new Array(48).fill(0);
	var twoback_block_c = new Array(48).fill("c");

	var twoback_d_stimList = ("K,F,X,B,R,H,Q,Q,K,F,K,M,R,R,R,X,B,X,Q,R,Q,K,K,X,R,B,H,B,F,F,H,B,H,M,M,M,Q,F,X,F,B,H,H,M,K,Q,X,M").split(",");
	var twoback_d_stimulusType = [2,2,2,2,2,2,2,2,2,2,1,2,2,2,1,2,2,1,2,2,1,2,2,2,2,2,2,1,2,2,2,2,1,2,2,1,2,2,2,1,2,2,2,2,2,2,2,2];
	var twoback_d_sequenceType = [1,1,1,1,1,1,1,2,1,1,1,1,1,2,2,1,1,1,1,1,1,1,2,1,1,1,1,1,1,2,1,1,1,1,2,2,1,1,1,1,1,1,2,1,1,1,1,1];
	var twoback_d_nFoil = new Array(48).fill(0);
	var twoback_block_d = new Array(48).fill("d");

	var stimArray = [twoback_a_stimList, twoback_b_stimList, twoback_c_stimList, twoback_d_stimList];
	var stimType = [twoback_a_stimulusType,twoback_b_stimulusType,twoback_c_stimulusType,twoback_d_stimulusType];
	var sequenceType = [twoback_a_sequenceType,twoback_b_sequenceType,twoback_c_sequenceType,twoback_d_sequenceType];
	var foilTypes = [twoback_a_nFoil,twoback_b_nFoil,twoback_c_nFoil,twoback_d_nFoil];
	var blockNames = [twoback_block_a,twoback_block_b,twoback_block_c,twoback_block_d];

	newShuffle(stimArray,stimType,sequenceType,foilTypes,blockNames);

	// Three Back Trials
	var threeback_a_stimList = ("F,X,R,H,K,R,F,Q,F,F,X,X,B,R,B,M,F,M,K,H,K,X,M,F,X,Q,K,Q,Q,B,M,R,B,H,X,H,K,Q,B,K,H,R,Q,H,M,B,R,M").split(",");
	var threeback_a_stimulusType = [2,2,2,2,2,1,2,2,2,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2,2,2,2,1,2,2,2,1,2,2,2,1];
	var threeback_a_sequenceType = [1,1,1,1,1,1,1,1,2,2,1,2,1,1,2,1,1,2,1,1,2,1,1,1,1,1,1,2,2,1,1,1,1,1,1,2,1,1,1,1,1,1,1,1,1,1,1,1];
	var threeback_a_nFoil = [0,0,0,0,0,0,0,0,2,0,0,1,0,0,2,0,0,2,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0];
	var threeback_block_a = new Array(48).fill("a");

	var threeback_b_stimList = ("F,M,B,Q,X,B,F,K,F,Q,H,Q,M,R,M,M,X,B,H,X,F,R,K,F,B,B,R,X,R,K,Q,M,K,R,B,H,R,Q,M,X,Q,H,F,H,H,K,X,K").split(",");
	var threeback_b_stimulusType = [2,2,2,2,2,1,2,2,2,2,2,2,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2,2,2,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2];
	var threeback_b_sequenceType = [1,1,1,1,1,1,1,1,2,1,1,2,1,1,2,2,1,1,1,1,1,1,1,1,1,2,1,1,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,1,1,2];
	var threeback_b_nFoil = [0,0,0,0,0,0,0,0,2,0,0,2,0,0,2,0,0,0,0,0,0,0,0,0,0,1,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,2];
	var threeback_block_b = new Array(48).fill("b");

	var threeback_c_stimList = ("B,H,R,F,M,R,H,X,B,H,R,F,R,B,H,B,K,X,Q,K,F,M,F,F,Q,Q,B,R,F,B,M,K,M,M,X,R,X,Q,H,K,Q,X,M,H,X,K,Q,K").split(",");
	var threeback_c_stimulusType = [2,2,2,2,2,1,2,2,2,1,2,2,2,2,2,2,2,2,2,1,2,2,2,1,2,2,2,2,2,1,2,2,2,1,2,2,2,2,2,2,1,2,2,2,1,2,2,2];
	var threeback_c_sequenceType = [1,1,1,1,1,1,1,1,1,1,1,1,2,1,1,2,1,1,1,1,1,1,2,2,1,2,1,1,1,1,1,1,2,2,1,1,2,1,1,1,1,1,1,1,1,1,1,2];
	var threeback_c_nFoil = [0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,2,0,0,0,0,0,0,2,0,0,1,0,0,0,0,0,0,2,0,0,0,2,0,0,0,0,0,0,0,0,0,0,2];
	var threeback_block_c = new Array(48).fill("c");

	var threeback_d_stimList = ("B,K,M,Q,F,M,K,H,R,K,B,M,H,B,F,K,F,R,Q,X,R,H,F,H,H,X,R,X,M,M,Q,R,Q,Q,K,H,K,X,B,M,X,F,R,Q,F,B,X,B").split(",");
	var threeback_d_stimulusType = [2,2,2,2,2,1,2,2,2,1,2,2,2,1,2,2,2,2,2,2,1,2,2,2,1,2,2,2,2,2,2,2,2,1,2,2,2,2,2,2,1,2,2,2,1,2,2,2];
	var threeback_d_sequenceType = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,1,1,1,1,1,1,2,2,1,1,2,1,2,1,1,2,2,1,1,2,1,1,1,1,1,1,1,1,1,1,2];
	var threeback_d_nFoil = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,2,0,1,0,0,2,0,0,0,2,0,0,0,0,0,0,0,0,0,0,2];
	var threeback_block_d = new Array(48).fill("d");

	// Trial information
	var trial_duration = 2500;
	var stim_duration = 2000;
	var showCorrect = false;
	var data=[['']];

	var response='noResp';
	var rt = 'noRT';
	var omission = 1;

	var startedAt = new Date();

	var trial = 0; //local and indexing trial counter
	var trialCounter = 0; //global trial counter
	var numTrials = stimArray[0].length; //length of 1 block

	var nbacks = [2,3];
	var blocks = ["a","b","c","d"];
	var this_block = 0;
	var nbacks_completed = 0;

	function logKeyPress(evt){
		evt = evt || window.event;
		var charCode = evt.keyCode || evt.which;
		now = new Date();
		if (charCode==97 || charCode==65){
			pressTime = now.getTime();
			rt = (pressTime-trialStartTime);
			omission = 0;
			response='nonTarget';
			return false;
		}
		else if (charCode==108 || charCode==76){
			pressTime = now.getTime();
			rt = (pressTime-trialStartTime);
			omission = 0;
			response='Target';
			return false;
		}
		else{return true;}
	}

	document.onkeypress = logKeyPress;

	function startTask(){
		document.getElementById('stim').innerHTML="<p style='font-size:14pt;'>Get Ready...</p>";
		trialTimer = setTimeout(runTrial,trial_duration);
		stimTimer = setTimeout(drawFixation,stim_duration);
	}

	function logData(){
		//data[trialCounter] = ["thisnback_"+nbacks[nbacks_completed],"trialCounter_"+trialCounter,"blockName_"+blockNames[this_block][trial],"thisblock_"+this_block,"trial_"+trial,"stimulus_"+stimArray[this_block][trial], "stimType_"+stimType[this_block][trial],"seqType_"+sequenceType[this_block][trial],"foilType_"+foilTypes[this_block][trial],"omission_"+ omission,"response_"+response,"rt_"+rt];
		data[trialCounter] = [nbacks[nbacks_completed],trialCounter,blockNames[this_block][trial],this_block,trial,stimArray[this_block][trial],stimType[this_block][trial],sequenceType[this_block][trial],foilTypes[this_block][trial],omission,response,rt];

	}

	function incrementCounters(){
		trial++; //stimuli indexing
		trialCounter++; //data indexing
	}

	function nextTrial(){
		logData();
		incrementCounters();
		runTrial();
	}

	function drawFixation(){
		document.getElementById('stim').innerHTML="+";
	}

	function runTrial(){
		if (trial < numTrials){
			if (showCorrect){
				if (stimType[this_block][trial]==1){
					if (sequenceType[this_block][trial]==1){document.getElementById('stim').style.color="blue"}
					else{document.getElementById('stim').style.color="fuchsia"}
				}
				else{
					if (sequenceType[this_block][trial]==1){document.getElementById('stim').style.color="black"}
					else{document.getElementById('stim').style.color="red"}
				}
			}

			clearTimeout(stimTimer,trialTimer);

			document.onkeypress = logKeyPress;
			document.getElementById('stim').innerHTML=stimArray[this_block][trial];

			trialStartTime = new Date();
			trialStartTime = trialStartTime.getTime(); //mark start of trial

			stimTimer = setTimeout(drawFixation,stim_duration); //draw fixation
			trialTimer = setTimeout(nextTrial,trial_duration); //start new trial
			/*
			document.getElementById('displayNback').innerHTML=nbacks[nbacks_completed]+"-back";
			document.getElementById('counter').innerHTML="trialCounter "+trialCounter+" trial "+trial+" dataIndex "+dataIndex;
			document.getElementById('blockCounter').innerHTML="block counter "+this_block;
			document.getElementById('blockID').innerHTML="block name "+blockNames[this_block][trial];
			document.getElementById('nbacksFinished').innerHTML="n backs completed "+nbacks_completed;
			*/
			response='noResp';
			rt = 'noRT';
			omission = 1;
		}
		else{
			hidePage('stim');
			hidePage('theKeys');
			hidePage('instructReminder');
			if (this_block<blocks.length-1 && nbacks_completed<nbacks.length){
				showPage('blockOverPage');
			}
			else if (nbacks_completed<nbacks.length-1){
				nbacks_completed++;
				showPage('threeBackInstructionPage');
			}
			else{
				showPage('endPage');
			}
		}
	}
/*
	showPage('infoPage');
	$('#continue').click(function(){
		hidePage('infoPage');
		showPage('consentPage');
	});

	$('#consent').click(function(){
		hidePage('consentPage');
		showPage('twoBackInstructionPage');
	});
*/
	showPage('twoBackInstructionPage');
	$('#startTwoBack').click(function(){
		hidePage('twoBackInstructionPage');
		showPage('stim');
		showPage('theKeys');
		showPage('instructReminder');
		startTask();
	});

	$('#continueTask').click(function(){
		hidePage('blockOverPage');
		document.getElementById('stim').innerHTML='';
		showPage('stim');
		showPage('theKeys');
		showPage('instructReminder');
		trial = 0;
		this_block++;
		startTask();
	});

	$('#startThreeBack').click(function(){
		hidePage('threeBackInstructionPage');
		document.getElementById('stim').innerHTML='';
		showPage('stim');
		showPage('theKeys');

		document.getElementById('instructReminder').innerHTML="<p align='center'><b>3-BACK</b></p><p><b>Remember:</b> Your task is to indicate whether the current letter matches the letter presented <i>three</i> items back.</p>";
		showPage('instructReminder');
		stimArray = [threeback_a_stimList, threeback_b_stimList,threeback_c_stimList,threeback_d_stimList];
		stimType = [threeback_a_stimulusType,threeback_b_stimulusType,threeback_c_stimulusType,threeback_d_stimulusType];
		sequenceType = [threeback_a_sequenceType,threeback_b_sequenceType,threeback_c_sequenceType,threeback_d_sequenceType];
		foilTypes = [threeback_a_nFoil,threeback_b_nFoil,threeback_c_nFoil,threeback_d_nFoil];
		blockNames = [threeback_block_a,threeback_block_b,threeback_block_c,threeback_block_d];

		newShuffle(stimArray,stimType,sequenceType,foilTypes,blockNames);

		trial = 0;
		this_block = 0;

		startTask();
	});

	$('#submit').click(function(){
		var rString = randomString(8, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
		theTurkCode=document.getElementById('putmTurkCodeHere');
		theDATA=document.getElementById('putDataHere');

		theTurkCode.value=rString; //generate mTurkCode
		theDATA.value=data;

		theForm=document.getElementById('sendtoPHP');
		theForm.submit();
	});
};
</script>
</head>

<body>
<form id = 'sendtoPHP' method = 'post' action = 'serverSidePHPFile.php'>
<input type = 'hidden' name = 'putSubHere' id = 'putSubHere' value = '<?php echo $id;?>'/>
<input type = 'hidden' name = 'putmTurkCodeHere' id = 'putmTurkCodeHere' value = ''/>
<input type = 'hidden' name = 'putDataHere' id = 'putDataHere' value = ''/>
</form>

<div id = 'stim' class = 'stimuli'></div>

<div id = 'instructReminder' class = 'reminder'>
	<p align='center'><b>2-BACK</b></p>
	<p><b>Remember:</b> Your task is to indicate whether the current letter matches the letter presented <i>two</i> items back.</p>
</div>

<div id = 'theKeys' class = 'responseOptions'>
	<p>Press A for NON-MATCH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Press L for MATCH</p>
</div>

<div id = 'displayNback'></div>
<div id = 'counter'></div>
<div id = 'blockCounter'></div>
<div id = 'blockID'></div>
<div id = 'nbacksFinished'></div>

<div id = 'infoPage'>
	<p>Your information letter here</p>
	<button id='continue'>Continue</button>
</div>

<div id = 'consentPage'>
	<p>Your consent form here </p>
	<input id = 'sonaNum' name= 'sonaNum' type='text' maxlength='6' value='<?php echo $id;?>' onchange="this.value='<?php echo $id; ?>';">
	<button id = 'consent'>I AGREE</button></p>
</div>

<div id = 'twoBackInstructionPage'>
	<p><b>Part 3 of 5:</b></p>
	<p>Now we would like you to complete a task called the 2-Back.</p>
	<p>In this task, you will be presented with a series of letters, one at a time, in the centre of the screen.
	 On each trial, your task is to indicate whether the <b>current letter matches</b> the letter presented <b>two</b> items back.</p>
	<p>For example, you might see the sequence:</p>
	<p>A-B-C-<span style="color:blue;">B<span style="color:black;"></p>
	<p>Here, the second 'B' matches the item presented two items back, whereas all other letters do not.</p>
	<p>If the <b>current letter matches</b> the letter presented <b><i>two</i> items back</b>, press the 'L' key.</p>
	<p>If the <b>current letter does not match</b> the letter presented <b><i>two</i> items back,</b> press the 'A' key.</p>
	<p>There will be four blocks of trials, with a small break in-between each block.</p>
	<p>Please do your best to respond on each trial.</p>
	<p>When you are ready to begin, please click the 'Start Task' button.</p>
	<button id = 'startTwoBack'>Start Task</button>
	<br>
	<p><b><i>Please be advised: Refreshing your browser will cause the task to reset. Please do not refresh your browser.</i></b></p>
</div>

<div id = 'threeBackInstructionPage'>
	<p><b>Part 4 of 5:</b></p>
	<p>Similar to the task you just performed, now we would like you to complete a <b><i>3-Back.</i></b></p>
	<p>This time, your task is to indicate whether the <b>current letter matches</b> the letter presented <b>three</b> items back.</p>
	<p>For example, you might see the sequence:</p>
	<p>A-B-C-<span style="color:blue;">A<span style="color:black;"></p>
	<p>Here, the second 'A' matches the item presented three items back, whereas all other letters do not.</p>
	<p>If the <b>current letter matches</b> the letter presented <b><i>three</i> items back</b>, press the 'L' key.</p>
	<p>If the <b>current letter does not match</b> the letter presented <b><i>three</i> items back,</b> press the 'A' key.</p>
	<p>There will be four blocks of trials, with a small break in-between each block.</p>
	<p>Please do your best to respond on each trial.</p>
	<p>When you are ready to begin, please click the 'Start Task' button.</p>
	<button id = 'startThreeBack'>Start Task</button>
	<br>
	<p><b><i>Please be advised: Refreshing your browser will cause the task to reset. Please do not refresh your browser.</i></b></p>
</div>

<div id = 'endPage'>
	<p>The experiment is almost over.</p>
	<button id = 'submit'>Click here to proceed to the last questionnaire</button>
</div>

<div id = 'blockOverPage'>
	<p>You've finished a block of trials.</p>
	<p>Click the "Next Block of Trials" button to begin the next block of trials.</p>
	<p>Please do not take more than a few seconds of rest.</p>
	<button id = 'continueTask'>Next Block of Trials</button></p>
</div>

</body>
</html>
