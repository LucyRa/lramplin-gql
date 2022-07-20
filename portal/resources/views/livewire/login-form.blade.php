<div class="mx-auto w-fit">
    @if($errors->any())
    {{-- To Do : Style errors --}}
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

    <form action="{{ route('login') }}" method="POST" class="user-auth">
      @csrf

      <div class="form-input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
      </div>
  
      <div class="form-input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
      </div>

      <div class="form-input-group checkbox">
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

    <a href="/forgot-password" class="block-link text-right">
      Forgot Password?
    </a>
  </div>