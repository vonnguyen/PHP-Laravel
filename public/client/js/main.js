window.addEventListener('load',function(){
    let header = this.document.querySelector('.header');
    let headerHeight = document.querySelector('.header').offsetHeight;
    const iconUser = document.querySelector('.info-user');
    const modelUser = document.querySelector('.model-user');
    console.log(modelUser);

    window.addEventListener('scroll',function(){
        // console.log([window])
        // console.log(window.scrollY);
        if(window.scrollY >= headerHeight){
            header.classList.add('fixed');
        }else{
            header.classList.remove('fixed');

        }
    })

    iconUser.addEventListener('click', function(){
        modelUser.classList.toggle('active');
    })

    

})
