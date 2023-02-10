@include('frontend.component.toast.toast')
<section class="section " id="section_37509939">
    <div class="bg section-bg fill bg-fill  bg-loaded"> </div><!-- .section-bg -->
    <div class="section-content relative">
        <div class="row row-small row" id="row-581847231">
            <div class="col hide-for-small medium-8 small-12 large-8">
                <div class="col-inner">
                    <h3><span style="color: #ffffff;">ĐĂNG KÝ TƯ VẤN</span></h3>
                    <p><span style="color: #ffffff;">Gửi email cho chúng tôi để nhận thông tin về sản phẩm phù hợp dành
                            cho bạn</span></p>
                </div>
            </div>
            <div class="col hide-for-small medium-4 small-12 large-4">
                <div class="col-inner text-right">
                    <div class="gap-element" style="display:block; height:auto; padding-top:15px" class="clearfix">
                    </div>
                    <a href="#test" target="_self" class="button secondary" style="border-radius:4px;">
                        <span>Đăng ký ngay</span>
                    </a>
                    <div id="test" class="lightbox-by-id lightbox-content mfp-hide lightbox-white "style="max-width:650px ;padding:20px">
                        <div role="form" class="wpcf7" id="wpcf7-f417-p2-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <div class="wpcf7-form">
                                <h3>Đăng ký nhận tư vấn miễn phí</h3>
                                <p>
                                    <span class="wpcf7-form-control-wrap ">
                                        <input type="text" name="name" value="" size="40"
                                            class="wpcf7-form-control " aria-required="true" aria-invalid="false"
                                            placeholder="Họ và tên" />
                                            <span class="error_name text-danger mt-1 d-block"style="color:red; margin-bottom:10px; display:block;"></span>
                                    </span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap tel-542">
                                        <input type="text" name="phoneNumber" value="" size="40"
                                            class="wpcf7-form-control " aria-required="true" aria-invalid="false"
                                            placeholder="Số điện thoại" />
                                            <span class="error_phone text-danger mt-1 d-block" style="color:red; margin-bottom:10px; display:block;"></span>
                                    </span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap email-541">
                                        <input type="email" name="email" value="" size="40"
                                            class="wpcf7-form-control " aria-invalid="false"
                                            placeholder="Địa chỉ Email" />
                                            <span class="error_email text-danger mt-1 d-block"style="color:red; margin-bottom:10px; display:block;"></span>
                                    </span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap text-282">
                                        <input type="text" name="address" value="" size="40"
                                            class="wpcf7-form-control " aria-invalid="false" placeholder="Địa chỉ" />
                                            <span class="error_address text-danger mt-1 d-block" style="color:red; margin-bottom:10px; display:block;" ></span>
                                    </span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap textarea-317">
                                        <textarea name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                            placeholder="Câu hỏi của anh/ chị..."></textarea>
                                            <span class="error_content mt-1 d-block" style="color:red; margin-bottom:10px; display:block;"></span>
                                    </span>
                                    <br />
                                    <input type="hidden" name="status" id="" value="1">
                                        <button id="success" type="submit" 
                                        class="wpcf7-form-control wpcf7-submit btn" />Đăng ký ngay<button>
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-small row" id="row-1995080348">
            <div class="col show-for-small small-12 large-12">
                <div class="col-inner text-center">
                    <h3><span style="color: #ffffff;">ĐĂNG KÝ TƯ VẤN</span></h3>
                    <p><span style="color: #ffffff;">Gửi email cho chúng tôi để nhận thông tin về sản phẩm phù hợp dành
                            cho bạn</span></p>
                </div>
            </div>
            <div class="col show-for-small small-12 large-12">
                <div class="col-inner text-center">
                    <div class="gap-element" style="display:block; height:auto; padding-top:15px" class="clearfix">
                    </div>
                    <a href="#test" target="_self" class="button secondary" style="border-radius:4px;">
                        <span>Đăng ký ngay</span>
                    </a>
                    <div id="test"class="lightbox-by-id lightbox-content mfp-hide lightbox-white "style="max-width:650px ;padding:20px">
                        <div role="form" class="wpcf7" id="wpcf7-f417-p2-o2" lang="vi" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form id="form_appointment" class="wpcf7-form">
                                @csrf
                                <h3>Đăng ký nhận tư vấn miễn phí</h3>
                                <p>
                                    <span class="wpcf7-form-control-wrap ">
                                        <input type="text" name="name" value="" size="40"
                                            class="wpcf7-form-control " aria-required="true" aria-invalid="false"
                                            placeholder="Họ và tên" />
                                    </span>
                                    <span class="error_name text-danger mt-1 d-block"></span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap tel-542">
                                        <input type="text" name="phoneNumber" value="" size="40"
                                            class="wpcf7-form-control " aria-required="true" aria-invalid="false"
                                            placeholder="Số điện thoại" />
                                    </span>
                                    <span class="error_phone text-danger mt-1 d-block"></span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap email-541">
                                        <input type="email" name="email" value="" size="40"
                                            class="wpcf7-form-control " aria-invalid="false"
                                            placeholder="Địa chỉ Email" />
                                    </span>
                                        <span class="error_email text-danger mt-1 d-block"></span>

                                    <br />
                                    <span class="wpcf7-form-control-wrap text-282">
                                        <input type="text" name="address" value="" size="40"
                                            class="wpcf7-form-control " aria-invalid="false" placeholder="Địa chỉ" />
                                        </span>
                                        <span class="error_address text-danger mt-1 d-block"></span>
                                    <br />
                                    <span class="wpcf7-form-control-wrap textarea-317">
                                        <textarea name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                            aria-invalid="false" placeholder="Câu hỏi của anh/ chị..."></textarea>
                                    </span>
                                    <span class="error_content text-danger mt-1 d-block"></span>
                                    <input type="hidden" name="status" id="" value="1">
                                    <br />
                                        <button id="success" type="submit" 
                                        class="wpcf7-form-control wpcf7-submit" />Đăng ký ngay<button>
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .section-content -->
    <style scope="scope">
        #section_37509939 {
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: rgb(0, 136, 204);
        }
    </style>
