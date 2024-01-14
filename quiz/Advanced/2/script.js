const questionDet = [
    {
        question: "1. In Computer terminology 'CAD' is stands for",
        answerOne: "Computer and Design",
        answerTwo: "Computer and Device",
        answerThree: "Computer Algorithm in Design",
        answerFour: "Computer Aided Design",
        correct: "answerFour",
    },
    {
        question: "2. A collection of hyperlinked documents on the internet forms the",
        answerOne: "E-mail system",
        answerTwo: "World Wide Web (WWW)",
        answerThree: "Mailing list",
        answerFour: "Hypertext markup language",
        correct: "answerTwo",
    },
    {
    question: " The location of a resource on the internet is given by its?",
        answerOne: "URL",
        answerTwo: "E-mail address",
        answerThree: "Protocol",
        answerFour: "ICQ",
        correct: "answerOne",
    },
    {
        question: "4. The term HTTP stands for?",
        answerOne: "Hyper terminal tracing program",
        answerTwo: "Hypertext transfer protocol",
        answerThree: "Hypertext tracing protocol",
        answerFour: "Hypertext transfer program",
        correct: "answerTwo",
    },
    {
        question: "5. Which software prevents the external access to a system?",
        answerOne: "Gateway",
        answerTwo: "Firewall",
        answerThree: "Router",
        answerFour: "Virus checker",
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
           <a href="http://127.0.0.1:5500/quiz/Advanced/2/answers.html">View Answers</a>
           
           
           `
        }

        else if (finalMark == 4){
      
            questSection.innerHTML = 
            
            `
            <h2> Great Job ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Restart</button>
            
            `
         }

         else if (finalMark == 3){

       
            questSection.innerHTML = 
            
            `
            <h2> Better luck next time ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Restart</button>
            
            `
         }

         else if (2 >= finalMark){

       
            questSection.innerHTML = 
            
            `
            <h2> Try Again ! Your final score is ${finalMark} Out of ${questionDet.length}</h2>
            
            <button onclick="location.reload()">Restart</button>
            
            `
         }

         
          
       }
    }

})