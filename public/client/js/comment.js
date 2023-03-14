window.addEventListener('load',function(){
    let btn_change_title = document.querySelectorAll('.change_title');
    let contents = document.querySelectorAll('.container-pd30');

    btn_change_title.forEach((item,index)=>{
        item.addEventListener('click',function(e){
            btn_change_title.forEach(item2 => item2.classList.remove('active'));
            contents.forEach(item3 => item3.classList.remove('active'));

            item.classList.add('active');
            contents[index].classList.add('active')
        });
    });



    const number_rate = document.querySelector('.number-rate');
    $(function() {

        $("#rateYo").rateYo({
            rating: 1.5,
            halfStar: true,
            starWidth: "25px"
        }).on('rateyo.change', function(e, data) {
            number_rate.textContent = data.rating;
        });

    });


    const formComment = document.querySelector('.comment');
    formComment.addEventListener('submit',function(e){
        e.preventDefault();
        let message = this.querySelector('input[name="message"]').value;
        let product_id = this.querySelector('input[name="product_id"]').value;
        let rating = +this.querySelector('.number-rate').textContent;
        let url = this.getAttribute('action');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            contentType: "application/json",
            url: url,
            data: JSON.stringify(

                {message,product_id,rating}
            ),
            dataType: 'json',
            success: function (data) {

                // Thông báo xóa sản phẩm
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
                toastr.success('Thêm bình luận thành công!', 'Shoes Zone thông báo')

            },
            error: function (e) {
                console.log('Lỗi')
               console.log(e)
    
            }
        });
    })

  
 
    $(function () {
        $(".rateyo2").rateYo().on("rateyo.change", function (e, data) {
          var rating = data.rating;
          $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
          $(this).parent().find('.result').text('rating :'+ rating);
         });
      });

})