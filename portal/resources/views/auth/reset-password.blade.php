<x-guest-layout>
  <div>
    <h1>
      Forgot Password
    </h1>

    <div class="form-block mx-auto">
      <p>
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just sent you? If you didn't recieve the email, we will gladly send you another.
      </p>
      
      @if ($errors->any())
        <div>
          <p>Something went wrong!</p>
          
          <ul>
            @foreach($errors->all() as $error)
            <li>
              {{ $error }}
            </li>
            @endforeach
          </ul>
        </div>
      @endif

      @if (session('status'))
        <p>
          {{ session('status') }}
        </p>
      @endif

      <div class="form-container">
        <form action="{{ route('password.update') }}" method="POST">
          @csrf

          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <div class="form-input-group !w-full">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="!max-w-full" value="{{ old('email', $request->email) }}" autofocus>
          </div>

          <div class="form-input-group !w-full">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div>
      
          <div class="form-input-group !w-full">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
          </div>

          <button class="btn mt-5 w-full float-right">
            Reset Password
          </button>
        </form>
      </div>
    </div>
  </div>
</x-guest-layout>