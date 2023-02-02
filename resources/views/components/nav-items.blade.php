<ul class="flex flex-col py-2  bg-white md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">

 @auth

  <li>
  <form action="/logout" method="POST">
    @csrf
    <button class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-700 md:p-0">Logout</button>
  </form>
  </li>

  @else
  <li>
    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-violet-700 rounded md:bg-transparent md:text-violet-700 md:p-0 " aria-current="page">Sign In</a>
  </li>
  <li>
    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-violet-700 md:p-0 ">Sign Up</a>
  </li>
  @endauth
</ul>