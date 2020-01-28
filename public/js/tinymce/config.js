function uploadImageToServer(editor){
    // create input and insert in the DOM
    var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
    $(editor.getElement()).parent().append(inp);
    // add the image upload button to the editor toolbar
    editor.addButton('imageupload', {
      text: 'Local',
      icon: 'image',
      onclick: function(e) { // when toolbar button is clicked, open file select modal
        inp.trigger('click');
      }
    });
    // when a file is selected, upload it to the server
    inp.on("change", function(e){
    uploadFile(this, editor);
    });
}
function uploadFile(inp, editor) {
     var file_data = $(inp).prop('files')[0];   
     var data = new FormData();                  
     data.append('file', file_data);
     
     $.ajax({
       url: 'doUpload.php',
       type: 'POST',
       data: data,
       processData: false, // Don't process the files
       contentType: false, // Set content type to false as jQuery will tell the server its a query string request
       success: function(data, textStatus, jqXHR) {
       data = JSON.parse(data);
         editor.insertContent('<img class="content-img" src="' + data.url + '"/>');
       },
       error: function(jqXHR, textStatus, errorThrown) {
         if(jqXHR.responseText) {
           errors = JSON.parse(jqXHR.responseText).errors
           alert('Error uploading image: ' + errors.join(", ") + '. Make sure the file is an image and has extension jpg/jpeg/png.');
         }
       }
     });
   }
$('input#name').keyup(function(event) {
/* Act on the event */
var title, slug;

    //Lấy text từ thẻ input title 
    title = $(this).val();

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    slug = slug.replace(/\./gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    $('input#slug').val(slug);

});