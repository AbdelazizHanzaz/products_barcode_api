<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
  
        <!-- Logo -->
        <div class="flex-1 flex items-center">
          <a href="/">
            <img src="/logo.svg" alt="Logo Barcode API" class="text-white">
          </a>
        </div>
  
        <!-- Links -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">API Docs</a>

            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Features</a>
            
            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
          </div>
        </div>
  
        <!-- Buttons -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
          
            @guest
            <a href="{{route('login')}}" class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-md text-sm font-medium">Sign In</a>
  
            <a href="{{route('register')}}" class="bg-gray-900 hover:bg-gray-950 text-white ml-4 px-4 py-2 rounded-md text-sm font-medium">Register</a>
            @endguest
            
            @auth
            <a href="{{route('dashboard')}}" class="bg-blue-700 hover:bg-blue-900 text-white ml-4 px-4 py-2 rounded-md text-sm font-medium">My Dashboard</a>
            @endauth
          </div>
        </div>
  
      </div>
    </div>
  </nav>