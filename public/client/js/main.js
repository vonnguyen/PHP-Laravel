window.addEventListener('load',function(){
    let header = this.document.querySelector('.header');
    let headerHeight = document.querySelector('.header').offsetHeight;
    const iconUser = document.querySelector('.info-user');
    const modelUser = document.querySelector('.model-user');
    console.log(modelUser);

    window.addEventListener('scroll',function(){
        
        if(window.scrollY >= headerHeight){
            header.classList.add('fixed');
        }else{
            header.classList.remove('fixed');

        }
    })

    iconUser.addEventListener('click', function(){    
        modelUser.classList.toggle('active');
    })
    const modelUserJS = document.querySelector('.model-user');
    document.addEventListener('click',function(e){
        if(!e.target.matches('.info-user') && !e.target.matches('.info-user i') && !modelUser.contains(e.target) ){
            modelUser.classList. remove('active');
        }
    })
    
})
