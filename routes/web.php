<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\dashboardControllers\admin\AdminDashboardController;
use App\Http\Controllers\dashboardControllers\admin\AgentsController;
use App\Http\Controllers\dashboardControllers\buyer\BuyerDashboardController;
use App\Http\Controllers\dashboardControllers\admin\CardController;
use App\Http\Controllers\dashboardControllers\admin\CategoryController;
use App\Http\Controllers\dashboardControllers\admin\projectController;
use App\Http\Controllers\dashboardControllers\admin\SubCategoryController;
use App\Http\Controllers\dashboardControllers\admin\ArticalCategoryController;
use App\Http\Controllers\dashboardControllers\admin\ProductController;
use App\Http\Controllers\dashboardControllers\admin\TeamController;
use App\Http\Controllers\dashboardControllers\admin\TestimonialsController;
use App\Http\Controllers\dashboardControllers\admin\FormsController;
use App\Http\Controllers\dashboardControllers\admin\blogController;
use App\Http\Controllers\dashboardControllers\admin\AvailablityProjectsController;
use App\Http\Controllers\buyController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\dashboardControllers\seller\SellerDashboardController;
use App\Http\Controllers\dashboardControllers\seller\SellerServicesController;
use App\Http\Controllers\dashboardControllers\seller\ServiceCategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\insideBlogController;
use App\Http\Controllers\insideFormController;
use App\Http\Controllers\insideListingController;
use App\Http\Controllers\insideProjectController;
use App\Http\Controllers\investmentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\rentController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\showBlogController;
use App\Models\AvailabilityProject;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});


//---------------- User Routes --------------

// Home
Route::get('/', [homeController::class, 'home'])->name('home');

// Rent
Route::get('/rent', [rentController::class, 'rent'])->name('rent');
Route::get('/searchProducts', [rentController::class, 'searchProducts'])->name('searchProducts');

// Buy
Route::get('/buy', [buyController::class, 'buy'])->name('buy');

// Investments
Route::get('/investments', [investmentsController::class, 'investments'])->name('investments');

// services
Route::get('/services', [servicesController::class, 'services'])->name('services');

// about
Route::get('/about', [aboutController::class, 'about'])->name('about');

// Blog
Route::get('/blog', [showBlogController::class, 'index'])->name('blog');

// contact
Route::get('/contact', [contactController::class, 'contact'])->name('contact');

// Inside LIsting
Route::get('/insidelisting/{buyProduct}', [insideListingController::class, 'insideListing'])->name('insideListing');

// Inside Blog
Route::get('/blog/insideblog/{id}', [insideBlogController::class, 'insideBlog'])->name('insideBlog');

// All Projects
Route::get('/all-projects', [ProjectsController::class, 'allProjects'])->name('allProjects');

// Inside Projects
Route::get('/projects/insideprojects/{project}', [insideProjectController::class, 'insideProject'])->name('insideProject');

// Locations
Route::get('/location/{location}', [LocationController::class, 'location'])->name('location');


// IsnideBlog Searching
Route::get('/blog-search/{id}', [insideBlogController::class, 'insideBlog'])->name('inside-blog');
Route::get('/all-blogSearch', [showBlogController::class, 'index'])->name('blog-search');


Route::get('/guide', function () {
    return view('guide');
});
Route::get('/terms-conditions', function () {
    return view('termsAndConditions');
});
Route::get('/support-center', function () {
    return view('supportCenter');
});
Route::get('/privacy-policy', function () {
    return view('privacyPolicy');
});




// ----------Form CRUD----------

// Form Submit
Route::post('/form-submit', [insideFormController::class, 'formSubmit'])->name('form.submit');
Route::post('/form-enquiry-valuation', [insideFormController::class, 'enqValuationForm'])->name('enqValuationForm.submit');

// downloadPDF
Route::get('download-pdf/{filename}', [projectController::class, 'downloadPDF'])->name('pdf.download');

