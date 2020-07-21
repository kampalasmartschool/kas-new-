function getAllThrive() {
    var settings = {
        "type": "GET",
        "async": !0,
        "dataType": "json",
        "url": "../api/programs/members",
        "headers": {
            "cache-control": "no-cache"
        }
    };
    $.ajax(settings).success(function (response) {
        $('.tutorList').html("");
        console.log(response);
        $.each(response.data, function (key, value) {
            var typeyy ="";
            if(value.sponsor_type=="1" || value.sponsor_type==1){
                typeyy="School";
            }else{
                typeyy="Parent";
            }
           
            // if(value.type=="1" || value.type==1){
            //     typeyy="School";
            // }
            // else if(value.type=="2" || value.type==2) {
            //     typeyy="Mentor";
            // }
            // else if(value.type=="3" || value.type==3) {
            //     typeyy="Student Support Program";
            // }
            // else if(value.type=="4" || value.type==4) {
            //     typeyy="Student Pathway Program";
            // }
            var tableData = "<tr><td>" + value.sponsor_name
             + "</td><td>" 
             + value.country + "</td>" + 
             "<td>"+value.email+"</td><td>"+value.phone+"</td><td>"+typeyy+"</td></tr>";
            $('.tutorList').append(tableData);
        });
       
    })
}

