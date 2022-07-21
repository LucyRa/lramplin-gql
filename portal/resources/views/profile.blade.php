<x-app-layout>
  <div>
    <h1 class="heading">
      Profile
    </h1>

    <div class="form-block">
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

      @if (session('status') === 'profile-information-updated')
        <p>
          Profile Info Updated
        </p>
      @endif

      <div class="form-container">
        <form action="{{ route('user-profile-information.update') }}" method="POST">
          @csrf
          @method('put')

          <div class="form-input-group !w-full">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="!max-w-full" value="{{ old('name', auth()->user()->name) }}" autofocus>
          </div>

          <div class="form-input-group !w-full">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="!max-w-full" value="{{ old('email', auth()->user()->email) }}" autofocus>
          </div>

          <button class="btn mt-5 w-full float-right">
            Update profile
          </button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>