Route::get('/guide', function () {

    return view('guide');
});

// ----------Form CRUD Ends----------
Route::post('submit-comment', [commentController::class, 'submitComment'])->name('submit.comment');

//---------------- User Routes Ends -----------


Route::get('/login', function () {
    return view('auth.login');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function () {

    // Role's routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
    });

    Route::middleware(['role:buyer'])->group(function () {
        Route::get('/buyer/dashboard', [BuyerDashboardController::class, 'dashboard'])->name('buyer.dashboard');
    });

    Route::middleware(['role:seller'])->group(function () {
        Route::get('/seller/dashboard', [SellerDashboardController::class, 'dashboard'])->name('seller.dashboard');
        // Services CRUD
        Route::resource('services', SellerServicesController::class);
        Route::resource('service-categories', ServiceCategoryController::class);

    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    // Route::get('/show-category', [ServiceCategoryController::class, 'index'])->name('show.category');
    // Route::get('/create-category', [ServiceCategoryController::class, 'show'])->name('show.form.category');
    // Route::post('/create-category', [CategoryController::class, 'create'])->name('create.category');
    // Route::get('/view-category/{id}', [CategoryController::class, 'view'])->name('view.category');
    // Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    // Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
    // Route::post('/delete-category', [CategoryController::class, 'delete'])->name('delete.category');

    Route::get('/show-subcategory', [SubCategoryController::class, 'index'])->name('show.subcategory');
    Route::get('/create-subcategory', [SubCategoryController::class, 'show'])->name('show.form.subcategory');
    Route::post('/create-subcategory', [SubCategoryController::class, 'create'])->name('create.subcategory');
    Route::get('/view-subcategory/{id}', [SubCategoryController::class, 'view'])->name('view.subcategory');
    Route::get('/edit-subcategory/{id}', [SubCategoryController::class, 'edit'])->name('edit.subcategory');
    Route::post('/update-subcategory/{id}', [SubCategoryController::class, 'update'])->name('update.subcategory');
    Route::post('/delete-subcategory', [SubCategoryController::class, 'delete'])->name('delete.subcategory');


    // products


    Route::resource('product', ProductController::class);
    Route::post('product-delete', [ProductController::class, 'delete'])->name('product_delete');
    // category wise artical
    // Route::get('category/artical', [ArticalCategoryController::class, 'index'])->name('index.category.artical');
    // Route::get('category/artical/create', [ArticalCategoryController::class, 'create']);
    // Route::post('/store/category/artical', [ArticalCategoryController::class, 'store'])->name('store.category.artical');
    // Route::get('/show/category/artical/{id}', [ArticalCategoryController::class, 'show'])->name('view.category.artical');
    // Route::get('/edit/category/artical/{id}', [ArticalCategoryController::class, 'edit'])->name('edit.category.artical');
    // Route::post('/update/category/artical/{id}', [ArticalCategoryController::class, 'update'])->name('update.category.artical');
    // Route::post('/delete/category/artical', [ArticalCategoryController::class, 'destroy'])->name('delete.category.artical');

    // Testimonials
    Route::get('/index-testimonials', [TestimonialsController::class, 'index'])->name('index.testimonials');
    Route::get('/create-testimonials', [TestimonialsController::class, 'create'])->name('show.form.testimonials');
    Route::post('/store-testimonials', [TestimonialsController::class, 'store'])->name('store.form.testimonials');
    Route::get('/edit-testimonials/{id}', [TestimonialsController::class, 'edit'])->name('edit.form.testimonials');
    Route::post('/update-testimonial/{id}', [TestimonialsController::class, 'update'])->name('update.form.testimonials');
    Route::get('/show-testimonial/{id}', [TestimonialsController::class, 'show'])->name('show.testimonial');
    Route::post('/delete-testimonial', [TestimonialsController::class, 'delete'])->name('testimonial_delete');

    // More Information Form
    Route::get('/information-form', [FormsController::class, 'formIndex'])->name('information.form.index');
    Route::get('/show-form/{id}', [FormsController::class, 'show'])->name('information.form.show');
    Route::post('/delete-form', [FormsController::class, 'delete'])->name('delete_form');

    // Blog
    Route::get('blog-index', [blogController::class, 'index'])->name('blog.index');
    Route::get('blog-create', [blogController::class, 'create'])->name('blog.create');
    Route::post('blog-store', [blogController::class, 'store'])->name('blog.store');
    Route::post('blog-delete', [blogController::class, 'delete'])->name('blog.delete');
    Route::get('blog-edit/{id}', [blogController::class, 'edit'])->name('blog.edit');
    Route::post('blog-update/{id}', [blogController::class, 'update'])->name('blog.update');
    Route::get('blog-show/{id}', [blogController::class, 'show'])->name('blog.show');
    Route::post('comment-delete', [blogController::class, 'commentDelete'])->name('comment.delete');

    // Project
    Route::get('project-index', [projectController::class, 'index'])->name('project.index');
    Route::get('project-create', [projectController::class, 'create'])->name('project.create');
    Route::post('project-store', [projectController::class, 'store'])->name('project.store');
    Route::get('project-edit/{id}', [projectController::class, 'edit'])->name('project.edit');
    Route::post('project-update/{id}', [projectController::class, 'update'])->name('project.update');
    Route::get('project-show/{id}', [projectController::class, 'show'])->name('project.show');
    Route::post('project-delete', [projectController::class, 'delete'])->name('project.delete');


    // Agents
    Route::get('agent-index', [AgentsController::class, 'index'])->name('agent.index');
    Route::get('agent-show/{id}', [AgentsController::class, 'show'])->name('agent.show');
    Route::get('agent-create', [AgentsController::class, 'create'])->name('agent.create');
    Route::get('agent-edit/{id}', [AgentsController::class, 'edit'])->name('agent.edit');
    Route::post('agent-store', [AgentsController::class, 'store'])->name('agent.store');
    Route::post('agent-update/{id}', [AgentsController::class, 'update'])->name('agent.update');
    Route::post('agent-delete', [AgentsController::class, 'delete'])->name('agent.delete');

    // Team Members
    Route::get('team-index', [TeamController::class, 'index'])->name('team.index');
    Route::get('team-create', [TeamController::class, 'create'])->name('team.create');
    Route::post('team-store', [TeamController::class, 'store'])->name('team.store');
    Route::get('team-view/{id}', [TeamController::class, 'view'])->name('team.view');
    Route::get('team-edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('team-update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::post('team-delete', [TeamController::class, 'delete'])->name('team.delete');

    // Availablity of sapce in our projects
    Route::get('availability-index', [AvailablityProjectsController::class, 'index'])->name('availability.index');
    Route::get('availability-create', [AvailablityProjectsController::class, 'create'])->name('availability.create');
    Route::post('store-available-project', [AvailablityProjectsController::class, 'store'])->name('availability.store');
    Route::get('edit-available-project/{id}', [AvailablityProjectsController::class, 'edit'])->name('availability.edit');
    Route::post('update-available-project/{id}', [AvailablityProjectsController::class, 'update'])->name('availability.update');
    Route::get('view-available-project/{id}', [AvailablityProjectsController::class, 'show'])->name('availability.show');
    Route::post('delete-available-project', [AvailablityProjectsController::class, 'delete'])->name('availability.delete');

    // Enquiry and valuation form
    Route::get('/enquiry-valuation-index', [FormsController::class, 'EnquiryValuationForm'])->name('index.enquiryForm');

    Route::post('/enquiry-valuation', [FormsController::class, 'EnquiryValuationFormDelete'])->name('delete_enquiry_valuation_form');
});



require __DIR__ . '/auth.php';
