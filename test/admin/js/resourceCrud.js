function getAllResources(){
    	var getResourceSettings={
			"type":"GET",
			"async": true,
			"dataType":"json",
			"url":"../api/resource",
			"headers":{
				"cache-control":"no-cache"
			}
		};
	$.ajax(getResourceSettings).success(function(response){
		
		console.log(JSON.stringify(response));
		$('.resourceList').html("");
		 $.each(response, function(key, value){
		 			var file=value.files;
			 $.each(file, function(key2, value2){	
			var appendData="<div class='row'>"+
								"<div class='col-md-1'>"+
									"<div class='thumbnail'>"+
											"<img src='"+value2.url+"' class='img-responsive'></div>"+
									"</div>"+
								"<div class='col-md-5'>"+
									"<div class='detailsN pull-left' style='margin-right:5%;'>"+
											"<a href='#'><h4 class='resourceName text-primary'>"+value2.resource_name+"</h4></a>"+
									"</div>"+
									"</div>"+
									"<div class='col-md-6'>"+
										"<div class='pull-left btn-group btn-group-xs' style='margin-top:10px; margin-bottom:10px;'>"+
											"<a href='"+value2.url+"' target='blank' class='btn btn-default'><span class='fa fa-cloud-download'> </span></a>"+
											"<button value='"+value2.resource_id+"' class='delResource btn btn-default' data-target='#deleteResource' data-toggle='modal'><span class='fa fa-trash'> </span></button>"+
											"<button data-clipboard-action='copy' data-clipboard-text='"+value2.url+"' class='copyLink btn btn-default'><span class='fa fa-copy'> </span></button>"+
											"<button value='"+value2.resource_id+"' class='indResource btn btn-default' data-target='#editResource' data-toggle='modal'><span class='fa fa-edit'> </span></button>"+
												"</div>"+
												"</div>"+
												"</div>";
			$('.resourceList').append(appendData);
		});
		});
		
    $('.indResource').click( function(e){
    e.preventDefault();
    var valueX= $(this).attr("value");
    editResource(valueX);
    //console.log(valueX);
    });
	   $('.delResource').click( function(e){
    e.preventDefault();
    var valueD= $(this).attr("value");
    delResource(valueD);
    //console.log(valueD);
    });
		
		
		
	   $('.copyLink').click( function(e){
    //e.preventDefault();
    //var valueD= $(this).attr("data-target");
    //copyResourceLink(valueD);
    //console.log(valueD);
    });

	
	});
    
    
}

$( function(){
	getAllResources();	
});



function addResource(){
		
		
		 $("#addNewResourceForm").ajaxify({url:'../api/resource', validator:beforeSubmit, onSuccess:callBackMethodo}); 
		function callBackMethodo(responseo){
			console.log(JSON.stringify(responseo));
			
			if(responseo.status==="failed"){
				              $('#addNewResourceForm .form-error').fadeIn( function(){
                                $(this).text(responseo.message);	
				$('#addNewResourceForm .form-error').fadeOut("slow");	
				});				
			}
			else{
				
                                    $('#addNewResourceForm .form-success').fadeIn( function(){
                                $(this).text("Resource successfully Added");	
				$('#addNewResourceForm .form-success').fadeOut("slow");	
				});                                    
              
				$('#addNewResourceForm')[0].reset();		
				getAllResources();
			}
				
		}
 

			function beforeSubmit(){
				var obj={};
        //Label elements in the form 
            $('.ResourceNameLabel').text("Resource Name");
            $('.resourceFileLabel').text("Upload Resource");
            
    
        //default label class
             $('label').removeClass('text-danger');
                if(! minmax(3, 20, "#addNewResourceForm #ResourceName", "Please give a Resource a name","#addNewResourceForm .ResourceNameLabel")){
                    obj.status= false;
                 }
                else{
					obj.status=true;
					}
				 var formx={};
			
			obj.postdata=formx;
					
					return obj;
				
                 
      
       
    }
	
	
	
}


function searchResource(){
	
	
}

function editResource(id){
	alert(id);
	//get units by id
	   editUnitByIdSettings={
			"type":"GET",
			"async": true,
			"dataType":"json",
			"url":"../api/resource/"+id,
			"headers":{
				"cache-control":"no-cache"
			}
		};
	
	
	
	//map the avalibale image
		$("#editResourceForm .img-avail").show();
	$("#editResourceForm .img-upload").hide();
	$("#editResourceForm .removeImg").show();
	$("#editResourceForm .cancelRemoveImg").hide();
$("#editResourceForm .img-upload").hide();
$("#editResourceForm .cancelRemoveImg").hide();
$("#editResourceForm .img-upload #resourceFileEdit").val("");
$('#editResourceForm .removeImg').click( function(){
	$("#editResourceForm .img-avail").hide();
	$("#editResourceForm .img-upload").slideDown();
	$("#editResourceForm .removeImg").hide();
	$("#editResourceForm .cancelRemoveImg").fadeIn();
	$("#editResourceForm .cancelRemoveImg").click( function(){
		$("#editResourceForm .img-avail").fadeIn();
	$("#editResourceForm .img-upload").hide();
	$("#editResourceForm .img-upload #resourceFileEdit").val("");
	$("#editResourceForm .removeImg").fadeIn();
	$("#editResourceForm .cancelRemoveImg").hide();
	});

});	

	$.ajax(editUnitByIdSettings).done(function(response){
		
		var fileEdit=response[0];
			//alert(fileEdit.resource_name);
      		$('#editResourceForm #ResourceNameEdit').val(fileEdit.resource_name);
		  	$('#editResourceForm .pic').attr("src",fileEdit.url);
               
       }); 
	   

		
		 $("#editResourceForm").ajaxify({url:'../api/resource/edit/'+id, validator:beforeEditResource, onSuccess:callBackMethodEdit}); 
		function callBackMethodEdit(responseo){
			console.log(JSON.stringify(responseo));
			
			if(responseo.status==="failed"){
				              $('#editResourceForm .form-error').fadeIn( function(){
                                $(this).text(responseo.message);	
				$('#editResourceForm .form-error').fadeOut("slow");	
				});				
			}
			else{
				
                                    $('#editResourceForm .form-success').fadeIn( function(){
                                $(this).text("Resource successfully Added");	
				$('#editResourceForm .form-success').fadeOut("slow");	
					 $('#content-area').html("");
					$('#content-area').load("resources.php");
                    });  
					$(".modal-backdrop").fadeOut();	
				$(".modal").modal("hide");	                                   
              			
				
			}
				
		}
 

			function beforeEditResource(){
				var obj={};
        //Label elements in the form 
            $('.ResourceNameLabel').text("Resource Name");
            $('.resourceFileLabel').text("Upload Resource");
            
    
        //default label class
             $('label').removeClass('text-danger');
                if(! minmax(3, 40, "#editResourceForm #ResourceNameEdit", "Please give a Resource a name","#editResourceForm .ResourceNameLabel")){
                    obj.status= false;
                 }
                else{
					obj.status=true;
					}
				 var formx={};
			
			obj.postdata=formx;
					
					return obj;
				
                 
      
       
    }
	
	
	
}

function delResource(id){
		console.log(id);
		$('#deleteResource .delBtn').click( function(){
		
		var delSubjectSettings={
			"type":"GET",
			"async": true,
			"dataType":"json",
			"url":"../api/resource/delete/"+id,
			"headers":{
				"cache-control":"no-cache"
			}
		};
	$.ajax(delSubjectSettings).success(function(response){
		getAllResources();	
				
				
				
	});
	
	});
	
}


function copyResourceLink(url){
	//alert(url);
	
	
}
