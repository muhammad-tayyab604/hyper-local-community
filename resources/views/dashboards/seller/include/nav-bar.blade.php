<style>
    /* Style the dropdown menu */
.dropdown-menu {
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow */
}

/* Style dropdown items */
.dropdown-item {
    color: black; /* Text color */
    font-size: 12px
    padding: 10px 15px;
    transition: background-color 0.3s ease-in-out;
}

/* Hover effect */
.dropdown-item:hover {
    background-color: whitesmoke; /* Slightly lighter dark */
}

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 fixed-top px-5">
	<div class="container-fluid">

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user"></i>
						Hi! {{ Auth::user()->name }}
					</a>
					<ul class="dropdown-menu dropdown-menu-start" aria-labelledby="userDropdown">
						<li>
<button type="submit" class="dropdown-item">{{ Auth::user()->name }} Edit Profile</button>

                            <button type="submit" class="dropdown-item">Notifications</button>
                            <form method="POST" action="{{ route('logout') }}" id="logout">
                                @csrf
                                <button type="submit" class="btn btn-link text-black">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    <span class="">Log Out</span>
                                </button>
                            </form>

						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>


