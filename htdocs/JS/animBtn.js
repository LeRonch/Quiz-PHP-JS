function deleteNextBtn(){
    let nextBtn = document.querySelector('#next')

    setTimeout(() => {
        console.log(nextBtn);
        nextBtn.style.display = "none"
    }, 120000);


}
console.log('ppl');
deleteNextBtn()