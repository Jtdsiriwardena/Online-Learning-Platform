const questionDet = [
    {
        question: "1. Which is the following is not a mobile device ?",
        answerOne: "Tablet",
        answerTwo: "Smartphone",
        answerThree: "E Reader",
        answerFour: "Desktop PC",
        correct: "answerFour",
    },
    {
        question: "2. is a type of memory circuitry that holds the computer’s start-up routine",
        answerOne: "RIM",
        answerTwo: "ROM",
        answerThree: "REM",
        answerFour: "Cache Memory",
        correct: "answerTwo",
    },
    {
        question: "3. Which of the following is not true about RAM?",
        answerOne: "RAM is the same as hard disk storage",
        answerTwo: "RAM is a temporary storage area",
        answerThree: "RAM is volatile",
        answerFour: "Information stored in RAM is gone when you turn the computer off",
        correct: "answerOne",
    },
    {
        question: "4. Which one of the following would not be considered as a form of secondary storage?",
        answerOne: "Floppy Disk",
        answerTwo: "RAM",
        answerThree: "Optical Disk",
        answerFour: "Flash Drive",
        correct: "answerTwo",
    },
    {
        question: "5. Bluetooth is a information transmission system that is good for about",
        answerOne: "30 yards",
        answerTwo: "30 feet",
        answerThree: "30 miles",
        answerFour: "300 miles",
        correct: "answerTwo",
    }
];
const questSection= document.getElementById('questionSection')
const userAns = document.querySelectorAll('.answer')
const quizColl = document.getElementById('question')
const nextBtn = document.getElementById('nextButton')
const one = document.getElementById('first')
const two = document.getElementById('second')
const three = document.getElementById('third')
const four = document.getElementById('fourth')


let questionCur = 0
let finalMark = 0

startApp()
function startApp() {
    disabledAns()
    const questionCurData = questionDet[questionCur]
    quizColl.innerText = questionCurData.question
    one.innerText = questionCurData.answerOne
    two.innerText = questionCurData.answerTwo
    three.innerText = questionCurData.answerThree
    four.innerText = questionCurData.answerFour
}
function disabledAns() {
    userAns.forEach(answerEl => answerEl.checked = false)
}
function selectedAns() {
    let answer
    userAns.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
nextBtn.addEventListener('click', () => {
    const answer = selectedAns()

    if(answer) {
       if(answer === questionDet[questionCur].correct) {
           finalMark++
       }

    else{
        swal({
            title: "Wrong Answer!",
            text: "Try again next time ",
            icon: "error",
            button: "Next",
            
          });
    }

       questionCur++
       if(questionCur < questionDet.length) {
           startApp()
       } 
       
       else { 
        
        if (finalMark == 5){
     
           questSection.innerHTML = 
           
           `
           <h2>Excellent ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
           
           <button onclick="location.reload()">Reload</button>
           <a href="http://127.0.0.1:5500/quiz/Ordinary/2/answers.html">View Answers</a>
           `
        }

        else if (finalMark == 4){
      
            questSection.innerHTML = 
            
            `
            <h2> Great Job ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Reload</button>
            <a href="http://127.0.0.1:5500/quiz/Ordinary/2/answers.html">View Answers</a>
            `
         }

         else if (finalMark == 3){

       
            questSection.innerHTML = 
            
            `
            <h2> Better luck next time ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Reload</button>
            <a href="http://127.0.0.1:5500/quiz/Ordinary/2/answers.html">View Answers</a>
            `
         }

         else if (2 >= finalMark){

       
            questSection.innerHTML = 
            
            `
            <h2> Try Again ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Replay</button>
            <a href="http://127.0.0.1:5500/quiz/Ordinary/2/answers.html">View Answers</a>
            `
         }

         
          
       }
    }

})