const inputBox = document.querySelector(".inputFields input");
const addBtn = document.querySelector(".inputFields button");
const deleteAllBtn = document.querySelector(".footer button");

// onkeyup event
inputBox.onkeyup = ()=>{
    let userEnteredValue = inputBox.value;
    if(userEnteredValue.trim() != 0){ 
      addBtn.classList.add("active"); 
    }else{
      addBtn.classList.remove("active");
    }
}
