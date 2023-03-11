<x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h1>
    </x-slot>

    <div class="card mt-4">
        <div class="card-number">
            <h1 class="">Add Category</h1>

        </div>
        <style>
            .class-body{
                padding: 20px;
                margin: 20px;
                width:100%;
                border:1px solid;
                background-color:grey;
                font-color:red;
            }
            .mb-3{
                margin:20px;

            }
           
        </style>
        <div class="class-body">
           
            <form  action="{{('add-category')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Category Name</label>
                    <input type="text" name="name" class="form control">
            
                </div>
                <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form control">
            
                </div>
                <div class="mb-3">
                    <label>description</label>
                    <textarea name="description" rows="5" class="form control"></textarea>            
                </div>
                <div class="mb-3">
                    <label>image</label>
                    <input type="file" name="image" class="form control">
            
                </div>
                <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form control">
            
                </div>
                <div class="mb-3">
                    <label>Meta description</label>
                    <textarea name=" meta_description"  class="form control"></textarea>            
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="Meta_keywords" rows="3" class="form control"></textarea>            
                </div>
                <h4>Status Mode</h4>
                <div class=" mb-3">                       
                     <label>Navbar Status</label>
                        <input type="checkbox" name="navbar_status" class="form control" />
                </div>
                <div class=" mb-3">                       
                     <label>Status</label>
                        <input type="checkbox" name="status" class="form control" />
                </div>
                <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
             </form>



    


        </div>
    </div>

