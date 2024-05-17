    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="school-sharp"></ion-icon>
                        </span>
                        <span class="title">CampusPulse Admin</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('utama') }}" id="dashboardLink">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('page') }}">
                        <span class="icon">
                            <ion-icon name="people-sharp"></ion-icon>
                        </span>
                        <span class="title">Members CampusPulse</span>
                    </a>
                </li>

                <li>
                    <a href="/acara">
                        <span class="icon">
                            <ion-icon name="grid-sharp"></ion-icon>
                        </span>
                        <span class="title">Event Categories</span>
                    </a>
                </li>

                <li>
                    <a href="/regevent">
                        <span class="icon">
                            <ion-icon name="calendar-sharp"></ion-icon>
                        </span>
                        <span class="title">Registered Events</span>
                    </a>
                </li>

                <li>
                    <a href="/brand">
                        <span class="icon">
                            <ion-icon name="diamond-outline"></ion-icon>
                        </span>
                        <span class="title">Brand & Partnership</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
                <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
    
        
                        <div class="user">
                            <img src="{{ asset('import/assets/imgs/customer01.jpg') }}" alt="">
                        </div>
                    </div>
        