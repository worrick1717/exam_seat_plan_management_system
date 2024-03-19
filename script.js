const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

let exam_type;
let selected_class;
let selected_room;
let total_std_count = 0;
let total_seat_count = 0;


function setExamType(value){
  exam_type = value;

  let data = {
    exam_type: value
  }

  $.post("classes_rooms/process_exam_type.php", data, function(){
    // callback function
  });
}

function total_std(){
  selected_class = [];
  total_std_count = 0;
  let total_std = document.querySelector("#total_std");
  var selectElement = document.querySelectorAll(".class_select input[type=checkbox]");
            
  selectElement.forEach((x)=>{
      if(x.checked){
        selected_class.push(x.id);
        total_std_count += parseInt(x.getAttribute("--data-total"));
      } 
  })
  total_std.textContent = total_std_count;
}

function seatCapacity(){
  selected_room = [];
  total_seat_count=0;
  let total_seat = document.querySelector("#seat_capacity");
  var selectElement = document.querySelectorAll(".room_select input[type=checkbox]");
            
  selectElement.forEach((x)=>{
      if(x.checked){
        selected_room.push(x.id);
        total_seat_count += parseInt(x.getAttribute("--data-capacity"));
      } 
  })
  total_seat.textContent = total_seat_count;
}

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;

  $("#final-exam-type").text(exam_type);
});

nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;

  console.log(total_std_count);
  console.log(selected_class);

  let data = {
    classes:  selected_class,
    total_std: total_std_count,
  }

  $.post("classes_rooms/process_class.php", data, function(){
    $("#total_std_count").text(total_std_count);
    $("#final-selected-class").text(selected_class.toString());
  });
});

nextBtnThird.addEventListener("click", function(event){

  event.preventDefault();
  if(total_seat_count < total_std_count){
    alert("Insufficient Seat Capacity");
    return;
  }

  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  let data = {
    rooms:  selected_room,
    seat_capacity: total_seat_count,
  }

  $.post("classes_rooms/process_room.php", data, function(){
    // callback function
    $("#final-selected-room").text(selected_room.toString());

  });
});


submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});
prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});