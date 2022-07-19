<x-guest-layout>
  <h1 class="text-center">
    Login
  </h1>
  
  <div class="mx-auto w-fit">
    @if($errors->any())
    <div>
      <div>
        Something went wrong!
      </div>

      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
      @csrf

      <div class="w-full">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
      </div>
  
      <div class="w-full">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
      </div>

      <div class="w-full">
        <label for="remember">
          <input type="checkbox" id="remember" name="remember">

          <span>
            Remember me
          </span>
        </label>
      </div>

      <button class="btn">
        Log In
      </button>
    </form>
  </div>
</x-guest-layout>