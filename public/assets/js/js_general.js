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