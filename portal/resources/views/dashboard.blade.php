<x-app-layout>
  <header>
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button>Logout</button>
    </form>
  </header>
  
  <div>
    This is the logged in view
  </div>
</x-app-layout>