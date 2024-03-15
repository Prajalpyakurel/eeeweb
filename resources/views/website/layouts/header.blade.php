<nav>
    <ul class='nav-bar'>
        <li class='logo'>
            <a href="index.html">
                <img src='{{asset('logo.png')}}' class="w-[40px]" />
            </a>
        </li>
        <input type='checkbox' id='check' />
        <span class="menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li class="dropdown dropbtn"><a href="{{route('service')}}">Services</a>
                        <ul class="dropdown-content" style="background-color: var(--secondary-color;)">
                            <li style="padding-left:0px"><a href="{{route('digitalmarketing')}}">Digital Marketing</a></li>
                            <li style="padding-left:0px"><a href="{{route('service')}}"> App Development</a></li>
                            <li style="padding-left:0px"><a href="{{route('service')}}">Web Development</a></li>
                        </ul>
                    
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="">Contact</a></li>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </span>
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
    </ul>
</nav>
