@include('partials.header')

<x-navbar />

<header class="max-w-lg mx-auto my-8">
    <h1 class="text-4xl font-bold  text-center">Student List</h1>
</header>

{{-- SEARCH BAR AND SORTING SECTION --}}
<section class="grid md:grid-flow-col gap-4 justify-between w-4/5 mx-auto my-8">
  <form  action="/" method="GET"  class="flex gap-4 justify-between  md:mx-0 items-center">
    @csrf
    <div class="grid grid-flow-col gap-2 items-center">
      <label for="sort">Sort by:</label>
      <select name='sort' class="py-2 px-4 bg-violet-500 text-white rounded-md hover:bg-violet-700 hover:shadow-lg hover:cursor-pointer focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out ">  
        <option value="first_name">First Name</option>
        <option value="last_name">Last Name</option>
        <option value="age">Age</option>
        <option value="created_at">Create At</option>
      </select>
      
      {{-- <button 
        type="submit" 
        class="py-2 px-4 bg-violet-500 text-white rounded-full hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out"
        name="sort"
        value="first_name"
      >First Name</button>
      <button 
        type="submit" 
        class="py-2 px-4 bg-violet-500 text-white rounded-full hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out"
        name="sort"
        value="last_name"
      >
      Last Name
      </button>
      <button 
        type="submit" 
        class="py-2 px-4 bg-violet-500 text-white rounded-full hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out"
        name="sort"
        value="age"
      >
      Age
      </button>
      <button 
        type="submit" 
        class="py-2 px-4 bg-violet-500 text-white rounded-full hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out"
        name="sort"
        value="created_at"
      >
      Create At
    </button> --}}
    <select name='order' class="py-2 px-4 bg-violet-500 text-white rounded-md hover:bg-violet-700 hover:shadow-lg hover:cursor-pointer focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out">  
      <option value="asc">Ascending</option>
      <option value="desc">Descending</option>
    </select>
    </div>
    
  <button 
      type="submit" 
      class="py-2 px-4 bg-violet-500 text-white rounded-full hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out"
    >
    Sort
    </button>
  </form>
  <form action="/" class="flex self-end" role="search">
    @csrf
    <input type="search" class="form-control  relative min-w-0   px-3 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-l-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-violet-600 focus:outline-none" placeholder="Search" name='student' id='student' >
    
    <button class="px-6 py-2.5 bg-violet-600 text-white font-medium text-xs leading-tight uppercase rounded-r-full shadow-md hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="submit" id="button-addon2">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
  </form>

</section>

{{-- STUDENT SECTION --}}
<section x-data='{createModalOpen: false}' class="grid grid-cols-1  md:grid-cols-2 2xl:grid-cols-3  gap-4 lg:gap-8 w-4/5 mx-auto">
  {{-- ADD BUTTON --}}
  <div @click="createModalOpen = !createModalOpen" class="border-2 border-green-500 bg-gray-50 w-16 h-16 rounded-full fixed bottom-8 right-8 md:bottom-16 md:right-16 z-20 flex justify-center items-center hover:bg-green-500 hover:cursor-pointer  hover:duration-300 transition ease-in group">
    <button>
    <i class="fa-solid fa-user-plus text-xl md:text-2xl text-green-500 group-hover:text-gray-100 "></i>
  </button>
  </div>
  @foreach ($data as $item)
    <div x-data='{deleteModalOpen: false, editModalOpen :false}' class="flex rounded-lg shadow-lg bg-white min-w-sm justify-items-center items-center h-40 border-2">
      {{-- DIV FOR PROFILE IMAGE --}}
      <div class="pl-4"> 
        @if ($item->gender === 'Male')
        <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" class="w-28 h-28 rounded-full" alt="">
        <img src="picture.svg" alt="">     
        @else  
        <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" class="w-28 h-28 rounded-full" alt="">
        @endif
      </div>
      {{-- DIV FOR STUDENT INFO --}}
      <div class="w-4/5 px-4">
        <h5 class="text-gray-900 text-2xl leading-tight font-medium ">{{ $item->first_name }} {{ $item->last_name }}</h5>
        <p class="text-gray-700 text-sm">{{ $item->email }}</p>

        <div class="flex items-center justify-between">
          <p class="text-gray-700 text-xs block h-4">{{ $item->gender }} | {{ $item->age }} years old  </p>
        
          <div>
            <button @click='editModalOpen = !editModalOpen'><i class="fa-regular fa-pen-to-square text-blue-600 text-lg self-end h-4 mr-2"></i></button>

            <button @click='deleteModalOpen = !deleteModalOpen' ><i class="fa-solid fa-trash-can text-lg text-rose-600 self-end h-4 mr-2 "></i></button>

          </div>
        </div>
        
      </div>
      <x-edit-modal :student="$item" />
      <x-delete-modal :student="$item" />
      <x-create-modal/>
    </div>

  
  @endforeach
</section>



<div class="mx-auto max-w-xs pt-6 p-4">
  {{$data->onEachSide(1)->links()}}
</div>


@include('partials.footer')