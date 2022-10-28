@extends('admin.layouts.admin')



@section('content')

<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
</style>


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Pages</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div id="addThisFormContainer">

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3> About
                                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Get Image Link</button></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="ermsg">
                                </div>
                                <div class="container">

                                    {!! Form::open(['url' => 'admin/master/create','id'=>'createThisForm']) !!}
                                    {!! Form::hidden('codeid','', ['id' => 'codeid']) !!}
                                    @csrf
                                    

                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                    <div>
                                        <label for="image">Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                    </div>
                                    <div>
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter your description"></textarea>
                                    </div>


                                    <hr>
                                    <input type="button" id="addBtn" value="Create" class="btn btn-primary">
                                    <input type="button" id="FormCloseBtn" value="Close" class="btn btn-warning">
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>

        </div>

        {{-- <button id="newBtn" type="button" class="btn btn-info">Add New</button> --}}
        <hr>

        <div id="contentContainer">


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3> About Details</h3>
                        </div>
                        <div class="card-body">
                                <div class="container"  style="overflow-x:auto;">


                                    <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                        <tr>
                                          <th>ID</th>
                                          <th>Title</th>
                                          <th>Image</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($data as $key => $data)
                                            <tr>
                                              <td>{{$key + 1 }}</td>
                                              <td>{{$data->title}}</td>
                                              <td style="text-align: center">
                                                @if ($data->image)
                                                <img src="{{asset('images/thumbnail/'.$data->image)}}" height="120px" width="220px" alt="">
                                                @endif
                                                </td>
                                                <td>{!!$data->description!!}</td>
                                              <td>
                                                <a id="EditBtn" rid="{{$data->id}}"><i class="fa fa-edit" style="color: #2196f3;font-size:16px;"></i></a>
                                                {{-- <a id="deleteBtn" rid="{{$data->id}}"><i class="fa fa-trash-o" style="color: red;font-size:16px;"></i></a> --}}
                                              </td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        @include('admin.photo.modal') 
    </main>
   
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    
    <script>
        $(document).ready(function () {

            $("#addThisFormContainer").hide();
            $("#newBtn").click(function(){
                $("#description").addClass("ckeditor");
                for ( instance in CKEDITOR.instances ) {
                    CKEDITOR.instances[instance].updateElement();
                    } 
                 CKEDITOR.replace( 'description' );
                clearform();
                $("#newBtn").hide(100);
                $("#addThisFormContainer").show(300);

            });
            $("#FormCloseBtn").click(function(){
                $("#addThisFormContainer").hide(200);
                $("#newBtn").show(100);
                window.setTimeout(function(){location.reload()},100)
                clearform();
            });


            //header for csrf-token is must in laravel
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            //

            var url = "{{URL::to('/admin/about')}}";
            // console.log(url);
            $("#addBtn").click(function(){
            //   alert("#addBtn");
                if($(this).val() == 'Create') {
                    for ( instance in CKEDITOR.instances ) {
                    CKEDITOR.instances[instance].updateElement();
                    }  
                    var file_data = $('#image').prop('files')[0];
                    if(typeof file_data === 'undefined'){
                        file_data = 'null';
                    }
                    var form_data = new FormData();
                    form_data.append('image', file_data);
                    form_data.append("title", $("#title").val());
                    form_data.append("description", $("#description").val());

                    $.ajax({
                      url: url,
                      method: "POST",
                      contentType: false,
                      processData: false,
                      data:form_data,
                      success: function (d) {
                          if (d.status == 303) {
                              $(".ermsg").html(d.message);
                          }else if(d.status == 300){
                            success("Data Insert Successfully!!");
                                window.setTimeout(function(){location.reload()},2000)
                          }
                      },
                      error: function (d) {
                          console.log(d);
                      }
                  });
                }
                //create  end
                //Update
                if($(this).val() == 'Update'){
                // alert('update btn work');
                for ( instance in CKEDITOR.instances ) {
                CKEDITOR.instances[instance].updateElement();
                }  
                var file_data = $('#image').prop('files')[0];
                    if(typeof file_data === 'undefined'){
                        file_data = 'null';
                    }
                  
                  var form_data = new FormData();
                    form_data.append('image', file_data);
                    form_data.append("title", $("#title").val());
                    form_data.append("description", $("#description").val());
                    form_data.append('_method', 'put');

                    // alert(name);
                    $.ajax({
                        url:url+'/'+$("#codeid").val(),
                        type: "POST",
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        data:form_data,
                        success: function(d){
                            console.log(d);
                            if (d.status == 303) {
                                $(".ermsg").html(d.message);
                                pagetop();
                            }else if(d.status == 300){
                                success("Data Update Successfully!!");
                                window.setTimeout(function(){location.reload()},2000)
                            }
                        },
                        error:function(d){
                            console.log(d);
                        }
                    });
                }
                //Update
            });
            //Edit
            $("#contentContainer").on('click','#EditBtn', function(){
                //alert("btn work");
                codeid = $(this).attr('rid');
                //console.log($codeid);
                info_url = url + '/'+codeid+'/edit';
                //console.log($info_url);
                $.get(info_url,{},function(d){
                    populateForm(d);
                    pagetop();
                });
            });
            //Edit  end

            //Delete
            $("#contentContainer").on('click','#deleteBtn', function(){
                if(!confirm('Sure?')) return;
                 masterid = $(this).attr('rid');
                 info_url = url + '/'+masterid;
                console.log(info_url);
                //alert(info_url);
                $.ajax({
                    url:info_url,
                    method: "GET",
                    type: "DELETE",
                    data:{
                    },
                    success: function(d){
                        if(d.success) {
                            alert(d.message);
                            location.reload();
                        }
                    },
                    error:function(d){
                        console.log(d);
                    }
                });
            });
            //Delete

            function populateForm(data){
                for ( instance in CKEDITOR.instances ) {
                    CKEDITOR.instances[instance].updateElement();
                    } 
                $("#title").val(data.title);
                $("#description").val(data.description);
                 CKEDITOR.replace( 'description' );
                $("#codeid").val(data.id);
                $("#addBtn").val('Update');
                $("#addThisFormContainer").show(300);
                $("#newBtn").hide(100);
            }
            function clearform(){
                $('#createThisForm')[0].reset();
                $("#addBtn").val('Create');
            }

            $(document).ready(function () {
                $('#example').DataTable();
            });

        });
    </script>
    <script>
        function copyToClipboard(id) {
            document.getElementById(id).select();
            document.execCommand('copy');
            swal("Copied!");
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#about").addClass('active');
        });
    </script>
   
@endsection
