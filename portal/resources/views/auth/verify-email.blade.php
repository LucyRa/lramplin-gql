<x-guest-layout>
  <div>
    <h1>
      Verify Email
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

      @if (session('status') == 'verification-link-send')
        <p>
          A new verification link has been sent to the email address you provided during registration.
        </p>
      @endif

      <div class="form-container-btns">
        <form action="{{ route('verification.send') }}" method="POST" class="button-form">
          @csrf

          <button class="btn">
            Resend Verification Email
          </button>
        </form>

        <form action="{{ route('logout') }}" method="POST" class="button-form">
          @csrf

          <button class="btn-outline">
            logout
          </button>
        </form>
      </div>
    </div>
  </div>
</x-guest-layout>