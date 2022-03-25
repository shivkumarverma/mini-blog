<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(session()->has('status'))

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
        <div class="alert alert-warning d-flex align-items-center alert-dismissible " role="alert">
  
        <strong>{{session('status')}}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           </div>

    @endif

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow p-3 mb-5 bg-body rounded sm:rounded-lg">

            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light border-2">
                  <tr class="text-center">
                  <th >Name</th>
                  <th>Title</th>
                  <th>Body</th>
                 <th>Action</th>
                 </tr>
                </thead>
                <tbody>
      
                    @foreach($posts as $post)
                     <tr class="border-2 text-center">
                    
                     <td>
                         <p class="p-3">{{$post->user->name}}</p>

                      </td>
                      <td>
                          <p class="p-3">{{$post->title}}</p>

                          </td>
                      <td>
                          <p class="p-3">{{$post->body}}</p>
                      </td>
                      <td >
                          <div class="d-flex p-3 text-center">
                          <a href="{{url('/post/edit',$post->id)}}"  class="btn btn-outline-success btn-sm rounded-pill m-2" >Edit</a>
                          <a href="{{url('/post/delete',$post->id)}}"  class="btn btn-outline-danger btn-sm rounded-pill m-2">Delete</a>
                          </div>
                     </td>
                    </tr>
                   
                    @endforeach
   </tbody>
 
  
</table>
                
            </div>
        </div>

         
    </div>
</x-app-layout>
