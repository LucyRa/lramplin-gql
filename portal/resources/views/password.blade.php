<x-app-layout>
  <div>
    <h1 class="heading">
      Update password
    </h1>

    <div class="form-block">
      <p>
        Use this form to change you password.
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

      @if (session('status') === 'password-updated')
        <p>
          Password has been Updated
        </p>
      @endif

      <div class="form-container">
        <form action="{{ route('password.update') }}" method="POST">
          @csrf
          @method('put')

          <div class="form-input-group !w-full">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password">
          </div>

          <div class="form-input-group !w-full">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password">
          </div>
      
          <div class="form-input-group !w-full">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
          </div>

          <button class="btn mt-5 w-full float-right">
            Update password
          </button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>