var button = document.getElementById("button");
var option = document.getElementById("option");

function showSwitch() {
  const val = document.getElementById("option").value;
  let options;
  switch (parseInt(val)) {
    case 0:
      options = "Sh20=1GB 1hr";
      break;
    case 1:
      options = "Data Deals";
      const label = document.createElement("label");
      label.htmlFor = "datadeal";
      label.textContent = "Options for Data deals";
      label.className = "form-label"
      document.getElementById("inside1").appendChild(label);

      const input = document.createElement("input");
      input.type = "number";
      input.id = "datadeal";
      input.className = "form-control-sm px-0 mx-3"
      document.getElementById("inside1").appendChild(input);

      const button = document.createElement("button");
      button.id = "data";
      button.textContent = "Data deals";
      button.onclick = () => showData();
      button.className = "btn btn-secondary"
      document.getElementById("inside1").appendChild(button);
      break;
    case 2:
      options = "OFA YA MTAA";
      const label2 = document.createElement("label");
      label2.htmlFor = "ofa";
      label2.textContent = "Options for OFA YA MTAA";
      label2.className = "form-label"
      document.getElementById("inside2").appendChild(label2);

      const input2 = document.createElement("input");
      input2.type = "number";
      input2.id = "ofa";
      input2.className = "form-control-sm px-0 mx-3"
      document.getElementById("inside2").appendChild(input2);

      const button2 = document.createElement("button");
      button2.id = "buttonofa";
      button2.textContent = "OFA YA MTAA";
      button2.onclick = () => showOfa();
      button2.className = "btn btn-secondary"
      document.getElementById("inside2").appendChild(button2);

      break;
    case 3:
      options = "Daily";
      break;
    case 4:
      options = "Weekly";
      break;
    default:
      options = "No Value";
      break;
  }
  document.getElementById("book").innerHTML = "You selected " + options;
}
function showData() {
  const input = document.getElementById("datadeal").value;
  let datadeals;
  switch (parseInt(input)) {
    case 0:
      datadeals = "Daily + Hourly";
      break;
    case 1:
      datadeals = "Weekly + Monthly";
      break;
    case 2:
      datadeals = "OFA YA MTAA";
      break;
    case 3:
      datadeals = "Sh20=1GB 1hr";
      break;
    default:
      datadeals = "No value";
  }
  document.getElementById("fordatadeals").innerHTML =
    "You Selected " + datadeals;
}
function showOfa() {
  const input2 = document.getElementById("ofa").value;
  let ofa;
  switch (parseInt(input2)) {
    case 0:
      ofa = "Sh20=400MB 3hr";
      break;
    case 1:
      ofa = "Sh50=500MB till Midnight";
      break;
    case 2:
      ofa = "Sh100=650MB 3Days";
      break;
    case 3:
      ofa = "Sh1000=10GB 30Days";
      break;
    default:
      ofa = "No value";
  }
  document.getElementById("forOfa").innerHTML = "You Selected " + ofa;
}
