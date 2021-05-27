function validateImage() {
    var img = $("#img_file").val();
    var exts = ['jpg','jpeg','png','gif', 'bmp'];
    // split file name at dot
    var get_ext = img.split('.');
    // reverse name to check extension

    get_ext = get_ext.reverse();
    if (img.length > 0 ) {
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
          return true;
        } else {
             alert("Upload only jpg, jpeg, png, gif, bmp images");
            return false;
        }            
    } else {
        alert("please upload an image");
        return false;
    }
    return false;
}