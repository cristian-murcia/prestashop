/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function enviarDatos() {
    var name = document.getElementById('name').value;
    var lastName = document.getElementById('lastName').value;
    var emailAddress = document.getElementById('emailAddress').value;
    var dni = document.getElementById('dni').value;
    var country = document.getElementById('country').value;
    var city = document.getElementById('city').value;
    var cellPhone = document.getElementById('cellPhone').value;
    var phone = document.getElementById('phone').value;
    var fiscalNumber = document.getElementById('fiscalNumber').value;
    var companyName = document.getElementById('companyName').value;
    var jobTitle = document.getElementById('jobTitle').value;
    var companyDesc = document.getElementById('companyDesc').value;

    var form = new FormData();
    form.append("name", name);
    form.append("lastName", lastName);
    form.append("emailAddress", emailAddress);
    form.append("jobTitle", jobTitle);
    form.append("dni", dni);
    form.append("companyDesc", companyDesc);
    form.append("fiscalNumber", fiscalNumber);
    form.append("country", country);
    form.append("city", city);
    form.append("cellPhone", cellPhone);
    form.append("phone", phone);
    form.append("companyName", companyName);

    var settings = {
        "url": "http://190.60.198.233:8080/api/jsonws/ImpresistemWeb-portlet.customer/create-user",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Authorization": "Basic cGFnaW5hX2FiaWVydGFAaW1wcmVzaXN0ZW0uY29tOkltcHJlc2lzdGVtMjAyMCo="
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };
    console.log(form);

    $.ajax(settings).done(function (response) {
        console.log(response);
    });
}