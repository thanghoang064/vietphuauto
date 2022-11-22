import $ from "jquery";
import { messagesSwal } from "./messages";

var Comment = {
  configSelect: {
    content: "#content--comment",
    btn__submit: "#post--comment",
    comments__list: "#comments-list",
    comment__reply: "#comment--reply",
    btn__submit_reply: "#post--comment-reply",
  },

  init: function() {
    let __this = this;
    __this.cmt_submit();
    __this.saveComment();
    __this.showFromReply();
    __this.saveCommentReply();
  },

  // saveComment: function () {
  //     let __this = this;

  //     $(__this.configSelect.btn__submit).off().on('click', function (event) {
  //         event.preventDefault();

  //         let $content = $(__this.configSelect.content).val();
  //         let url = $(this).attr('data-url');
  //         let id = $(this).attr('data-id');
  //         let type = $(this).attr('data-type');
  //         let parent = $(this).attr('data-parent');

  //         let $flag = true;
  //         if ($content.length == 0) {
  //             $flag = false;
  //             $(".error-comment").remove();
  //             $(__this.configSelect.content).after('<p class="error-comment">Mời bạn nhập thông tin</p>')
  //         }

  //         if ($flag == true) {
  //             $.ajaxSetup({
  //                 headers: {
  //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //                 }
  //             });
  //             $.ajax({
  //                 url: url,
  //                 type: 'POST',
  //                 async: true,
  //                 dataType: 'html',
  //                 data: {
  //                     id: id,
  //                     type: type,
  //                     parent: parent,
  //                     contents: $content
  //                 }
  //             })
  //                 .done(function (result) {
  //                     messagesSwal('success',' Cập nhật thành công');

  //                     let $value = (JSON.parse(result));
  //                     $(__this.configSelect.comments__list).prepend($value.data);
  //                 }).fail(function (XMLHttpRequest, textStatus, thrownError) {
  //             });
  //         }
  //     })
  // },
  cmt_submit: function(param) {
    $(document).on("submit", "#cmt_submit", function(e) {
      e.preventDefault();
      var data = $(this).serialize();
      console.log(data);
      var url = $(this).data("url");
      $.ajax({
        type: "POST",
        url: url,
        data: data,

        success: function(response) {
          messagesSwal("success", " Cập nhật thành công");
          let $value = JSON.parse(response);
          $(__this.configSelect.comments__list).prepend($value.data);
        },
      });
    });
  },
  showFromReply: function() {
    let __this = this;

    // $(".comment--reply").on('click',function (event) {
    //     event.preventDefault();
    //     let $this = $(this);
    //     console.log('2121212121');
    //
    //     $this.after(`
    //             <div class="form--reply" style="margin: 20px;">
    //                 <textarea name="" style="height: 80px;margin-top: 20px" id="" cols="30" rows="10"></textarea>
    //                 <button id="post--comment-reply" style="padding: 5px 15px;background: #44c9de;color: white;margin: 10px;float: right;border-radius: 5px;">Gửi</button>
    //             </div>
    //         `);
    //
    // })

    $(document).ready(function() {
      $(document)
        .off()
        .on("click", ".comment--reply", function(event) {
          event.preventDefault();
          let $this = $(this);
          $this.after(`
                <div class="form--reply" style="margin: 20px;">
                    <textarea name="" style="height: 80px;margin-top: 20px" id="" cols="30" rows="10"></textarea>
                    <button id="post--comment-reply" style="padding: 5px 15px;background: #44c9de;color: white;margin: 10px;float: right;border-radius: 5px;">Gửi</button>
                </div>
            `);
        });
    });
  },

  // saveCommentReplyBackup: function () {
  //     let __this = this;
  //     $(document).on('click', __this.configSelect.btn__submit_reply, function () {
  //         let $this = $(this);
  //         console.log($this.parents('li').find('ul.reply-list'));
  //         // mac dinh reply thi prepend
  //         $this.parents('li').find('ul.reply-list').prepend(`
  //             <li>
  //                 <!-- Avatar -->
  //                 <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
  //                 <!-- Contenedor del Comentario -->
  //                 <div class="comment-box">
  //                     <div class="comment-head">
  //                         <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
  //                         <span>hace 10 minutos</span>
  //                         <i class="fa fa-reply"></i>
  //                         <i class="fa fa-heart"></i>
  //                     </div>
  //                     <div class="comment-content">
  //                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
  //                     </div>
  //                 </div>
  //             </li>
  //         `);
  //     });
  // },

  saveCommentReply: function() {
    let __this = this;

    $(document).ready(function() {
      $(document)
        .off("click")
        .on("click", __this.configSelect.btn__submit_reply, function() {
          // $(__this.configSelect.btn__submit_reply).off().on('click', function (event) {
          event.preventDefault();

          console.log(1121212);

          let content = $(__this.configSelect.comment__reply).val();
          let url = $(this).attr("data-url");
          let id = $(this).attr("data-id");
          let type = $(this).attr("data-type");
          let parent = $(this).attr("data-parent");
          let $flag = true;
          if (content.length == 0) {
            $flag = false;
            $(".error-comment").remove();
            $(__this.configSelect.content).after(
              '<p class="error-comment">Mời bạn nhập thông tin</p>'
            );
          }

          console.log(type);

          return false;

          if ($flag == true) {
            $.ajaxSetup({
              headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
              },
            });
            $.ajax({
              url: url,
              type: "POST",
              async: true,
              dataType: "html",
              data: {
                id: id,
                type: type,
                parent: parent,
                contents: content,
              },
            })
              .done(function(result) {
                let $value = JSON.parse(result);
                console.log($value.data);
                $(__this.configSelect.comments__list).prepend($value.data);
              })
              .fail(function(XMLHttpRequest, textStatus, thrownError) {});
          }
        });
    });
  },
};

$(function() {
  Comment.init();
});
