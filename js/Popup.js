// // Gallery Pop-up
document.querySelectorAll('.gallery img').forEach(image =>{
    image.onclick=()=>{
      document.querySelector('.pop-up').style.display = 'block';
      document.querySelector('.pop-up img').src = image.getAttribute('src');
    }
  });
  
  document.querySelector('.pop-up span').onclick=()=>{
    document.querySelector('.pop-up').style.display = 'none';
  }
  