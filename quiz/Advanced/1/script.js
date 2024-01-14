const questionDet = [
    {
        question: "1. You can shutdown, standby and restart the computer using ",
        answerOne: "Menu Button",
        answerTwo: "Settings",
        answerThree: "Task Button",
        answerFour: "Start Button",
        correct: "answerFour",
    },
    {
        question: "2. The device that enables the computer to make a dial up connection ? ",
        answerOne: "CPU",
        answerTwo: "Modem",
        answerThree: "monitor",
        answerFour: "Speaker",
        correct: "answerTwo",
    },
    {
        question: "3. Which of the following is not an operating system ?",
        answerOne: "DOS",
        answerTwo: "Windows",
        answerThree: "Linux",
        answerFour: "racle",
        correct: "answerOne",
    },
    {
        question: "4. Which of the following is the extension of Notepad?",
        answerOne: ".pptx",
        answerTwo: ".txt",
        answerThree: ".doc",
        answerFour: ".bmp",
        correct: "answerTwo",
    },
    {
        question: "5. When you delete a file in your computer, where does it go?",
        answerOne: "Hard Disk",
        answerTwo: "Recycle Bin",
        answerThree: "Taskbar",
        answerFour: "None of these",
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
           
           <button onclick="location.reload()">Restart</button>
            <a href="http://127.0.0.1:5500/quiz/Advanced/1/answers.html">View Answers</a>
           
           `
        }

        else if (finalMark == 4){
      
            questSection.innerHTML = 
            
            `
            <h2> Great Job ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Restart</button>
            <a href="http://127.0.0.1:5500/quiz/Advanced/1/answers.html">View Answers</a>
            `
         }

         else if (finalMark == 3){

       
            questSection.innerHTML = 
            
            `
            <h2> Better luck next time ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Restart</button>
            <a href="http://127.0.0.1:5500/quiz/Advanced/1/answers.html">View Answers</a>
            `
         }

         else if (2 >= finalMark){

       
            questSection.innerHTML = 
            
            `
            <h2> Try Again ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Restart</button>
            <a href="http://127.0.0.1:5500/quiz/Advanced/1/answers.html">View Answers</a>
            `
         }

         
          
       }
    }

})