</section>
<script type="text/javascript">
    $('#success').click(function(e) {
        e.preventDefault();
        // console.log(e.target.attributes.id.textContent);
        let _token = $('meta[name="csrf-token"]').attr('content');
        let name = $('input[name=name]').val();
        let phoneNumber = $('input[name=phoneNumber]').val();
        let email = $('input[name=email]').val();
        let address = $('input[name=address]').val();
        let content = $('textarea[name=content]').val();
        let status = $('input[name=status]').val();
        
        $.ajax({
            type:"POST",
            url:`{{route('advisory.ajax')}}`,
            data: {
                _token: _token,
                name: name,
                phoneNumber: phoneNumber,
                email: email,
                address: address,
                content: content,
                status: status
            },
            success: function(success) {
                $('.mfp-container').addClass(success.class)
                $('.mfp-bg').addClass(success.class)
                $('.error_name').text('');
                $('.error_phone').text('');
                $('.error_email').text('');
                $('.error_address').text('');
                $('.error_content').text('');
                $('input[name=name]').val('');
                $('input[name=phoneNumber]').val('');
                $('input[name=email]').val('');
                $('input[name=address]').val('');
                $('input[name=content]').val('');
                 var notifications = document.querySelector(".notifications");
                var buttons = document.querySelectorAll(".buttons .btn");

                const toastDetails = {
                    timer: 3000,
                }

                const removeToast = (toast) => {
                    toast.classList.add(success.class)
                    if (toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
                    setTimeout(() => toast.remove(), 500) // Removing the toast after 500ms
                }

                const createToast = (id) => {
                    // console.log(success.icon);
                    // console.log(success.text);
                    // console.log(id);

                    // Getting the icon and text for the toast based on the id passed
                    // const { icon, text } = toastDetails[id];
                    
                    const toast = document.createElement("li"); // Creating a new 'li' element for the toast
                    toast.className = `toast ${id}` // Setting the classes for the toast
                    // Setting the inner HTML for the toast
                    toast.innerHTML = `<div class="column">
                                            <i class="fa-solid ${success.icon}"></i>
                                            <span>${success.text}</span>
                                        </div>
                                        `
                    notifications.appendChild(toast); // Append the toast to the notification ul
                    // Setting a timeout to remove the toast after the specified duration
                    toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer)

                    // const removeToast = (toast) => {
                    //     toast.classList.add("mfp-hide")
                    //     if (toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
                    //     setTimeout(() => toast.remove(), 500) // Removing the toast after 500ms
                    // }
                }
                createToast(e.target.attributes.id.textContent)
            },
            error: function(e) {
                if (e.responseJSON.errors.name) {
                    $('.error_name').text(e.responseJSON.errors.name);
                } else {
                    $('.error_name').text('');
                }
                if (e.responseJSON.errors.phoneNumber) {
                    $('.error_phone').text(e.responseJSON.errors.phoneNumber);
                } else {
                    $('.error_phone').text('');
                }
                if (e.responseJSON.errors.email) {
                    $('.error_email').text(e.responseJSON.errors.email);
                } else {
                    $('.error_email').text('');
                }
                if (e.responseJSON.errors.address) {
                    $('.error_address').text(e.responseJSON.errors.address);
                } else {
                    $('.error_address').text('');
                }
                if (e.responseJSON.errors.content) {
                    $('.error_content').text(e.responseJSON.errors.content);
                } else {
                    $('.error_content').text('');
                }
            }
        })
    })

    // buttons.forEach(btn => {
	// 	btn.addEventListener("click", () => {
    //     })
	// });

    // toast
    // var notifications = document.querySelector(".notifications");
    // var buttons = document.querySelectorAll(".buttons .btn");

	// const toastDetails = {
	// 	timer: 5000,
	// }

	// const removeToast = (toast) => {
	// 	toast.classList.add("hide")
	// 	if (toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
	// 	setTimeout(() => toast.remove(), 500) // Removing the toast after 500ms
	// }

	// const createToast = (id) => {
	// 	// Getting the icon and text for the toast based on the id passed
	// 	const { icon, text } = toastDetails[id];
	// 	const toast = document.createElement("li"); // Creating a new 'li' element for the toast
	// 	toast.className = `toast ${id}` // Setting the classes for the toast
	// 	// Setting the inner HTML for the toast
	// 	toast.innerHTML = `<div class="column">
    //                             <i class="fa-solid ${icon}"></i>
    //                             <span>${text}</span>
    //                         </div>
    //                         <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`
	// 	notifications.appendChild(toast); // Append the toast to the notification ul
	// 	// Setting a timeout to remove the toast after the specified duration
	// 	toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer)
	// }

	// Adding a click event listener to each button to create a toast when clicked
	
</script>
