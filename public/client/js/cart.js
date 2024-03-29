window.addEventListener('load', function () {
    let icon = document.querySelector('.icon-cart p');
    let cart = document.querySelector('.main-cart');
    let iconClose = document.querySelector('.close')
    let iconNumber = document.querySelector('.icon-number');
    let iconBag = document.querySelectorAll('.bag-ctn3');
    let modalCart = document.querySelector('.about-cart');
    let sumMoney = document.querySelector('.sumMoney');
    let iconAdd = document.querySelector('.iconAdd');
    let iconMinus = document.querySelector('.iconMinus');



    //
    const add_detail = document.querySelectorAll('.detail_add');
    let number_detail = document.querySelector('.number_detail');

    iconAdd?.addEventListener('click', function () {
        const new_value = parseInt(number_detail.value) +1
        number_detail.value = new_value

    })
    iconMinus?.addEventListener('click', function () {
        const new_value = parseInt(number_detail.value) - 1
        if (new_value >= 1) {
            number_detail.value = new_value

        }

    })

    add_detail.forEach(item=>{

        item?.addEventListener('click', function () {
            let id = this.dataset.id;
            let url = this.dataset.url;
            let color = localStorage.getItem('color');
            let size = localStorage.getItem('size');
    
            let numberProduct = number_detail.value;
            if(+numberProduct <= 0){
                alert("So luong phai lon hon 0");
                return;
            }
            let urlRemove = this.dataset.remove;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                contentType: "application/json",
                url: url,
                data: JSON.stringify({
                    id,
                    numberProduct,
                    color,
                    size
                }),
                dataType: 'json',
                success: function (data) {
                    if(data.status  == 500){
                        Swal.fire({
                            position: 'center-center',
                            icon: 'error',
                            title: 'Sản phẩm không đủ số lượng',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        return;
                    }
                    console.log(data)
                    let dataNew = JSON.parse(data.cart)
                    let number = 0;
                    let sum = 0;
    
                    containerCart.innerHTML = "";
    
                    dataNew.forEach(item => {
                        number += +item.number;
                        renderItemCart(item, urlRemove, url);
                        sum += +item.total;
                    })
                    iconNumber.textContent = number;
                    sumMoney.textContent = sum;
                    //socket 

                    axios({
                        method:"GET",
                        url:"http://localhost:4000/socker_mua_hang?status='mua_thanh_cong'"
                    });
                    // Hiển thị thông báo thêm sản phẩm
                    Swal.fire({
                        position: 'center-center',
                        icon: 'success',
                        title: 'Thêm sản phẩm thành công !',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    if(item.className.includes("redirect")){
                        window.location.href = "/infomation"
                    }
                },
                error: function (e) {
                    alert("ban phai dang nhap")
                    console.log('loi')
                    console.log(e)
    
                }
            });
        })
    })
    //
    icon?.addEventListener('click', function (e) {
        cart.classList.add('active');
    })
    iconClose?.addEventListener('click', function (e) {
        cart.classList.remove('active');
    })
    cart.addEventListener('click', function (e) {
        if (!e.target.matches('.icon-cart p') && !modalCart.contains(e.target)) {
            console.log(e.target);
            cart.classList.remove('active');
        }

    })

    let containerCart = document.querySelector('.container-cart');
    containerCart.addEventListener('click', function (e) {
        if (e.target.matches('.close-item')) {
            // console.log();
            e.stopPropagation();
            let url = e.target.dataset.url;
            let id = e.target.dataset.id;
            let color = e.target.dataset.color;
            let size = e.target.dataset.size;


            // let number =   containerCart.querySelectorAll('.product-cart').length;
            // iconNumber.textContent = number;
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

                    { id ,color,size}
                ),
                dataType: 'json',
                success: function (data) {

                    let item = e.target.parentElement;
                    item.remove();

                    let number = 0;
                    let sum = 0;
                    let dataNew = JSON.parse(data.cart)
                    
                    dataNew.forEach(item => {
                        number += +item.number;
                        sum += +item.total;
                    })
                    iconNumber.textContent = number;
                    sumMoney.textContent = sum;

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
                    toastr.success('Bạn xóa thành công!', 'Shoes Zone thông báo')

                },
                error: function (e) {
                    console.log('Lỗi')
                    console.log(e)

                }
            });
        }
    })

    /**
     * 
     */
    function renderItemCart(item, urlRemove, url = '') {
        let template = `
        <div class="product-cart">
        <span data-id="${item.id}" data-color="${item.color}" data-size="${item.size}" data-url="${urlRemove}"  class="close-item">x</span>
        <div class="item-img-cart">
            <img src="${item.image}" alt="">
        </div>
        <div class="detais-cart">
            <h6>${item.name}</h6>
            <p>${item.color} / ${item.size}</p>
            <span>${item.gia} ₫</span>
            <div class="dt-sc-cart">
                <span data-url="${url}" data-id="${item.id}" data-color="${item.color}"  data-size="${item.size}" class="up-down decre">-</span>
                <input type="text" value="${item.number}">
                <span data-url="${url}" data-id="${item.id}" data-color="${item.color}"  data-size="${item.size}" class="up-down incre">+</span>
            </div>
        </div>

    </div>
        `;
        containerCart.innerHTML += template;
    }

    // them cart san pham
    console.log(containerCart)
    iconBag.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            // console.log(e.target.parentElement.parentElement.parentElement.parentElement.parentElement);
            let item = e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
            let srcImage = item.querySelector('.groups-img img:first-child').src;
            let name = item.querySelector('.name-shoe-ctn3 h1 a').textContent;
            let money = item.querySelector('.name-shoe-ctn3 .cost-ctn3 h2').textContent;
            let numberProduct = 1;
            let id = item.querySelector('.bag-ctn3').dataset.id;//lấy id sản phẩm
            let url = item.querySelector('.bag-ctn3').dataset.url;//lấy url sản phẩm
            let urlRemove = item.querySelector('.bag-ctn3').dataset.urlremove;//lấy id sản phẩm

            // console.log(money);
            // iconBag.
            let itemCart = {
                id,
                numberProduct
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                contentType: "application/json",
                url: url,
                data: JSON.stringify(itemCart),
                dataType: 'json',
                success: function (data) {

                    console.log(data)
                    let dataNew = JSON.parse(data.cart)
                    let number = 0;
                    let sum = 0;

                    containerCart.innerHTML = "";

                    dataNew.forEach(item => {
                        number += +item.number;
                        renderItemCart(item, urlRemove, url);
                        sum += +item.total;
                    })
                    iconNumber.textContent = number;
                    sumMoney.textContent = sum;

                    // Hiển thị thông báo thêm sản phẩm
                    Swal.fire({
                        position: 'center-center',
                        icon: 'success',
                        title: 'Thêm sản phẩm thành công !',
                        showConfirmButton: false,
                        timer: 1300
                    })
                },
                error: function (e) {
                    console.log('loi')
                    console.log(e)

                }
            });
            // console.log(itemCart);
            //     renderItemCart(itemCart);
            //     icon.click();
            //   let number =   
            //   iconNumber.textContent = number;
        })

    })



    //tang/giam so luong

    containerCart.addEventListener('click', function (e) {
        if (e.target.matches('.incre')) {
            let quality = +e.target.previousElementSibling.value;
            quality++;
            e.target.previousElementSibling.value = quality;
            let url = e.target.dataset.url;
            let id = e.target.dataset.id;
            let color = e.target.dataset.color;
            let size = e.target.dataset.size;
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
                    {
                        id: id,
                        numberProduct: 1,
                        color:color,
                            size:size,
                    }
                ),
                dataType: 'json',
                success: function (data) {

                    console.log(data)
                    let dataNew = JSON.parse(data.cart)
                    let number = 0;
                    let sum = 0;


                    dataNew.forEach(item => {
                        number += +item.number;

                        sum += +item.total;
                    })
                    iconNumber.textContent = number;
                    sumMoney.textContent = sum;


                },
                error: function (e) {
                    console.log('loi')
                    console.log(e)

                }
            });
        }


        if (e.target.matches('.decre')) {
            let quality = +e.target.nextElementSibling.value;
            if (quality > 1) {

                quality--;
                e.target.nextElementSibling.value = quality;
                let url = e.target.dataset.url;
                let id = e.target.dataset.id;
                let color = e.target.dataset.color;
                let size = e.target.dataset.size;


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
                        {
                            id: id,
                            color:color,
                            size:size,
                            numberProduct: -1
                        }
                    ),
                    dataType: 'json',
                    success: function (data) {

                        console.log(data)
                        let dataNew = JSON.parse(data.cart)
                        let number = 0;
                        let sum = 0;


                        dataNew.forEach(item => {
                            number += +item.number;

                            sum += +item.total;
                        })
                        iconNumber.textContent = number;
                        sumMoney.textContent = sum;


                    },
                    error: function (e) {
                        console.log('loi')
                        console.log(e)

                    }
                });
            }

        }
    })

    // xoa san pham
    let iconRemoves = document.querySelectorAll('.item-remove');
    iconRemoves.forEach(item =>


        item.addEventListener('click', function (e) {
            e.preventDefault();
            if (e.target.matches('.item-remove i')) {
                const itemCart = document.querySelectorAll('.product-cart');
                console.log([itemCart])
                let url = e.target.parentElement.dataset.urlremove;
                let id = e.target.parentElement.dataset.id;
                console.log(url);
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

                        { id }
                    ),
                    dataType: 'json',
                    success: function (data) {

                        let item = e.target.parentElement.parentElement.parentElement;
                        itemCart.forEach(item => {
                            let idItem = +item.querySelector('.close-item').dataset.id;

                            if (idItem == +e.target.parentElement.dataset.id) {
                                item.remove();
                            }

                        })
                        item.remove();
                        let dataNew = JSON.parse(data.cart)

                        let number = 0;
                        let sum = 0;
                        dataNew.forEach(item => {
                            number += +item.number;
                            sum += +item.total;
                        })
                        iconNumber.textContent = number;
                        sumMoney.textContent = sum;

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
                        toastr.success('Bạn xóa thành công!', 'Shoes Zone thông báo')

                    },
                    error: function (e) {
                        console.log('Lỗi')
                        console.log(e)

                    }
                });
            }
        })
    )

})