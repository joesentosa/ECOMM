// upload file
function dragNdropUpdate(event) {
  var fileName = URL.createObjectURL(event.target.files[0]);
  var preview = document.getElementById("preview_update");
  var previewImg = document.createElement("img");
  previewImg.setAttribute("src", fileName);
  preview.innerHTML = "";
  preview.appendChild(previewImg);
}
function dragUpdate() {
    document.getElementById('uploadFile_update').parentNode.className = 'draging dragBox';
}
function dropUpdate() {
    document.getElementById('uploadFile_update').parentNode.className = 'dragBox';
}
$('.remove-preview-update').click(function() {
  document.getElementById('preview_update').innerHTML = "";
});
// =============================================================
function dragNdropInsert(event) {
  var fileName = URL.createObjectURL(event.target.files[0]);
  var preview = document.getElementById("preview_insert");
  var previewImg = document.createElement("img");
  previewImg.setAttribute("src", fileName);
  preview.innerHTML = "";
  preview.appendChild(previewImg);
}
function dragInsert() {
    document.getElementById('uploadFile_insert').parentNode.className = 'draging dragBox';
}
function dropInsert() {
    document.getElementById('uploadFile_insert').parentNode.className = 'dragBox';
}
$('.remove-preview-insert').click(function() {
  document.getElementById('preview_insert').innerHTML = "";
});  