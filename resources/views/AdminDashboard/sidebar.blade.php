<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
</div>

<div class="containers">
    <div class="navigation">
        <ul>
            <li>
                <a href="#" >
                    <span class="icon">
                        <ion-icon name="school-sharp"></ion-icon>
                    </span>
                    <span class="title">CampusPulse Admin</span>
                </a>
            </li>

            <li>
                <a href="" id="dashboardLink">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="" id="userAccountLink">
                    <span class="icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </span>
                    <span class="title">User Account</span>
                </a>
            </li>

            <li>
                <a href="/event" id="dashboardLink">
                    <span class="icon">
                        <ion-icon name="fitness-sharp"></ion-icon>
                    </span>
                    <span class="title">Events</span>
                </a>
            </li>

            <li>
                <a href="" id="categoryLink">
                    <span class="icon">
                        <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Events Category</span>
                </a>
            </li>

            <li>
                <a href="" id="ordersLink">
                    <span class="icon">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                    </span>
                    <span class="title">Events Status</span>
                </a>
            </li>

            <li>
                <a href="" id="partnershipsLink">
                    <span class="icon">
                        <ion-icon name="megaphone-outline"></ion-icon>
                    </span>
                    <span class="title">Partnerships</span>
                </a>
            </li>


            <li>
                <form method="POST" action="">
                    @csrf
                    <button type="submit" id="logOutLink">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div> 

