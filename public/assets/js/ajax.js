function ajaxPostForm(id_form, url, id_to_reload) {
  var form = document.getElementById(id_form);
  var formData = new FormData(form);
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
      document.getElementById(id_to_reload).innerHTML = xmlHttp.responseText;
    }
  };
  xmlHttp.open("POST", url, true);
  xmlHttp.send(formData);
}
