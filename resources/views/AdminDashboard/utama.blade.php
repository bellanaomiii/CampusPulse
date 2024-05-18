@extends('layouts.dash')

@section('content')
                <!-- ======================= Cards ================== -->
                <div class="cardBox">
                    <div class="card">
                        <a href="{{ route('page') }}" style="text-decoration: none; color: inherit;">
                            <div>
                                <div class="numbers">{{ $usersCount }}</div>
                                <div class="cardName">Members CampusPulse</div>
                            </div>
                        </a>
    
                        <div class="iconBx">
                            <ion-icon name="people-sharp"></ion-icon>
                        </div>
                    </div>
    
                    <div class="card">
                        <a href="{{ route('acara.index') }}" style="text-decoration: none; color: inherit;">
                        <div>
                            <div class="numbers"></div>
                            <div class="cardName">Event Categories</div>
                        </div>
    
                        <div class="iconBx">
                            <ion-icon name="grid-sharp"></ion-icon>
                        </div>
                    </div>
    
                    <div class="card">
                        <div>
                            <div class="numbers"></div>
                            <div class="cardName">Registered Events</div>
                        </div>
    
                        <div class="iconBx">
                            <ion-icon name="calendar-sharp"></ion-icon>
                        </div>
                    </div>
    
                    <div class="card">
                        <div>
                            <div class="numbers"></div>
                            <div class="cardName">Partnerships</div>
                        </div>
    
                        <div class="iconBx">
                            <ion-icon name="diamond-outline"></ion-icon>
                        </div>
                    </div>
                </div>
    
        <!-- =========== Scripts =========  -->
        <script src="{{ asset('import/assets/js/main.js') }}"></script>
    
        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
