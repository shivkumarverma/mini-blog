<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow p-3 mb-5 bg-body rounded">
                <div class="">
                    <div class=" w-auto p-3 text-center " style="background-color: #eee;">
                         <h1 class="display-6 ">Create new post</h1>
                        </div>
                   <div class="p-4 d-block">
                    <form method="post">
                        @csrf
                     
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>    
                    <input class="border-2" name="title" type="text" placeholder="Title of the Post"></input>
                     </div>

                    <div class="input-group mb-3">
                    <span class="input-group-text">Post Content</span>
                    <textarea  class="form-control p-5" aria-label="Content of the post" name="body" placeholder="Start writing your creative ideas here ....." ></textarea>
                    </div>

                    <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary rounded-pill" type="submit" >Create</button>
                    </div>

                     </form>
                    </div> 

                     
                     @if(session()->has('status'))
                     <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div>

                     {{session('status')}}

                     </div>
                    </div>
                     @endif
                   
    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
