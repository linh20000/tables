<div id="comments" class=" comments-area">
    <div id="respond" class="comment-respond comment-group">
        <h3 id="reply-title" class="comment-reply-title">
            Trả lời
        </h3>
        <div id="commentform" class="comment-form ">
            <p class="comment-notes">
                <span id="email-notes">Thư điện tử của bạn sẽ không được hiển thị công
                    khai.</span>
                Các trường bắt buộc được đánh dấu
                <span class="required">*</span>
            </p>
            <div class="message d-none"> </div>
            <p class="comment-form-comment">
                <label for="comment">Bình luận <span class="required">*</span></label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true"
                    required="required">{{old('comment')}}</textarea>
                @error('comment')
                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                @enderror
                <span class="error error_comment text-danger mt-1 d-block"></span>
            </p>
            <p class="comment-form-author">
                <label for="author">Tên <span class="required">*</span></label>
                <input id="author" name="author" type="text" value="{{old('author')}}" size="30" maxlength="245"
                    aria-required="true" required="required" />
                @error('author')
                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                @enderror
                <span class="error error_author text-danger mt-1 d-block"></span>
            </p>
            <p class="comment-form-email">
                <label for="email">Thư điện tử <span class="required">*</span></label>
                <input id="email" name="email" type="email" value="{{old('email')}}" size="30" maxlength="100"
                    aria-describedby="email-notes" aria-required="true" required="required" />
                @error('email')
                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                @enderror
                <span class="error error_email text-danger mt-1 d-block"></span>
            </p>
            <p class="comment-form-url">
                <label for="url">Trang web</label>
                <input id="url" name="url" type="url" value="{{old('url')}}" size="30" maxlength="200" />
                @error('url')
                <span class="text-danger mt-1 d-block">{{ $message }}</span>
                @enderror
                {{-- <span class="error_url text-danger mt-1 d-block"></span> --}}
            </p>
          </div>
          <button class="comment_ajax">Phản hồi</button>
    </div>
    <!-- #respond -->
</div>

@pushonce('component-css')
<style>
  .message{
    margin: 0 15px; 
    font-weight: 700; 
    color: #21b300; 
    background-color: #abffa0;
  }
  .d-none{
    display: none;
  }
  .comment_ajax{
    background-color: #DD0000;
    color: white;
    border-radius: 4px;
  }
  .error{
    color: #DD0000;

  }

</style>
@endpushonce


<script>
    $('.comment-group').on('click','.comment_ajax', function(e){
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
        error: function(e){
          if(e.responseJSON.errors.author){
            $('.error_author').text(e.responseJSON.errors.author);
          } else {
            $('.error_author').text('');
          }   
          if(e.responseJSON.errors.comment){
            $('.error_comment').text(e.responseJSON.errors.comment);
          } else {
            $('.error_comment').text('');
          }
          if(e.responseJSON.errors.email){
            $('.error_email').text(e.responseJSON.errors.email);
          } else{
            $('.error_email').text('');
          }
          // if(e.responseJSON.errors.url){
          //   $('.error_url').text(e.responseJSON.errors.url);
          // } else{
          //   $('.error_url').text('');
          // }
        }
      })
    });
  </script>
