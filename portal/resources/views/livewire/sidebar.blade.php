<nav class="sidebar" role="main">
  <div class="controls">

  </div>

  <div class="nav-items-container">
    <div class="nav-items">
      <a href="{{ route('profile') }}" aria-label="View/Edit profile information" class="nav-item">
        <livewire:profile-icon/>
      </a>
    </div>

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button>
        <livewire:logout-icon/>
      </button>
    </form>
  </div>
</nav>
