@include ('admin/header')
@include ('admin/sidebar')
<div class="page-content">

        <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="page-title-box" style="background-color: #cc5500;">
                        <div class="container-fluid">
                         <div class="row align-items-center">
                             <div class="col-sm-6">
                                 <div class="page-title">
                                     <h4>Cart</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Cart</li>
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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-centered mb-0 table-nowrap">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th style="width: 120px">Product</th>
                                                            <th>Product Desc</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Total</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assetsAdmin/images/product/img-7.png')}}" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Home & Office Chair</a></h5>
                                                                <p class="mb-0">Color : <span class="font-weight-medium">Green</span></p>
                                                            </td>
                                                            <td>
                                                                $ 200
                                                            </td>
                                                            <td>
                                                                <div style="width: 120px;" class="product-cart-touchspin">
                                                                    <input data-toggle="touchspin" type="text" value="02">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $ 400
                                                            </td>
                                                            <td style="width: 90px;" class="text-center">
                                                                <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assetsAdmin/images/product/img-8.png')}}" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Home & Office Chair</a></h5>
                                                                <p class="mb-0">Color : <span class="font-weight-medium">Cream</span></p>
                                                            </td>
                                                            <td>
                                                                $ 225
                                                            </td>
                                                            <td>
                                                                <div style="width: 120px;" class="product-cart-touchspin">
                                                                    <input data-toggle="touchspin" type="text" value="01">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $ 225
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assetsAdmin/images/product/img-9.png')}}" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Home & Office Chair</a></h5>
                                                                <p class="mb-0">Color : <span class="font-weight-medium">White</span></p>
                                                            </td>
                                                            <td>
                                                                $ 275
                                                            </td>
                                                            <td>
                                                                <div style="width: 120px;" class="product-cart-touchspin">
                                                                    <input data-toggle="touchspin" type="text" value="02">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $ 550
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assetsAdmin/images/product/img-11.png')}}" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Home & Office Chair</a></h5>
                                                                <p class="mb-0">Color : <span class="font-weight-medium">Blue</span></p>
                                                            </td>
                                                            <td>
                                                                $ 275
                                                            </td>
                                                            <td>
                                                                <div style="width: 120px;" class="product-cart-touchspin">
                                                                    <input data-toggle="touchspin" type="text" value="01">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                $ 275
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="5">
                                                                Sub Total :
                                                            </th>
                                                            
                                                            <td>
                                                                $ 1450
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="5">
                                                                Discount :
                                                            </th>
                                                            
                                                            <td>
                                                                - $ 30
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="5">
                                                                Shipping Charge :
                                                            </th>
                                                            
                                                            <td>
                                                                $ 15
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="5">
                                                                Total :
                                                            </th>
                                                            
                                                            <td>
                                                                $ 1435
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

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
