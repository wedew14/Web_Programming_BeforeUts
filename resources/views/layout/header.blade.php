<div class ="row">
    <div class = "col-12">
        <nav class ="navbar navbar-expand-sm navbar-dark bg-dark navbar px-5">
            <div class="col-6">
                <h1 style="color:white">EduFun</h1>
            </div>
            <div class="col-6">
                <ul class ="navbar-nav justify-content-end">
                    <li class ="nav-item">
                        <a class ="nav-link" href="{{route('homepage')}}">Homepage</a>
                    </li>

                    <div class="dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                        </a> -->
                        <button class="btn nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">
                            Category
                        </button>
                        <ul class="dropdown-menu position-relative;">
                            <li><a class="dropdown-item" href="{{route('threadlist', $id = 1)}}">Software Engineer</a></li>
                            <li><a class="dropdown-item" href="{{route('threadlist', $id = 2)}}">Interactive Multimedia</a></li>
                        </ul>
                    </div>

                    <li class ="nav-item">
                        <a class ="nav-link" href="{{route('authorpage')}}">Writers</a>
                    </li>

                    <li class ="nav-item">
                        <a class ="nav-link" href="{{route('aboutuspage')}}">About Us</a>
                    </li>

                    <li class ="nav-item">
                        <a class ="nav-link" href="{{route('popularPage')}}">Popular</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


