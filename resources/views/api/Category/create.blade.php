<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-number">
            <h4 class="">Add Category</h4>

        </div>
        <div class="class-body">
            <form action="{{('add-category')}}" method="Post">
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
                    <textarea name=" meta_description" rows="3" class="form control"></textarea>            
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="Meta_keywords" rows="3" class="form control"></textarea>            
                </div>
                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <lable>Navbar Status</label>
                        <inut type="checkbox" name="navbar_status" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <lable>Status</label>
                        <inut type="checkbox" name="status" />
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
                
                    
                    
            
        

            </form>



    


        </div>
    </div>
</x-app-layout>