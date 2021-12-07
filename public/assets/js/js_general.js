// settings table
function GeneralSettingsTable(id_table,data_settings,set_button,container_button){
  var datatable = $(`#${id_table}`).DataTable(data_settings);
  if (set_button == true) {
    datatable.buttons()
          .container()
          .appendTo($(`.${container_button}`,datatable.table().container))
  } 
  return datatable; 
}

// uploads image
function generalUpload(iduploading,idpreview,idformupload){
  var imgUpload = document.getElementById(iduploading)
  , imgPreview = document.getElementById(idpreview)
  , imgUploadForm = document.getElementById(idformupload)
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

  imgUpload.addEventListener('change', previewImgs, false); 
    function previewImgs(event) {
    totalFiles = imgUpload.files.length;
    
    if(!!totalFiles) {
      imgPreview.classList.remove('quote-imgs-thumbs--hidden');
      previewTitle = document.createElement('p');
      previewTitle.style.fontWeight = 'bold';
      previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
      previewTitle.appendChild(previewTitleText);
      imgPreview.appendChild(previewTitle);
    }
    
    for(var i = 0; i < totalFiles; i++) {
      img = document.createElement('img');
      img.src = URL.createObjectURL(event.target.files[i]);
      img.classList.add('img-preview-thumb');
      imgPreview.appendChild(img);
    }
  }
} 