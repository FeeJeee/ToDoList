<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container p-2">
        <a class="navbar-brand " href="{{route('welcome')}}">ToDoList</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth()
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{route('tasks')}}">TASKS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('task')}}">NEW TASK</a>
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest()
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('register')}}">REGISTER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('login')}}">LOGIN</a>
                    </li>
                @endguest



                @auth()


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('logout')}}">LOGOUT</a>
                    </li>

                @endauth
            </ul>

        </div>
    </div>
</nav>
