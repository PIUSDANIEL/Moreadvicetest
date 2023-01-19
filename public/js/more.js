$(document).ready(function () {
     //GET UPLOADED task
     $('#example12').DataTable({
        ajax:{
            url:"taskfetch",
            dataSrc: 'task',
        },
        responsive: true,
        paging: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        searching:true,
        ordering:true,
        columns:[
            { data:'task',
                name:'task'
            },
            { data: 'description',
                name:'description'
            },
            { data: 'id',
            name:'id'
            },
            { data: 'start_at',
                name:'start_at'
            },

            { data: 'end_at',
                name:'end_at'
            },
            { data: 'status',
                name:'status'
            }
        ], columnDefs: 
        [{
            'targets':2,
            'data':'main_image',
            'render': function(data,type,row,meta){
                    return '<span class="badge badge-pill badge-info p-2" style="cursor:pointer;" onclick="taskview('+ data +')" data-toggle="modal" data-target="#modal-view-task">view more  <i class="fa fa-eye" aria-hidden="true" id="'+ data +'" class="mx-auto rounded" height="40" width="50"></span>'

            }
              
        },
        {
            'targets':1,
            'className':"truncate",
        }
        ]

     });



     //Get task
      //GET UPLOADED PRODUCT
      $('#example1').DataTable({
        ajax:{
            url:"taskfetchprogress",
            dataSrc: 'task',
        },
        responsive: true,
        paging: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        searching:true,
        ordering:true,
        columns:[
            { data:'task',
                name:'task'
            },
            { data: 'description',
                name:'description'
            },
            { data: 'status',
                name:'status'
            }
        ], columnDefs: [{targets:1,className:"truncate"}],
           createdRow: function(row){
            var td =$(row).find(".truncate");
            td.attr("title", td.html());
           }

      });


      //GET block
      $('#example').DataTable({
        ajax:{
            url:"taskfetchblocked",
            dataSrc: 'task',
        },
        responsive: true,
        paging: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        searching:true,
        ordering:true,
        columns:[
            { data:'task',
                name:'task'
            },
            { data: 'description',
                name:'description'
            },
            { data: 'status',
                name:'status'
            }
        ], columnDefs: [{targets:1,className:"truncate"}],
        createdRow: function(row){
         var td =$(row).find(".truncate");
         td.attr("title", td.html());
        }

     });


     $('#example13').DataTable({
        ajax:{
            url:"taskfetchdone",
            dataSrc: 'task',
        },
        responsive: true,
        paging: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        searching:true,
        ordering:true,
        columns:[
            { data:'task',
                name:'task'
            },
            { data: 'status',
                name:'status'
            }
        ]

     });





    //UPLOAD task
    jQuery(function(){

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

        });

        $('#taskupload').on('submit', function (e) {
            e.preventDefault();

            $('.alert-error').html('');

            var inputdatails = new FormData($('#taskupload')[0]);
            //console.log(inputdatails);


            $.ajax({
                type: "POST",
                url: "/uploadtask",
                data:inputdatails ,
                contentType:false,
                processData:false,
                success: function (response) {
                    console.log(response.message);

                    if(response.status === 200){



                        $('#taskupload').closest('form').find("input[type=text],input[type=number], textarea").val('');

                        Swal.fire({
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1700
                        });



                        $('#example12').DataTable().ajax.reload();
                        $('#example1').DataTable().ajax.reload();
                        $('#example13').DataTable().ajax.reload();
                        $('#example').DataTable().ajax.reload();

               

                    }else{

                        $.each(response.message, function (key, validateerror) {
                            $('.alert-error').append('<li class="" style="color: red;">'+validateerror +'</li>');
                        });
                    }
                }
            });

        });
    });


    //Edith task

    jQuery(function(){

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

        });

        $('#taskeditd').on('submit', function (e) {
            e.preventDefault();

            $('.alert-error').html('');

            var inputdatails = new FormData($('#taskeditd')[0]);
            //console.log(inputdatails);


            $.ajax({
                type: "POST",
                url: "/taskedit",
                data:inputdatails ,
                contentType:false,
                processData:false,
                success: function (response) {
                    console.log(response.message);

                    if(response.status === 200){



                        $('#taskeditd').closest('form').find("input[type=text],input[type=number], textarea").val('');

                        Swal.fire({
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1700
                        });

                        $('#modal-edit-task').modal('hide');



                        $('#example12').DataTable().ajax.reload();
                        $('#example1').DataTable().ajax.reload();
                        $('#example13').DataTable().ajax.reload();
                        $('#example').DataTable().ajax.reload();


                   

                    }else{

                        $.each(response.message, function (key, validateerror) {
                            $('.alert-error-edit').append('<li class="" style="color: red;">'+validateerror +'</li>');
                        });
                    }
                }
            });

        });
    });
   
});

