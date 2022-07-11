var stars = document.querySelectorAll('.star-icon');
                  
document.addEventListener('mousemove', function(e){
  var classStar = e.target.classList;
  if(!classStar.contains('ativo')){
    stars.forEach(function(star){
      star.classList.remove('ativo');
    });
    classStar.add('ativo');
    console.log(e.target.getAttribute('data-avaliacao'));
    if(e.target.getAttribute('data-avaliacao')){
      document.getElementById("avaliacao").value = e.target.getAttribute('data-avaliacao');
    }
  
  }
});
