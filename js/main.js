function searchProject(){
  
    var x = document.querySelectorAll('.project-tile p:nth-child(2)');
    var e = document.getElementById('searchbar').value;
    e.toLowerCase();


    x.forEach((item,index) => {
        if(!item.innerHTML.toLowerCase().includes(e)){

            item.parentElement.style.display = 'none';

        }else {

            item.parentElement.style.display = 'grid';
            
        }

        
    })
}



