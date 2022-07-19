<nav class="sidebar" role="main">
  <div class="controls">

  </div>

  <div class="nav-items-container">
    <div class="nav-items">

    </div>

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button>
        <livewire:logout-icon/>
      </button>
    </form>
  </div>
</nav>
