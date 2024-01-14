const questionDet = [
    {
        question: "1. The physical parts of a computer are termed as",
        answerOne: "Hard Drive",
        answerTwo: "Disk Drive",
        answerThree: "Software",
        answerFour: "Hardware",
        correct: "answerFour",
    },
    {
        question: "2. Another name for computer programs is",
        answerOne: "RAM",
        answerTwo: "Software",
        answerThree: "Input Devices",
        answerFour: "Hardware",
        correct: "answerTwo",
    },
    {
        question: "3. Who is the father of Computers?",
        answerOne: "Charles Babbage",
        answerTwo: "James Gosling",
        answerThree: "Dennis Ritchie",
        answerFour: "Bjarne Stroustrup",
        correct: "answerOne",
    },
    {
        question: "4. What is the full form of CPU?",
        answerOne: "Computer Processing Uni",
        answerTwo: "Central Processing Unit",
        answerThree: "Computer Principle Unit",
        answerFour: "Control Processing Unit",
        correct: "answerTwo",
    },
    {
        question: "5. Which of the following is the smallest unit of data in a computer?",
        answerOne: "KB",
        answerTwo: "Bit",
        answerThree: "MB",
        answerFour: "Byte",
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
           <a href="http://127.0.0.1:5500/quiz/Ordinary/1/answers.html">View Answers</a>
           `
        }

        else if (finalMark == 4){
      
            questSection.innerHTML = 
            
            `
            <h2> Great Job ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Reload</button>
            <a href="http://127.0.0.1:5500/quiz/Ordinary/1/answers.html">View Answers</a>
            `
         }

         else if (finalMark == 3){

       
            questSection.innerHTML = 
            
            `
            <h2> Better luck next time ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Reload</button>
            <a href="http://127.0.0.1:5500/quiz/Ordinary/1/answers.html">View Answers</a>
            `
         }

         else if (2 >= finalMark){

       
            questSection.innerHTML = 
            
            `
            <h2> Try Again ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Replay</button>
            <a href="http://127.0.0.1:5500/quiz/Ordinary/1/answers.html">View Answers</a>
            `
         }

         
          
       }
    }

})