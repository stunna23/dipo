
$(function(){
    var i = 0; // keep track of question number
    var score = 0; // keep record of correct answers
    
    //function to load questions and answers
    function loadQuestions() {
        $("#question").text(q[i][0]); 
        $("#optionValueA").text(q[i][1]); $("#optionA").val(q[i][1]);
        $("#optionValueB").text(q[i][2]); $("#optionB").val(q[i][2]);
        $("#optionValueC").text(q[i][3]); $("#optionC").val(q[i][3]);
        $("#optionValueD").text(q[i][4]); $("#optionD").val(q[i][4]);
    }
    
    var counter;
var timeAllowed = 30;
 var counter;
var timeAllowed = 30;
function countDown(){
	if(!counter){
		counter = setInterval(countDown,1000);
		
	}

	
	if(timeAllowed>0){
		timeAllowed=timeAllowed - 1;
		document.getElementById("timeallowed").innerHTML=timeAllowed;
    }}
    
    //function to get question number
  
    //compare selected answer with aanswers in the array
    $(":radio").click(function(){
       var selectedAnswer = $('input[name=answer]:checked').val();
        if(selectedAnswer == answers[i]){
            score += 1;
            console.log(score);
        }
    });
                         
    //start function: show PREVIOUS & NEXT, hide START
    $("#start").click(function(){
        
        $(".showHide").show();
        $("#start").hide();
        loadQuestions()
        countDown()
        i = i+1;
        document.getElementById("questionNumber").innerHTML = i;
    });
    
    //function to load NEXT QUESTION
    $("#next").click(function(){
//    if(i == 0){
//        currentQuestion = i;
//     document.getElementById("questionNumber").innerHTML = currentQuestion;
//        
//        
//    }
        
        i += 1;
        document.getElementById("questionNumber").innerHTML = i;
        if(i < 50){
            loadQuestions();
            
        } else {
             document.write("You Scored : " + score + "out of 5")
         score = document.getElementById("scores").innerHTML;
        
        }
    });
    $("#prev").click(function(){
        i -= 1;
         document.getElementById("questionNumber").innerHTML = i;
        if(i < 50){
            loadQuestions();
        } else {
            document.write("You Scored : " + score + "out of 5")
        }
    });
    
});

    //Here are questions and answers as arrays
var q = [
    ["A farm practice that resultsin the loss ofsoil fertility is ", "continuous cropping", "mixed farming", "hifting cultivation", "bush fallowing","None of the Above"],
    
    ["state in Nigeria that is most susceptible to desert encroachment is", "Kaduna", "kastina", "Kwara", "Taraba","None of the Above"],
    
    ["The association between termites and the cellulosedigesting protozoan in their gutsis an example of", "parasitism", "Mutualism", "saprophytism", "saprophytism"],
    
   ["The association between termites and the cellulosedigesting protozoan in their gutsis an example of", "parasitism", "Mutualism", "saprophytism","None of the above", "saprophytism"],
    
    ["The scarcity of food causes a sudden decrease in population size by.", "minimizing the rate of competition", "raising the mortality rate", "decreasing the reproductive rat","None of the above", "bringing about immigration"],
    
    ["High relative humiditywill be expected in zones.", "II and III", "II and IV", "I and IV","None of the above", "I and III"],
    
    ["Which of the zones is likely to be a desert?", "III", "II", "I", "IV"],
    [" Plants survive hot dry conditions by", "storing water in large parenchyma cells", "having evergreen leave", "having numerous stomata", "producing numerous leaves","All of the above"],
    
    ["A caterpillar and an aphid living in different parts of the same plant can be said to", "be in different habitats", " occupy the same ecological niche", "occupy different ecological niches", " be in similar microhabitat"],
    ["The progressive loss of energy at each level in a food chain leads to", "a decrease in biomass at each successive level", "an increase in the number of organisms at each successive level", "an increase in the total weight of living matter at each successive level ","None of the above", "an increase in biomass at each successive level"],
    ["Which of this list is an animal", "Football", "Goal Post",  "Kangaroo", "Laptop"]
    
];


var answers = ["Nigeria","Ogudu","Chair","Laptop","Kangaroo","thids"];





