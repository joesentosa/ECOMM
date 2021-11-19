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

function settingsFileUpload(typeClass){
  // First register any plugins
  $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

  // Turn input element into a pond
  $(`.${typeClass}`).filepond();

  // Set allowMultiple property to true
  $(`.${typeClass}`).filepond('allowMultiple', true);

  // Listen for addfile event
  $(`.${typeClass}`).on('FilePond:addfile', function(e) {
      console.log('file added event', e);
  });
}