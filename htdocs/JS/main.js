let bonneReponse = document.querySelector('#bonneReponse');
let score = document.querySelector('.score');
let blocks = document.querySelectorAll('#rep');


document.querySelector('.next').addEventListener("click", newQuestion);

$(document).ready(function(){

  bindButtonClick();
});

function bindButtonClick(){
    
      setTimeout(() => {
        blocks = document.querySelectorAll('#rep');
        bonneReponse = document.querySelector('#bonneReponse');
        blocks.forEach(block=>{
          block.addEventListener("click", correctionReponse);
        })
      }, 100);
}

function newQuestion(){
  $('#questionreponse').load(document.URL +  ' #questionreponse','',function(){
    bindButtonClick()
  })
}

function correctionReponse(){
  blocks.forEach(block=>{
    if (event.target.value == bonneReponse.value) {
      event.target.style.borderColor = "limegreen";
      score.value ++;
        block.setAttribute("disabled", "");
    }else{
      event.target.style.borderColor = "red";
      block.setAttribute("disabled", "");
    }

    if(bonneReponse.value == block.value){
      block.style.borderColor = "limegreen";
    }
  })  
  sendQuestion()
}

function sendQuestion(){
  let questionId = document.querySelector('#questionId');
  let userId = document.querySelector('.user_id');
  let formData = new FormData();
  formData.append('user_id', userId.value)
  formData.append('question_id', questionId.value)
  fetch('/process/update_user.php', {
    method: 'post',
    body : formData
    
  })
}
