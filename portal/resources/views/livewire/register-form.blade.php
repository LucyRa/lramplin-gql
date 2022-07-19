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

  <form action="{{ route('register') }}" method="POST" class="user-auth">
    @csrf

    <div class="form-input-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
    </div>

    <div class="form-input-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-input-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>

    <div class="form-input-group">
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password" id="password_confirmation" name="password_confirmation">
    </div>

    <button class="btn">
      Register
    </button>
  </form>
</div>