<x-guest-layout>
  <h1>
    Register
  </h1>

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

  <form action="/register" method="POST" >
    @csrf

    <div>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
    </div>

    <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>

    <div>
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password" id="password_confirmation" name="password_confirmation">
    </div>

    <div>
      <button>Register</button>
    </div>
  </form>
</x-guest-layout>