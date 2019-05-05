

    /*
    var container = document.getElementById("space");

    for (var i = container.childNodes.length - 1; i >= 0; --i) {
        container.removeChild(container.childNodes[i]);
    }


    var intro=document.createElement("h2");
    intro.style.marginTop="7%";
    intro.style.marginBottom="3%";
    intro.innerHTML="Creaza-ti abonamentul tau la STB";
    container.appendChild(intro);

    var row=document.createElement("div");
    row.setAttribute("class", "form-row");
    row.style.marginTop="30px";
    container.appendChild(row);

    var form=document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "stb.php");
    row.appendChild(form);

    var col_data=document.createElement("div");
    col_data.setAttribute("class", "form-group");
    form.appendChild(col_data);

    var col_expire=document.createElement("div");
    col_expire.setAttribute("class", "form-group");
    form.appendChild(col_expire);

    var lb1=document.createElement("label");
    var t1 = document.createTextNode("Data de incepere a abonamentului");
    lb1.appendChild(t1);
    lb1.setAttribute("for", "inputDate");
    col_data.appendChild(lb1);

    var y = document.createElement("input");
    y.setAttribute("type", "text");
    y.setAttribute("size", "20");
    y.setAttribute("id", "inputDate");
    y.setAttribute("value", "05-05-2019");
    y.setAttribute("class", "form-control");
    var br=document.createElement("br");
    col_data.appendChild(br);
    col_data.appendChild(y);

    var lb2=document.createElement("label");
    var t2 = document.createTextNode("Data de expirare a abonamentului");
    lb2.appendChild(t2);
    lb2.setAttribute("for", "inputExpire");
    col_expire.appendChild(lb2);

    var x = document.createElement("input");
    x.setAttribute("type", "text");
    x.setAttribute("size", "20");
    x.setAttribute("id", "inputExpire");
    x.setAttribute("name", "expirationDate");
    x.setAttribute("class", "form-control");
    col_expire.appendChild(x);
*/
    $(document).ready(function(){
        $( "#inputDate" ).datepicker({
            onClose: function() {
                var date2 = $('#inputDate').datepicker('getDate');
                date2.setDate(date2.getDate()+30)
                $( "#inputExpire" ).datepicker("setDate", date2);
            }
        });
        $( "#inputExpire" ).datepicker();
    });

    var currDate = new Date();
    $(".form_datetime").datepicker({format: 'dd-mm-yyyy', startDate: currDate});



/*
var submit=document.createElement("div");
submit.setAttribute("class", "form-group");
var inpt_sub=document.createElement("input");
inpt_sub.setAttribute("type", "submit");
inpt_sub.setAttribute("name", "save");
inpt_sub.setAttribute("value", "Creeaza abonament");
inpt_sub.setAttribute("class", "btn btn-primary");
form.appendChild(submit);
submit.appendChild(inpt_sub);*/

