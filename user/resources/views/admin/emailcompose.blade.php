@include ('admin/header')
@include ('admin/sidebar')

<div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box"style="background-color: #cc5500;">
                <div class="container-fluid">
                 <div class="row align-items-center">
                     <div class="col-sm-6">
                         <div class="page-title">
                             <h4>Email Compose</h4>
                                 <ol class="breadcrumb m-0">
                                     <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                     <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                     <li class="breadcrumb-item active">Email Compose</li>
                                 </ol>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="" class="btn btn-success">Add Widget</a>
                        </div>
                     </div>
                 </div>
                </div>
             </div>
             <!-- end page title -->    


            <div class="container-fluid">

                <div class="page-content-wrapper">

                


                    <div class="row">
                        <div class="col-12">
                            <!-- Left sidebar -->
                            <div class="email-leftbar card">
                                <button type="button" class="btn btn-danger btn-block waves-effect waves-light">
                                    Compose
                                </button>
                                <div class="mail-list mt-4">
                                    <a href="#" class="active"><i class="mdi mdi-email-outline me-2"></i> Inbox <span class="ms-1 float-end">(18)</span></a>
                                    <a href="#"><i class="mdi mdi-star-outline me-2"></i>Starred</a>
                                    <a href="#"><i class="mdi mdi-diamond-stone me-2"></i>Important</a>
                                    <a href="#"><i class="mdi mdi-file-outline me-2"></i>Draft</a>
                                    <a href="#"><i class="mdi mdi-email-check-outline me-2"></i>Sent Mail</a>
                                    <a href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Trash</a>
                                </div>
    
                                <h6 class="mt-4">Labels</h6>
    
                                <div class="mail-list mt-1">
                                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-end"></span>Theme Support</a>
                                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span>Freelance</a>
                                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-end"></span>Social</a>
                                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-end"></span>Friends</a>
                                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-end"></span>Family</a>
                                </div>
    
                                <h6 class="mt-4">Chat</h6>
    
                                <div class="mt-2">
                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="{{asset('assetsAdmin/images/users/avatar-2.jpg')}}" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Scott Median</p>
                                            <p class="text-muted">Hello</p>
                                        </div>
                                    </a>
    
                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="{{asset('assetsAdmin/images/users/avatar-3.jpg')}}" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Julian Rosa</p>
                                            <p class="text-muted">What about our next..</p>
                                        </div>
                                    </a>
    
                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="{{asset('assetsAdmin/images/users/avatar-4.jpg')}}" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">David Medina</p>
                                            <p class="text-muted">Yeah everything is fine</p>
                                        </div>
                                    </a>
    
                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="{{asset('assetsAdmin/images/users/avatar-6.jpg')}}" alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Jay Baker</p>
                                            <p class="text-muted">Wow that's great</p>
                                        </div>
                                    </a>
    
                                </div>
                            </div>
                            <!-- End Left sidebar -->

                            
                         
                    


    
    
                            <!-- Right Sidebar -->
                            <div class="email-rightbar mb-3">
    
                                <div class="card">
                                    <div class="card-body">
    
                                        <form>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" placeholder="To">
                                            </div>
        
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="mb-3">
                                                <form method="post">
                                                    <textarea id="elm1" name="area"></textarea>
                                                </form>
                                            </div>
    
                                           
    
                                        </form>
    
                                    </div>
    
                                </div>
    
                            </div> <!-- end Col-9 -->
    
                        </div>
    
                    </div><!-- End row -->

                </div>

                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

      
        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Morvin.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@include ('admin/script')

        </body>
</html>