function taskview(id){
   
    $('.titt').html("");
    $('.desc').html("");
    $('.theicon').html("");
    

    $.ajax({
        type: "Get",
        url: "taskview/"+id,

        success: function (response) {
            if(response.status === 200){

              console.log(response.task);

              
              $('.titt').append(response.task[0]['task']);

              $('.desc').append(response.task[0]['description']);

              $('.theicon').append('<div class="myicons rounded" onclick="taskupdate(\'completed\','+response.task[0]['id']+')"><i class="fa text-center text-info fa-check" aria-hidden="true"></i> Done</div>'
              +'<div class="myicons rounded" onclick="taskupdate(\'progress\','+response.task[0]['id']+')"><i class="fa text-center fa-spinner " aria-hidden="true"></i> In Progress</div>'
              +'<div class="myicons rounded" data-toggle="modal" data-target="#modal-edit-task" onclick="taskgetedit('+response.task[0]['id']+')"><i class="fa text-center fa-edit text-primary" aria-hidden="true"></i> Edit</div>'
              +'<div class="myicons rounded" onclick="taskupdate(\'block\','+response.task[0]['id']+')"><i class="fa text-center fa-times text-primary" aria-hidden="true"></i> Block</div>'
              +'<div class="myicons rounded" onclick="taskupdate(\'delete\','+response.task[0]['id']+')"><i class="fa text-center fa-trash text-danger" aria-hidden="true"></i> Delete</div>');


                                                            
                                                            
                

            }
        }
    });
   
}

function taskupdate(mode,id){
   
  
     var data = {
        'id':id,
        'mode':mode
     }

     console.log(data);

      $.ajax({
        type: "Get",
        url: "taskupdate",
        data:data,
        success: function (response) {
           

            if(response.status === 200){

                

               // $('#taskupload').closest('form').find("input[type=text],input[type=number], textarea").val('');

                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1700
                });

                $('#modal-view-task').modal('hide');

                $('#example12').DataTable().ajax.reload();
                $('#example1').DataTable().ajax.reload();
                $('#example13').DataTable().ajax.reload();
                $('#example').DataTable().ajax.reload();


            }else{

                $.each(response.message, function (key, validateerror) {
                    $('.alert-error').append('<li class="" style="color: red;">'+validateerror +'</li>');
                });
            }
        }
      });


}

function taskgetedit(id){
    $('#taskedit').html('');
    $('#start_atedit').html('');
    $('#end_atedit').html('');
    $('#id').html('');
    $('#descriptionedit').html('');
    $('#modal-view-task').modal('hide');
    
    $.ajax({
        type: "Get",
        url: "taskgetedit/"+id,

        success: function (response) {
            if(response.status === 200){

              
                console.log(response.task[0]['id']);
              
              //$('.titt').append(response.task[0]['task']);

              $('#id').val(response.task[0]['id']);
                $('#taskedit').val(response.task[0]['task']);
                $('#start_atedit').attr('value',response.task[0]['start_at']);
                $('#end_atedit').attr('value',response.task[0]['end_at']);
               // $('#statusedit').val('<option vall>'+response.task[0]['status']+'</option>');
                $('#descriptionedit').summernote('code',response.task[0]['description']);
            
                
           
                                                    
            }
        }
    });
}

