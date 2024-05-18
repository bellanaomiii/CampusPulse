Route::get('/', function () {return view('Dashboard', ["title" => "Home"]);});

Route::get('/about', function () {return view('about', ["title" => "About Us"]);});

Route::get('/community', function () {return view('community', ["title" => "Community"]);});

Route::get('/competitions', function () {return view('competitions', ["title" => "Competitions"]);});

Route::get('/scholarships', function () {return view('scholarships', ["title" => "Scholarships"]);});


Route::get('/internships', function () {return view('internships', ["title" => "Internships"]);});

Route::get('/dbconn', function () { return view('dbconn');});

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

// Route::get('/home', function () {
//     return redirect('/admin');
// });

Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/logout', [SesiController::class, 'logout']);

});


Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');

Route::get('/register', [SesiController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [SesiController::class, 'register']);

Route::get('/login', [SesiController::class, 'index'])->name('login');

Route::get('/event', function () {
    return view('AdminDashboard.event', [
        "title" => "Events"
    ]);
});

Route::get('/regevent', function () {
    return view('AdminDashboard.daftarevent', [
        "title" => "Admin Dashboard"
    ]);
});

Route::get('/brand', function () {
    return view('AdminDashboard.brand', [
        "title" => "Admin Dashboard"
    ]);
});


Route::get('/utama', [userController::class, 'utama'])->name('utama');
Route::get('/page', [userController::class, 'index'])->name('page');


Route::resource('acara', acaraController::class);
Route::get('/acara/utama', [acaraController::class, 'utama'])->name('acara.utama');

Route::get('/notification', function(){
    emotify('success', 'Dont miss out! Lets Sign up and get your notifications!');
    return view('AdminDashboard.notification');
});

Route::get('/userdash', function () {
    return view('UserDashboard.tab1', [
        "title" => "User Dashboard"
    ]);
});

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/edit-profile', [ProfileController::class, 'edit']);
Route::post('/edit-profile', [ProfileController::class, 'update']);
Route::get('/change-password', [ProfileController::class, 'changePassword']);
Route::post('/change-password', [ProfileController::class, 'updatePassword']);
