<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Category;
use App\Models\Movie;
=======
use App\Models\Movies;
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62

class HomeController extends Controller
{
<<<<<<< HEAD
    public function home(Request $request)
    {
        $categories = Category::take(8)->get();

        $perPage = 8; // Số lượng mục trên mỗi trang
        $currentPage = $request->get('page', 1); // Trang hiện tại, mặc định là trang 1

        $movie = Movie::skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        $totalMovies = Movie::count();

        $lastPage = ceil($totalMovies / $perPage);

        return view('users.page.home', compact('categories', 'movie', 'currentPage', 'lastPage'));
    }
    public function show($id){
        // gọi tất cả thông tin theo id
        $movies = Movie::findOrFail($id);
=======
    public function home(Request $request){

        $perPage = 8; // Số lượng mục trên mỗi trang
        $currentPage = $request->get('page', 1); // Trang hiện tại, mặc định là trang 1
        $movies = Movies::skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();
        $totalMovies = Movies::count();
        $lastPage = ceil($totalMovies / $perPage);
        return view('users.page.home', compact('movies', 'currentPage', 'lastPage'));
        
    }
       
    public function show($id){
        // gọi tất cả thông tin theo id
        $movies = movies::findOrFail($id);
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
        // Hiển thị chi tiết phim
        return view('users.page/moviesdetail', compact('movies'));
    }
    
}
