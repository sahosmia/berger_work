const search_btn = document.querySelector('.search_btn'),
      search_input = document.querySelector('.search_input');

search_btn.addEventListener('click', function (e){
    if(search_input.style.display == 'block'){
        search_input.style.display = 'none';
    }
    else{
        search_input.style.display = 'block';
    }

   
});
