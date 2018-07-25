function tinymce_init_callback(editor)
{
  tinymce.init({
    menubar: false,
    selector:'textarea.richTextBox',
    skin: 'voyager',
    min_height: 600,
    resize: 'vertical',
    plugins: 'link, paste, image, code, youtube, giphy, table, textcolor, lists',
    extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
    file_browser_callback: function(field_name, url, type, win) {
            if(type =='image'){
              $('#upload_file').trigger('click');
            }
        },
    toolbar: 'removeformat | styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy',
    convert_urls: false,
    image_caption: true,
    image_title: true,
    paste_word_valid_elements: "p,b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
    init_instance_callback: function (editor) {
        if (typeof tinymce_init_callback !== "undefined") {
            tinymce_init_callback(editor);
        }
      },
    }
  });
}
