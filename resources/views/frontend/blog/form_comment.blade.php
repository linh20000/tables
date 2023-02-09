<div id="comments" class="comment-group comments-area">
    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">
            Trả lời
        </h3>
        <div id="commentform" class="comment-form">
            <p class="comment-notes">
                <span id="email-notes">Thư điện tử của bạn sẽ không được hiển thị công
                    khai.</span>
                Các trường bắt buộc được đánh dấu
                <span class="required">*</span>
            </p>
            <p class="comment-form-comment">
                <label for="comment">Bình luận</label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true"
                    required="required"></textarea>
            </p>
            <p class="comment-form-author">
                <label for="author">Tên <span class="required">*</span></label>
                <input id="author" name="author" type="text" value="" size="30" maxlength="245"
                    aria-required="true" required="required" />
            </p>
            <p class="comment-form-email">
                <label for="email">Thư điện tử <span class="required">*</span></label>
                <input id="email" name="email" type="email" value="" size="30" maxlength="100"
                    aria-describedby="email-notes" aria-required="true" required="required" />
            </p>
            <p class="comment-form-url">
                <label for="url">Trang web</label>
                <input id="url" name="url" type="url" value="" size="30" maxlength="200" />
            </p>


            <button name="submit" id="submit" class="submit" value="Phản hồi">PHản hồi</button>
                {{-- <input type="hidden" name="comment_post_ID" value="1466" id="comment_post_ID" />
                <input type="hidden" name="comment_parent" id="comment_parent" value="0" /> --}}

        </div>
    </div>
    <!-- #respond -->
</div>

<script>
    $('.comment-group').on('click','.commentAjax', function(e){
      e.preventDefault();
      let _token = $('meta[name="csrf-token"]').attr('content');
      let author = $("#author").val();
      let comment = $("#comment").val();
      let email = $("#email").val();
      let url = $("#url").val();
      $.ajax({
        type:"POST",
        url:`{{route('addComment.ajax')}}`,
        data:{
          _token : _token,
          author : author,
          comment : comment,
          email : email,
          url : url,
        },
        success: function (res) {
          $('.message').text(res.success);
          $('.error_author').text('');
          $('.error_comment').text('');
          $('.error_email').text('');
          $('.error_url').text('');
          $('#author').val('');
          $("#comment").val('');
          $("#email").val('');
          $("#url").val('');
  
          $('.message').removeClass('d-none');
          setTimeout(()=> {
              $('.message').addClass('d-none')
          },2000)
        },
        error:function(e){
          if(e.responseJSON.errors.name){
            $('.error_name').text(e.responseJSON.errors.name);
          } else {
            $('.error_name').text('');
          }   
          if(e.responseJSON.errors.phoneNumber){
            $('.error_phone').text(e.responseJSON.errors.phoneNumber);
          } else {
            $('.error_phone').text('');
          }
          if(e.responseJSON.errors.time){
            $('.error_time').text(e.responseJSON.errors.time);
          } else{
            $('.error_time').text('');
          }
        }
      })
    });
  </script>
