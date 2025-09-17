//--===== Navbar =====--
$(document).ready(function(){
  $('.nav-trigger').click(function(){
    $('.site-content-wrapper').toggleClass('scaled');
  });
});

 
//--===== Loader =====--
var preloader = document.getElementById('preloader');

function loader(){
  preloader.style.display = 'none';
}



//--===== percentage Calculator =====--
function calcsci(){
  var marks = document.getElementById("markssci").value;
  var total = document.getElementById("totalsci").value;
  document.getElementById("percentsci").value = parseFloat((marks/total)*100).toFixed(1);
}
function calc(){
  var marks = document.getElementById("marks1").value;
  var total = document.getElementById("total1").value;
  document.getElementById("percent1").value = parseFloat((marks/total)*100).toFixed(1);
}



var loadFile1 = function (event) {
  var image1 = document.getElementById('output1');
  image1.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile2 = function (event) {
  var image = document.getElementById('output2');
  image.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile3 = function (event) {
  var image1 = document.getElementById('output3');
  image1.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile4 = function (event) {
  var image = document.getElementById('output4');
  image.src = URL.createObjectURL(event.target.files[0]);
};


//--===== Loader =====--
var preloader = document.getElementById('preloader');

function loader(){
 preloader.style.display = 'none';
}


//--===== Show and Hide Commerce Form =====--
document.getElementById("toggleDiv1Button").addEventListener("click", function() {
  var div1 = document.getElementById("div1");
  div1.classList.toggle("hidden");
});

document.getElementById("toggleDiv2Button").addEventListener("click", function() {
  var div1 = document.getElementById("div1");
  var div2 = document.getElementById("div2");
  div1.classList.add("hidden");
  div2.classList.toggle("hidden");
});





